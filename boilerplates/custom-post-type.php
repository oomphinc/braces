<?php
/**
 * Custom Post Type example file
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 *
 */

class Braces_Custom_Post_Type {
	// Post Types
	const POST_TYPE_SLUG     = 'braces';
	const POST_TYPE_NAME     = 'Braces';
	const POST_TYPE_SINGULAR = 'Braces';
	const POST_TYPE_CAP      = 'post';

	function __construct() {
		add_action( 'init', array( $this, 'action_init' ) );
	}

	/**
	 * Register a Custom Post Type
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function action_init() {
		$labels = array(
			'name'               => _x( self::POST_TYPE_NAME, 'Post Type General Name', 'braces' ),
			'singular_name'      => _x( self::POST_TYPE_SINGULAR, 'Post Type Singular Name', 'braces' ),
			'menu_name'          => _x( self::POST_TYPE_NAME, 'Admin Menu', 'braces' ),
			'name_admin_bar'     => _x( self::POST_TYPE_SINGULAR, 'Add New on Admin Bar', 'braces' ),
			'add_new'            => _x( 'Add New '. self::POST_TYPE_SINGULAR, 'Post Type', 'braces' ),
			'add_new_item'       => __( 'Add New '. self::POST_TYPE_SINGULAR, 'braces' ),
			'new_item'           => __( 'New '. self::POST_TYPE_SINGULAR, 'braces' ),
			'edit_item'          => __( 'Edit '. self::POST_TYPE_SINGULAR, 'braces' ),
			'view_item'          => __( 'View '. self::POST_TYPE_SINGULAR, 'braces' ),
			'all_items'          => __( 'All '. self::POST_TYPE_NAME, 'braces' ),
			'search_items'       => __( 'Search '. self::POST_TYPE_SINGULAR, 'braces' ),
			'parent_item_colon'  => __( 'Parent '. self::POST_TYPE_SINGULAR. ':', 'braces' ),
			'not_found'          => __( 'No '. self::POST_TYPE_NAME .' found.', 'braces' ),
			'not_found_in_trash' => __( 'No '. self::POST_TYPE_NAME .' found in Trash.', 'braces' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => self::POST_TYPE_CAP,
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'page-attributes', 'editor', 'revisions', 'thumbnail' ),
			'rewrite'            => array (
				'slug' => self::POST_TYPE_SLUG,
				'with_front' => false
			),
			'taxonomies'         => array (
				0 => 'category',
				1 => 'post_tag',
			),
		);

		register_post_type(self::POST_TYPE_SLUG, $args);
	}
}

$custom_post_type = new Braces_Custom_Post_Type();