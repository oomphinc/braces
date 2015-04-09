<?php
/**
 * The template for displaying the styleguide page template.
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1 class="entry-title">{ Client } Styleguide</h1>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Colors</h2>
				<?php for ($i=1; $i < 5; $i++) { ?>
					<div id="color-block-<?php echo $i; ?>" class="color-block clearfix">
						<div class="color">Color</div>
						<div class="color-shade color-shade-one">Color Shade</div>
						<div class="color-shade color-shade-two">Color Shade</div>
						<div class="color-shade color-shade-three">Color Shade</div>
						<div class="color-shade color-shade-four">Color Shade</div>
					</div>
				<?php } ?>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Hero</h2>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Typography</h2>
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
				<hr/>
				<table>
					<thead>
						<tr>
							<th>Header Row</th>
							<th>Header Row</th>
							<th>Header Row</th>
							<th>Header Row</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
						</tr>
						<tr>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
						</tr>
						<tr>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
							<td>Aliquam tincidunt mauris eu risus.</td>
						</tr>
					</tbody>
				</table>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Pagination</h2>
				<h3>Post Navigation</h3>
				<nav class="navigation paging-navigation" role="navigation">
					<h1 class="screen-reader-text">Post navigation</h1>
					<ul class="nav-links">
						<li class="nav-previous previous">
							<a href="#" class="prev-post"><span class="meta-nav" aria-hidden="true">&larr;</span> Older posts</a>
						</li>
						<li class="nav-next next">
							<a href="#" class="next-post">Newer posts <span class="meta-nav" aria-hidden="true">&rarr;</span></a>
						</li>
					</ul><!-- .nav-links -->
				</nav>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Breadcrumbs</h2>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Buttons</h2>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Author Block</h2>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Post Meta</h2>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Comments</h2>
				<h2 class="comments-title">3 thoughts on “<span>Styleguide</span>”</h2>
				<ol class="comment-list">
					<?php
						$comments = get_comments( array( 'status' => 'approve' ) );
						wp_list_comments( array( 'per_page' => 3 ), $comments );
					?>
				</ol>
				<?php comment_form(); ?>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Forms</h2>
				<form action="#" method="post" id="input-form" class="input-form" novalidate="">
					<div class="input-group">
						<div class="input-item">
							<label for="input">Name <span class="required">*</span></label>
							<input id="input-text" name="input-text" type="text" value="" size="30" aria-required="true">
						</div>
						<div class="input-item">
							<label for="input">Email <span class="required">*</span></label>
							<input id="input-email" name="input-email" type="email" value="" size="30" aria-required="true">
						</div>
						<div class="input-item">
							<label for="input">Url <span class="required">*</span></label>
							<input id="input-url" name="input-url" type="url" value="" size="30" aria-required="true">
						</div>
					</div>
					<div class="radio-group">
						<div class="radio-item">
							<input type="radio" name="animal" value="Cat" />
							<label for="radio-item">Cat</label>
						</div>
						<div class="radio-item">
							<input type="radio" name="animal" value="Dog" />
							<label for="radio-item">Dog</label>
						</div>
					</div>
					<div class="checkbox-group">
						<div class="checkbox-item">
							<input type="checkbox" name="animal" value="Cat" />
							<label for="checkbox-item">Cat</label>
						</div>
						<div class="checkbox-item">
							<input type="checkbox" name="animal" value="Dog" />
							<label for="checkbox-item">Dog</label>
						</div>
						<div class="checkbox-item">
							<input type="checkbox" name="animal" value="Bird" />
							<label for="checkbox-item">Bird</label>
						</div>
					</div>
				</form>
			</section>

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Archives</h2>
				<?php
					$args = array( 'posts_per_page' => 3, 'offset'=> 1 );
					$myarchives = get_posts( $args );
					foreach ( $myarchives as $post ) : setup_postdata( $post );
						get_template_part( 'content', get_post_format() );
					endforeach;
					wp_reset_postdata();
				?>
			</section><!-- .styleguide-section -->

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Article - Post</h2>
				<?php
					$args = array( 'posts_per_page' => 1 );
					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post );
						get_template_part( 'content', 'single' );
					endforeach;
					wp_reset_postdata();
				?>
			</section><!-- .styleguide-section -->

			<section class="styleguide-section clearfix">
				<h2 class="styleguide-section-title">Article - Page</h2>
				<?php
					$args = array( 'posts_per_page' => 1, 'post_type' => 'page',  'offset'=> 1 );
					$mypages = get_posts( $args );
					foreach ( $mypages as $post ) : setup_postdata( $post );
						get_template_part( 'content', 'page' );
					endforeach;
					wp_reset_postdata();
				?>
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