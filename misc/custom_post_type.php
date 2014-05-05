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

	function __construct() {
		add_action( 'init', array( $this, 'action_init' ) );
		add_action( 'admin_init', array( $this, 'action_admin_init' ) );
	}

	/**
	 * Register a Custom Post Type
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	function action_init() {
		$labels = array(
			'name'               => _x( 'Post Types', 'post type general name', 'braces' ),
			'singular_name'      => _x( 'Post Type', 'post type singular name', 'braces' ),
			'menu_name'          => _x( 'Post Types', 'admin menu', 'braces' ),
			'name_admin_bar'     => _x( 'Post Type', 'add new on admin bar', 'braces' ),
			'add_new'            => _x( 'Add New', 'post type', 'braces' ),
			'add_new_item'       => __( 'Add New Post Type', 'braces' ),
			'new_item'           => __( 'New Post Type', 'braces' ),
			'edit_item'          => __( 'Edit Post Type', 'braces' ),
			'view_item'          => __( 'View Post Type', 'braces' ),
			'all_items'          => __( 'All Post Types', 'braces' ),
			'search_items'       => __( 'Search Post Types', 'braces' ),
			'parent_item_colon'  => __( 'Parent Post Types:', 'braces' ),
			'not_found'          => __( 'No post types found.', 'braces' ),
			'not_found_in_trash' => __( 'No post types found in Trash.', 'braces' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'supports'           => array( 'title', 'page-attributes', 'editor', 'thumbnail' ),
			'rewrite'            => array ( 'slug' => 'post_type', 'with_front' => false ),
			'taxonomies'         => array (
				0 => 'category',
				1 => 'post_tag',
			),
		);

		register_post_type('post_type', $args);
	}
}

$custom_post_type = new Braces_Custom_Post_Type();