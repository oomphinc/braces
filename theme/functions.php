<?php
/**
 * Theme functions and definitions
 *
 * @package WordPress
 * @subpackage braces
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 * @link https://codex.wordpress.org/Content_Width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function braces_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on braces_theme, use a find and replace
	 * to change 'braces' to the name of your theme in all the template files
	 *
	 * load_theme_textdomain( 'braces', get_template_directory() . '/languages' );
	 */

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'braces' ),
	) );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/**
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 * These rarely get used so only enable if you need them.
	 *
	 * @author johncionci
	 *
	 * add_theme_support( 'post-formats', array(
	 * 'aside', 'image', 'video', 'quote', 'link'
	 * ) );
	 * /

	/**
	 * Setup the WordPress core custom background feature.
	 */
	add_theme_support( 'custom-background', apply_filters( 'braces_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

}
add_action( 'after_setup_theme', 'braces_setup' );

/**
 * Enqueue scripts and styles
 */
function braces_scripts() {
	$stylesheet_directory = get_template_directory_uri();
	wp_enqueue_style( 'braces', get_stylesheet_uri() );
	wp_enqueue_style( 'braces-theme', $stylesheet_directory . '/css/styles.css', null, false, 'all' );

	wp_enqueue_script( 'braces-modernizr', $stylesheet_directory . '/js/modernizr.js', array(), '20140113', true );
	wp_enqueue_script( 'braces-navigation', $stylesheet_directory . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'braces-skip-link-focus-fix', $stylesheet_directory . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'braces-keyboard-image-navigation', $stylesheet_directory . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'braces_scripts' );

/**
 * Include WordPress core functionality.
 */

/* Custom Header */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Custom functions that act independently of the theme templates. */
require get_template_directory() . '/inc/extras.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Load Jetpack compatibility file. */
require get_template_directory() . '/inc/jetpack.php';

/* Load Widgets file. */
require get_template_directory() . '/inc/widgets.php';

/**
 * Include WordPress core functionality Extensions.
 */

/* Picturefill */
//require get_template_directory() . '/extensions/picturefill/braces-picturefill.php';

/**
 * Include WordPress core functionality Features.
 */
