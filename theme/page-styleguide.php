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
				<?php for ($i=0; $i < 4; $i++) { ?>
					<div class="color-block">
						<div class="color">Color</div>
						<div class="color-shade">Color Shade</div>
						<div class="color-shade">Color Shade</div>
						<div class="color-shade">Color Shade</div>
						<div class="color-shade">Color Shade</div>
					</div>
				<?php } ?>
			</section>

			<section class="styleguide-section">
				<h2>Typography</h2>
				<h1>h1</h1>
				<h2>h2</h2>
				<h3>h3</h3>
				<h4>h4</h4>
				<h5>h5</h5>
				<h6>h6</h6>
				<p>Pellentesque habitant morbi <strong>tristique senectus et netus et</strong> malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
				<blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>
				<ul>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
					<li>Aliquam tincidunt mauris eu risus.</li>
				</ul>
				<ol>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
					<li>Aliquam tincidunt mauris eu risus.</li>
				</ol>
			</section>

			<section class="styleguide-section">
				<h2>Pagination</h2>
				<h3>Post Navigation</h3>
				<nav class="navigation paging-navigation" role="navigation">
					<h1 class="screen-reader-text sr-only sr-only-focusable">Post navigation</h1>
					<ul class="nav-links pager list-unstyled">
						<li class="nav-previous previous"><a href="#" class="prev-post"><span class="meta-nav" aria-hidden="true">&larr;</span> Older posts</a></li>
						<li class="nav-next next"><a href="#" class="next-post">Newer posts <span class="meta-nav" aria-hidden="true">&rarr;</span></a></li>
					</ul><!-- .nav-links -->
				</nav>
			</section>

			<section class="styleguide-section">
				<h2>Breadcrumbs</h2>
			</section>

			<section class="styleguide-section">
				<h2>Post Meta</h2>
				<?php braces_posted_on(); ?>
			</section>

			<section class="styleguide-section">
				<h2>Comments</h2>
			</section>

			<section class="styleguide-section">
				<h2>Forms</h2>
			</section>

			<section class="styleguide-section">
				<h2>Article - Post</h2>
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

			<section class="styleguide-section">
				<h2>Article - Page</h2>
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

			<section class="styleguide-section">
				<h2>Archive</h2>
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