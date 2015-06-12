<?php
/**
 * Custom Taxonomy example file
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 *
 */

class Braces_Custom_Taxonomy {
	// Taxonomy
	const TAX_SLUG     = 'braces';
	const TAX_NAME     = 'Braces';
	const TAX_SINGULAR = 'Braces';

	function __construct() {
		add_action( 'init', array( $this, 'action_init' ) );
	}

	/**
	 * Register a Custom Taxonomy
	 * @link https://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	function action_init() {
		$labels = array(
			'name'                       => _x( self::TAX_NAME, 'Taxonomy General Name', 'braces' ),
			'singular_name'              => _x( self::TAX_SINGULAR, 'Taxonomy Singular Name', 'braces' ),
			'menu_name'                  => __( self::TAX_SINGULAR, 'braces' ),
			'all_items'                  => __( 'All '. self::TAX_NAME, 'braces' ),
			'parent_item'                => __( 'Parent Item', 'braces' ),
			'parent_item_colon'          => __( 'Parent '. self::TAX_SINGULAR. ':', 'braces' ),
			'new_item_name'              => __( 'New Item Name', 'braces' ),
			'add_new_item'               => __( 'Add New '. self::TAX_SINGULAR, 'braces' ),
			'edit_item'                  => __( 'Edit '. self::TAX_SINGULAR, 'braces' ),
			'update_item'                => __( 'Update Item', 'braces' ),
			'view_item'                  => __( 'View '. self::TAX_SINGULAR, 'braces' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'braces' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'braces' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'braces' ),
			'popular_items'              => __( 'Popular Items', 'braces' ),
			'search_items'               => __( 'Search '. self::TAX_SINGULAR, 'braces' ),
			'not_found'                  => __( 'Not Found', 'braces' ),
		);

		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => false,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);

		register_taxonomy( self::TAX_SLUG, array( 'post' ), $args );

	}
}
$custom_taxonomy = new Braces_Custom_Taxonomy();