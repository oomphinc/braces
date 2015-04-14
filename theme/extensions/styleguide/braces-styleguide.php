<?php
/**
 * Custom functions to include the styleguide page template
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

function braces_styleguide_page_template( $template ) {
	if ( is_page( 'styleguide' )  ) {
		$new_template = locate_template( array( 'extensions/styleguide/braces-styleguide-page-template.php' ) );
		if ( '' != $new_template ) {
			return $new_template ;
		}
	}
	return $template;
}
add_filter( 'template_include', 'braces_styleguide_page_template', 99 );

function braces_styleguide_scripts() {
	if ( is_page( 'styleguide' )  ) {
		wp_enqueue_style( 'braces-styleguide', BRACES_STYLESHEET_URI . '/css/styleguide.css', array( 'braces-theme' ), false, 'all' );
		wp_enqueue_style( 'braces-styleguide-design', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.3.0/flexslider-min.css', array( 'braces-styleguide' ), false, 'all' );
		wp_enqueue_script( 'braces-flexslider', 'https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.3.0/jquery.flexslider-min.js', array( 'jquery' ), false, false );
		wp_enqueue_script( 'braces-flexslider-options', BRACES_STYLESHEET_URI . '/extensions/styleguide/braces-styleguide.js', array( 'jquery', 'braces-flexslider' ), false, false );
	}
}
add_action( 'wp_enqueue_scripts', 'braces_styleguide_scripts' );