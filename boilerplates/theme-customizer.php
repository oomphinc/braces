<?php
/**
 * Theme Customizer example file
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

class Braces_Theme_Customizer {

	function __construct() {
		add_action( 'customize_register', array( $this, 'braces_customize_register' ) );
	}

	/**
	 * Register a Theme Customizer
	 * @link http://codex.wordpress.org/Plugin_API/Action_Reference/customize_register
	 */
	function braces_customize_register( $wp_customize ) {
		$wp_customize->add_section( 'braces_theme_options', array(
			'title'    => __( 'Theme Options', 'braces' ),
			'priority' => 10,
		));

		/**
		 * Text Input
		 */
		$wp_customize->add_setting( 'braces_theme_options[text_test]', array(
			'default'        => 'Arse!',
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( 'braces_text_test', array(
			'label'      => __( 'Text Test', 'braces' ),
			'section'    => 'braces_theme_options',
			'settings'   => 'braces_theme_options[text_test]',
		) );

		/**
		 * Radio Input
		 */
		$wp_customize->add_setting( 'braces_theme_options[radio_options]', array(
			'default'        => 'value2',
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( 'braces_theme_options', array(
			'label'      => __( 'Radio Test', 'braces' ),
			'section'    => 'braces_theme_options',
			'settings'   => 'braces_theme_options[radio_options]',
			'type'       => 'radio',
			'choices'    => array(
					'value1' => 'Choice 1',
					'value2' => 'Choice 2',
					'value3' => 'Choice 3',
			),
		) );

		/**
		 * Checkbox
		 */
		$wp_customize->add_setting( 'braces_theme_options[checkbox_test]', array(
			'capability' => 'edit_theme_options',
			'type'       => 'option',
		) );

		$wp_customize->add_control('display_header_text', array(
			'settings' => 'braces_theme_options[checkbox_test]',
			'label'    => __( 'Display Header Text' ),
			'section'  => 'braces_theme_options',
			'type'     => 'checkbox',
		) );

		/**
		 * Select Box
		 */
		 $wp_customize->add_setting( 'braces_theme_options[header_select]', array(
			'default'        => 'value2',
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( 'example_select_box', array(
			'settings' => 'braces_theme_options[header_select]',
			'label'   => 'Select Something:',
			'section' => 'braces_theme_options',
			'type'    => 'select',
			'choices'    => array(
					'value1' => 'Choice 1',
					'value2' => 'Choice 2',
					'value3' => 'Choice 3',
			),
		) );

		/**
		 * Image Upload
		 */
		$wp_customize->add_setting( 'braces_theme_options[image_upload_test]', array(
			'default'        => 'image.jpg',
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_upload_test', array(
			'label'    => __( 'Image Upload Test', 'braces' ),
			'section'  => 'braces_theme_options',
			'settings' => 'braces_theme_options[image_upload_test]',
		) ) );

		/**
		 * File Upload
		 */
		$wp_customize->add_setting( 'braces_theme_options[upload_test]', array(
			'default'        => 'arse',
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'upload_test', array(
			'label'    => __( 'Upload Test', 'braces' ),
			'section'  => 'braces_theme_options',
			'settings' => 'braces_theme_options[upload_test]',
		) ) );

		/**
		 * Color Picker
		 */
		$wp_customize->add_setting( 'braces_theme_options[link_color]', array(
			'default'           => '000',
			'sanitize_callback' => 'sanitize_hex_color',
			'capability'        => 'edit_theme_options',
			'type'              => 'option',
		) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
			'label'    => __( 'Link Color', 'braces' ),
			'section'  => 'braces_theme_options',
			'settings' => 'braces_theme_options[link_color]',
		) ) );

		/**
		 * Page Dropdown
		 */
		$wp_customize->add_setting( 'braces_theme_options[page_test]', array(
			'capability'     => 'edit_theme_options',
			'type'           => 'option',
		) );

		$wp_customize->add_control( 'braces_page_test', array(
			'label'      => __( 'Page Test', 'braces' ),
			'section'    => 'braces_theme_options',
			'type'       => 'dropdown-pages',
			'settings'   => 'braces_theme_options[page_test]',
		) );

		/**
		 * Category Dropdown
		 */
		$categories = get_categories();
		$cats = array();
		$i = 0;
		foreach( $categories as $category ) {
			if( $i==0 ) {
				$default = $category->slug;
				$i++;
			}
			$cats[$category->slug] = $category->name;
		}
		$wp_customize->add_setting( 'braces_theme_options[cat_test]', array(
			'default'    => $default
		) );

		$wp_customize->add_control( 'cat_select_box', array(
			'settings'   => 'braces_theme_options[cat_test]',
			'label'      => 'Select Category:',
			'section'    => 'braces_theme_options',
			'type'       => 'select',
			'choices'    => $cats,
		) );
	}
}

$custom_theme_customizer = new Braces_Theme_Customizer();