<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Styleguide
 * Description: A page template to show all elements and features of the site.
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class="">{ Client } Styleguide</h1>

			<section class="styleguide-section">
				<h2>Colors</h2>
			</section>

			<section class="styleguide-section">
				<h2>Typography</h2>
			</section>

			<section class="styleguide-section">
				<h2>Pagination</h2>
			</section>

			<section class="styleguide-section">
				<h2>Breadcrumbs</h2>
			</section>

			<section class="styleguide-section">
				<h2>Post Meta</h2>
			</section>

			<section class="styleguide-section">
				<h2>Comments</h2>
			</section>

			<section class="styleguide-section">
				<h2>Forms</h2>
			</section>

			<section class="styleguide-section">
				<h2>Article ( Post or Page )</h2>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					<?php braces_post_thumbnail(); ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'braces' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<footer class="entry-footer">
						<div class="entry-meta">
							<?php braces_entry_footer(); ?>
						</div><!-- .entry-meta -->
					</footer><!-- .entry-footer -->
				</article><!-- #post-## -->
			</section><!-- .styleguide-section -->

		</main><!-- #main -->
	</section><!-- #primary -->

	<div id="secondary" class="widget-area" role="complementary">
		<?php if ( !dynamic_sidebar( 'sidebar-1' ) ) { ?>

			<aside id="search" class="widget widget_search">
				<?php get_search_form(); ?>
			</aside>

			<aside id="archives" class="widget">
				<h1 class="widget-title"><?php _e( 'Archives', 'braces' ); ?></h1>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>
			</aside>

			<aside id="meta" class="widget">
				<h1 class="widget-title"><?php _e( 'Meta', 'braces' ); ?></h1>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</aside>

		<?php } // end sidebar widget area ?>
	</div><!-- #secondary -->

<?php
get_footer();