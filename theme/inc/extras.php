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