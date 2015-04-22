<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * @param array $args Configuration arguments.
 * @return array
 */
function braces_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'braces_page_menu_args' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function braces_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'braces_body_classes' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
function braces_enhanced_image_navigation( $url, $id ) {
	if ( !is_attachment() && !wp_attachment_is_image( $id ) )
		return $url;

	$image = get_post( $id );
	if ( !empty( $image->post_parent ) && $image->post_parent != $id ) {
		$url .= '#main';
	}

	return $url;
}
add_filter( 'attachment_link', 'braces_enhanced_image_navigation', 10, 2 );

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function braces_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'braces' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'braces_wp_title', 10, 2 );

/**
 * Sets the authordata global when viewing an author archive.
 *
 * This provides backwards compatibility with
 * http://core.trac.wordpress.org/changeset/25574
 *
 * It removes the need to call the_post() and rewind_posts() in an author
 * template to print information about the author.
 *
 * @global WP_Query $wp_query WordPress Query object.
 * @return void
 */
function braces_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'braces_setup_author' );

/**
 * Modify the callback of categories / archives widgets to allow us
 * to filter output markup
 *
 * @action dynamic_sidebar_params
 */
function braces_alter_widget_callback( $params ) {
	global $wp_registered_widgets;

	$widget_id = $params[0]['widget_id'];

	if( preg_match( '/^(categories|archives|monster)-\d+$/', $widget_id ) ) {
		// Squirrel away the original callback in $params['callback'].
		// Override the callback with our own which will tweak the widget output
		$params[0]['callback'] = $wp_registered_widgets[$widget_id]['callback'];

		$wp_registered_widgets[$widget_id]['callback'] = 'braces_tweak_widget_markup';
	}

	return $params;
}
add_action( 'dynamic_sidebar_params', 'braces_alter_widget_callback' );

/**
 * Modify widget outputs to:
 *
 * - Remove &nbsp; in output.
 *
 * Expects that $widget['callback'] is set
 */
function braces_tweak_widget_markup( $widget ) {
	ob_start();
	call_user_func_array( $widget['callback'], func_get_args() );
	$markup = ob_get_clean();

	// Replace non breaking spaces before setting up post count badges,
	// archives widget places &nbsp; between anchor and post count
	$markup = str_replace( '&nbsp;', '', $markup );
	$markup = preg_replace( '#<\/a>\s*\((\d+)\)\s*#', '</a> <span class="count">$1</span>', $markup );

	echo $markup;
}