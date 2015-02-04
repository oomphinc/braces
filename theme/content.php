<?php
/**
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) { ?>
		<div class="entry-meta">
			<?php braces_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php } ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'braces' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'braces' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<div class="entry-meta">
			<?php
				if ( 'post' == get_post_type() ) { // Hide category and tag text for pages on Search
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'braces' ) );
					if ( $categories_list && braces_categorized_blog() ) {
				?>
				<span class="cat-links">
					<?php printf( __( 'Posted in %1$s', 'braces' ), $categories_list ); ?>
				</span>
				<?php } // End if categories ?>

				<?php
					/* translators: used between list items, there is a space after the comma */
					$tags_list = get_the_tag_list( '', __( ', ', 'braces' ) );
					if ( $tags_list ) {
				?>
				<span class="tags-links">
					<?php printf( __( 'Tagged %1$s', 'braces' ), $tags_list ); ?>
				</span>
				<?php } // End if $tags_list ?>
			<?php } // End if 'post' == get_post_type() ?>

			<?php if ( !post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) { ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'braces' ), __( '1 Comment', 'braces' ), __( '% Comments', 'braces' ) ); ?></span>
			<?php } ?>

			<?php edit_post_link( __( 'Edit', 'braces' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
