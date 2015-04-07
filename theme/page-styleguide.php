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
				<h2>Hero</h2>
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
				<div class="entry-meta">
					<span class="posted-on">Posted on <a href="http://localhost/2012/01/template-sticky/" rel="bookmark">
						<time class="entry-date published" datetime="2012-01-07T07:07:21+00:00">January 7, 2012</time>
						<time class="updated" datetime="2015-02-04T21:55:04+00:00">February 4, 2015</time></a>
					</span>
					<span class="byline"> by <span class="author vcard">
						<a class="url fn n" href="http://localhost/author/themedemos/">themedemos</a></span>
					</span>
				</div>
			</section>

			<section class="styleguide-section">
				<h2>Comments</h2>
				<div id="comments" class="comments-area">
					<h2 class="comments-title">3 thoughts on “<span>Page with comments</span>”</h2>
						<ol class="comment-list">
							<li id="comment-3" class="comment even thread-even depth-1">
								<article id="div-comment-3" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img alt="" src="http://0.gravatar.com/avatar/ef331c6e33890a8fa68e36cb7a7f0f87?s=32&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
											<b class="fn">tellyworthtest2</b> <span class="says">says:</span>
										</div><!-- .comment-author -->
										<div class="comment-metadata">
											<a href="http://localhost/about/page-with-comments/#comment-3">
												<time datetime="2007-09-04T10:49:03+00:00">September 4, 2007 at 10:49 am</time>
											</a>
											<span class="edit-link">
												<a class="comment-edit-link" href="http://localhost/wp-admin/comment.php?action=editcomment&amp;c=3">Edit</a>
											</span>
										</div><!-- .comment-metadata -->
									</footer><!-- .comment-meta -->
									<div class="comment-content">
										<p>Contributor comment.</p>
									</div><!-- .comment-content -->
									<div class="reply">
										<a class="comment-reply-link" href="/about/page-with-comments/?replytocom=3#respond" onclick="return addComment.moveForm( &quot;div-comment-3&quot;, &quot;3&quot;, &quot;respond&quot;, &quot;155&quot; )" aria-label="Reply to tellyworthtest2">Reply</a>
									</div>
								</article><!-- .comment-body -->
							</li><!-- #comment-## -->
							<li id="comment-2" class="comment odd alt thread-odd thread-alt depth-1">
								<article id="div-comment-2" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img alt="" src="http://0.gravatar.com/avatar/01822efaf66e4b81d6f947cba7e0613a?s=32&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
											<b class="fn">Anon</b> <span class="says">says:</span>
										</div><!-- .comment-author -->
										<div class="comment-metadata">
											<a href="http://localhost/about/page-with-comments/#comment-2">
												<time datetime="2007-09-04T10:49:28+00:00">September 4, 2007 at 10:49 am</time>
											</a>
											<span class="edit-link">
												<a class="comment-edit-link" href="http://localhost/wp-admin/comment.php?action=editcomment&amp;c=2">Edit</a>
											</span>
										</div><!-- .comment-metadata -->
									</footer><!-- .comment-meta -->
									<div class="comment-content">
										<p>Anonymous comment.</p>
									</div><!-- .comment-content -->
									<div class="reply">
										<a class="comment-reply-link" href="/about/page-with-comments/?replytocom=2#respond" onclick="return addComment.moveForm( &quot;div-comment-2&quot;, &quot;2&quot;, &quot;respond&quot;, &quot;155&quot; )" aria-label="Reply to Anon">Reply</a>
									</div>
								</article><!-- .comment-body -->
							</li><!-- #comment-## -->
							<li id="comment-4" class="comment even thread-even depth-1">
								<article id="div-comment-4" class="comment-body">
									<footer class="comment-meta">
										<div class="comment-author vcard">
											<img alt="" src="http://1.gravatar.com/avatar/f72c502e0d657f363b5f2dc79dd8ceea?s=32&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D32&amp;r=G" class="avatar avatar-32 photo" height="32" width="32">
											<b class="fn"><a href="http://example.org" rel="external nofollow" class="url">John Doe</a></b> <span class="says">says:</span>
										</div><!-- .comment-author -->
										<div class="comment-metadata">
											<a href="http://localhost/about/page-with-comments/#comment-4">
												<time datetime="2007-09-04T10:48:51+00:00">September 4, 2007 at 10:48 am</time>
											</a>
											<span class="edit-link">
												<a class="comment-edit-link" href="http://localhost/wp-admin/comment.php?action=editcomment&amp;c=4">Edit</a>
											</span>
										</div><!-- .comment-metadata -->
									</footer><!-- .comment-meta -->
									<div class="comment-content">
										<p>Author comment.</p>
									</div><!-- .comment-content -->
									<div class="reply">
										<a class="comment-reply-link" href="/about/page-with-comments/?replytocom=4#respond" onclick="return addComment.moveForm( &quot;div-comment-4&quot;, &quot;4&quot;, &quot;respond&quot;, &quot;155&quot; )" aria-label="Reply to John Doe">Reply</a>
									</div>
								</article><!-- .comment-body -->
							</li><!-- #comment-## -->
						</ol><!-- .comment-list -->

						<!-- logged-in -->
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Leave a Reply ( logged in ) <small><a rel="nofollow" id="cancel-comment-reply-link" href="/about/page-with-comments/#respond" style="display:none;">Cancel reply</a></small></h3>
							<form action="http://localhost/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
								<p class="logged-in-as">Logged in as <a href="http://localhost/wp-admin/profile.php">admin</a>. <a href="http://localhost/wp-login.php?action=logout&amp;redirect_to=http%3A%2F%2Flocalhost%2Fabout%2Fpage-with-comments%2F&amp;_wpnonce=abd7daca9a" title="Log out of this account">Log out?</a></p>
								<p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true"></textarea></p>
								<p class="form-allowed-tags" id="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
									<input type="hidden" name="comment_post_ID" value="155" id="comment_post_ID">
									<input type="hidden" name="comment_parent" id="comment_parent" value="0">
								</p>
								<input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment" value="405f2416da"><script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
							</form>
						</div><!-- #respond -->

						<!-- logged-out-->
						<div id="respond" class="comment-respond">
							<h3 id="reply-title" class="comment-reply-title">Leave a Reply ( logged out ) <small><a rel="nofollow" id="cancel-comment-reply-link" href="/about/page-with-comments/#respond" style="display:none;">Cancel reply</a></small></h3>
							<form action="http://localhost/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
								<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
								<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true"></p>
								<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-describedby="email-notes" aria-required="true"></p>
								<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30"></p>
								<p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-describedby="form-allowed-tags" aria-required="true"></textarea></p>
								<p class="form-allowed-tags" id="form-allowed-tags">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </code></p>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
									<input type="hidden" name="comment_post_ID" value="155" id="comment_post_ID">
									<input type="hidden" name="comment_parent" id="comment_parent" value="0">
								</p>
							</form>
						</div><!-- #respond -->
				</div><!-- #comments -->
			</section>

			<section class="styleguide-section">
				<h2>Forms</h2>
				<form action="#" method="post" id="elementform" class="element-form" novalidate="">
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