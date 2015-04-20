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

			<h1 class="entry-title"><?php bloginfo( 'name' ); ?> Styleguide</h1>

			<section class="styleguide-section styleguide-colors clearfix">
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

			<section class="styleguide-section styleguide-hero clearfix">
				<h2 class="styleguide-section-title">Hero ( needs a standardized plugin )</h2>
				<div class="flexslider">
					<ul class="slides">
						<li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_caramel.jpg" /></li>
						<li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_cheesecake_brownie.jpg" /></li>
						<li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_donut.jpg" /></li>
						<li><img src="http://flexslider.woothemes.com/images/kitchen_adventurer_lemon.jpg" /></li>
					</ul>
				</div>
			</section>

			<section class="styleguide-section styleguide-typography clearfix">
				<h2 class="styleguide-section-title">Typography</h2>
				<h1>h1.Heading</h1>
				<h2>h2.Heading</h2>
				<h3>h3.Heading</h3>
				<h4>h4.Heading</h4>
				<h5>h5.Heading</h5>
				<h6>h6.Heading</h6>
				<p>Pellentesque habitant morbi <strong>tristique senectus et netus et</strong> malesuada <em>fames ac turpis egestas</em>. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. <del>Donec eu libero sit amet</del> quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
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

			<section class="styleguide-section styleguide-pagination clearfix">
				<h2 class="styleguide-section-title">Pagination</h2>
				<h3>Post & Page Navigation</h3>
				<nav class="navigation page-navigation post-navigation" role="navigation">
					<h1 class="screen-reader-text">Post navigation</h1>
					<div class="nav-links">
						<div class="nav-previous">
							<a href="http://localhost/2010/08/post-format-image/" rel="prev"><span class="meta-nav">&laquo;</span> Post Format: Image</a>
						</div>
						<div class="nav-next">
							<a href="http://localhost/2010/09/post-format-gallery/" rel="next">Post Format: Gallery <span class="meta-nav">&raquo;</span></a>
						</div>
					</div><!-- .nav-links -->
				</nav>
				<h3>Pager Navigation ( needs a standardized plugin )</h3>
				<ul class="pager">
					<li class="first"><a href="#">&laquo; First</a></li>
					<li class="previous"><a href="#">&lsaquo; Previous</a></li>
					<li><a href="#">1</a></li>
					<li class="current">2</li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li class="next"><a href="#">Next &rsaquo;</a></li>
					<li class="last"><a href="#">Last &raquo;</a></li>
				</ul>
			</section>

			<section class="styleguide-section styleguide-breadcrumbs clearfix">
				<h2 class="styleguide-section-title">Breadcrumbs ( needs a standardized plugin )</h2>
			</section>

			<section class="styleguide-section styleguide-buttons clearfix">
				<h2 class="styleguide-section-title">Buttons</h2>
				<input name="submit" type="submit" id="submit-primary" class="submit primary" value="Primary Button">
				<input name="submit" type="submit" id="submit-secondary" class="submit secondary" value="Secondary Button">
			</section>

			<section class="styleguide-section styleguide-gallery clearfix">
				<h2 class="styleguide-section-title">Gallery <!--( uses test data :: post-format-gallery-tiled )--></h2>
				<?php
					// $mygalleryslug = 'post-format-gallery-tiled';
					// $args = array( 'posts_per_page' => 1, 'name' => $mygalleryslug );
					// $mygallery = get_posts( $args );
					// foreach ( $mygallery as $post ) : setup_postdata( $post );
					// 	the_content();
					// endforeach;
					// wp_reset_postdata();
				?>
				<div id="gallery" class="gallery clearfix">
				<?php for ($i=1; $i < 9; $i++) { ?>
					<figure class="gallery-item">
						<div class="gallery-icon landscape">
							<a href="#"><img src="http://placehold.it/150x150" class="attachment-thumbnail" alt="Sydney Harbor Bridge" aria-describedby="gallery-1-760"></a>
						</div>
						<figcaption class="wp-caption-text gallery-caption" id="gallery-1-760">
							Figure Caption
						</figcaption>
					</figure>
				<?php } ?>
			</section>

			<section class="styleguide-section styleguide-author clearfix">
				<h2 class="styleguide-section-title">Author Block ( needs to be a braces template tag )</h2>
				<div class="entry-author">
					<div class="entry-author-avatar">
						<?php echo get_avatar( 1, 96 ); ?>
					</div><!-- .entry-author-avatar -->
					<div class="entry-author-info">
						<p class="entry-author-bio">
							<?php the_author_meta( 'description', 1 ); ?>
							<a class="entry-author-link" href="<?php echo esc_url( get_author_posts_url( 1 ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by admin', 'braces' ) ); ?>
							</a>
						</p><!-- .entry-author-bio -->
					</div><!-- .entry-author-info -->
				</div><!-- .entry-author -->
			</section>

			<section class="styleguide-section styleguide-comments clearfix">
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

			<section class="styleguide-section styleguide-forms clearfix">
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

			<section class="styleguide-section styleguide-archives clearfix">
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

			<section class="styleguide-section styleguide-post clearfix">
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

			<section class="styleguide-section styleguide-page clearfix">
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