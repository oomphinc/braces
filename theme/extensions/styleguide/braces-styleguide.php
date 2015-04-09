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
	}
}
add_action( 'wp_enqueue_scripts', 'braces_styleguide_scripts' );