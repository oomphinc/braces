<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'braces' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'braces' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php
			}
			elseif ( is_search() ) { ?>

				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'braces' ); ?></p>
			<?php
				get_search_form();
			}
			else { ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'braces' ); ?></p>
			<?php get_search_form(); ?>

		<?php } ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
