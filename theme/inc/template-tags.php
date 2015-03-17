<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

/**
 * Display navigation to next/previous set of posts when applicable.
 */
function braces_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'braces' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) { ?>
				<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'braces' ) ); ?></div>
			<?php } ?>

			<?php if ( get_previous_posts_link() ) { ?>
				<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'braces' ) ); ?></div>
			<?php } ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

/**
 * Display navigation to next/previous post when applicable.
 */
function braces_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'braces' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'braces' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link',     'braces' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}

/**
 * Prints the attached image with a link to the next attached image.
 */
function braces_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'braces_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();

	/**
	 * Grab the IDs of all the image attachments in a gallery so we can get the
	 * URL of the next adjacent image in a gallery, or the first image (if
	 * we're looking at the last image in a gallery), or, in a gallery of one,
	 * just the link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
		'suppress_filters' => false
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id ) {
			$next_attachment_url = get_attachment_link( $next_id );
		}
		// or get the URL of the first image attachment.
		else {
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
		}
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}

/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function braces_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		_x( 'Posted on %s', 'post date', 'braces' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		_x( 'by %s', 'post author', 'braces' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);

	echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>';
}

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function braces_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'braces_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'braces_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so braces_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so braces_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in braces_categorized_blog
 */
function braces_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'braces_categories' );
}
add_action( 'edit_category', 'braces_category_transient_flusher' );
add_action( 'save_post',     'braces_category_transient_flusher' );

/**
 * Prints HTML with meta information for the posts categories, tags, & edit links.
 */
function braces_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( __( ', ', 'braces' ) );
		if ( $categories_list && braces_categorized_blog() ) {
			printf( '<div class="cat-links">' . __( 'Posted in %1$s', 'braces' ) . '</div>', $categories_list );
		}
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', __( ', ', 'braces' ) );
		if ( $tags_list ) {
			printf( '<div class="tags-links">' . __( 'Tagged %1$s', 'braces' ) . '</div>', $tags_list );
		}
	}
	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<div class="comments-link">';
		comments_popup_link( __( 'Leave a comment', 'braces' ), __( '1 Comment', 'braces' ), __( '% Comments', 'braces' ) );
		echo '</div>';
	}
	edit_post_link( __( 'Edit', 'braces' ), '<div class="edit-link">', '</div>' );
}

/**
 * Render the post thumbnail
 * If we have picturefill enabled then lets use it, if not,
 * we default to the core thumbnail functionality
 *
 * @param  string $size the size of the slected image
 * @return string
 * @author johncionci
 */
function braces_post_thumbnail( $size ) {
	if ( function_exists( 'braces_picturefill_post_thumbnail' ) && has_post_thumbnail() ) {
		braces_picturefill_post_thumbnail( 'featured' );
	} elseif ( has_post_thumbnail() ) { ?>
	<div class="entry-thumbnail">
		<?php the_post_thumbnail( $size ); ?>
	</div>
	<?php }
}
