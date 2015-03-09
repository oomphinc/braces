<?php

/**
 * Add picturefill support to WordPress
 *
 * @see scottjehl.github.io/picturefill/
 * @author johncionci
 */

/**
 * Add responsive image sizes for this theme
 *
 * You may need to alter or add/remove the sizes set here,
 * dont forget to alter the braces_picturefill_post_thumbnail() below as well.
 *
 * @uses add_image_size
 */
function braces_picturefill_add_image_sizes() {
	/* @1x images */
	add_image_size( 'featured-mobile', 400, 300, true );
	add_image_size( 'featured-tablet', 600, 450, true );
	add_image_size( 'featured', 800, 600, true );

	/* @2x images */
	add_image_size( 'featured-mobile-2x', 800, 600, true );
	add_image_size( 'featured-tablet-2x', 1200, 900, true );
	add_image_size( 'featured-desktop-2x', 1600, 1200, true );
}
add_action( 'after_setup_theme', 'braces_picturefill_add_image_sizes' );

/**
 * Enqueue 'picturefill' scripts
 */
function braces_picturefill_scripts() {
	wp_enqueue_script( 'braces-picturefill', BRACES_TEMPLATE_URI . '/extensions/picturefill/js/picturefill.min.js', array(), '20150204', false );
}
add_action( 'wp_enqueue_scripts', 'braces_picturefill_scripts' );

/**
 * Output HTML5 <picture> element syntax for responsive images.
 *
 * @param  string $braces_image_size The preferred image size
 * @return string
 */
function braces_picturefill_post_thumbnail( $braces_image_size ) {
	$post = get_post();

	/* @1x images */
	$braces_thumbnail_mobile  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size . '-mobile' );
	$braces_thumbnail_tablet  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size . '-tablet' );
	$braces_thumbnail_desktop = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size );

	/* @2x images */
	$braces_thumbnail_mobile_2x  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size . '-mobile-2x' );
	$braces_thumbnail_tablet_2x  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size . '-tablet-2x' );
	$braces_thumbnail_desktop_2x = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), $braces_image_size . '-desktop-2x' );

	/* @1x images */
	$braces_mobile_mq  = '(max-width: 568px)';
	$braces_tablet_mq  = '(max-width: 1024px)';
	$braces_desktop_mq  = '(min-width: 1025px)';

	?>
	<picture class="entry-thumbnail">
		<!--[if IE 9]><video style="display: none;"><![endif]-->
		<source srcset="<?php echo esc_url( $braces_thumbnail_mobile[0] ); ?>, <?php echo esc_url( $braces_thumbnail_mobile_2x[0] ); ?> 2x" media="<?php echo esc_attr( $braces_mobile_mq ); ?>">
		<source srcset="<?php echo esc_url( $braces_thumbnail_tablet[0] ); ?>, <?php echo esc_url( $braces_thumbnail_tablet_2x[0] ); ?> 2x" media="<?php echo esc_attr( $braces_tablet_mq ); ?>">
		<!--[if IE 9]></video><![endif]-->
		<img srcset="<?php echo esc_url( $braces_thumbnail_desktop[0] ); ?>, <?php echo esc_url( $braces_thumbnail_desktop_2x[0] ); ?> 2x" media="<?php echo esc_attr( $braces_desktop_mq ); ?> alt="<?php echo the_title(); ?>" />
	</picture>
<?php }

/**
 * Filter the list of avaible post image sizes
 *
 * @param  string $sizes The custom image size we have configured
 * @return string
 */
function braces_custom_image_sizes( $sizes ) {
	return array_merge( $sizes, array(
		'featured' => __( 'Featured' ),
	) );
}
add_filter( 'image_size_names_choose', 'braces_custom_image_sizes' );
