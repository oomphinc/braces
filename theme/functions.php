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
 * Global Constants
 * @author nickblanchard & johncionci
 */
define( 'BRACES_STYLESHEET',          get_stylesheet_uri() );
define( 'BRACES_STYLESHEET_URI',      get_stylesheet_directory_uri() );
define( 'BRACES_TEMPLATE',            get_template_directory() );
define( 'BRACES_TEMPLATE_URI',        get_template_directory_uri() );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @link https://codex.wordpress.org/Content_Width
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

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
	 * These rarely get used so only enable if you need them.
	 *
	 * load_theme_textdomain( 'braces', BRACES_TEMPLATE . '/languages' );
	 */

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'braces' ),
	) );

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption'
	) );

	/**
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 * These rarely get used so only enable if you need them.
	 *
	 * add_theme_support( 'post-formats', array(
	 * 'aside',
	 * 'image',
	 * 'video',
	 * 'quote',
	 * 'link'
	 * ) );
	 * /

	/**
	 * Setup the WordPress core custom background feature.
	 * These rarely get used so only enable if you need them.
	 *
	 * add_theme_support( 'custom-background', apply_filters( 'braces_custom_background_args', array(
	 * 	'default-color' => 'ffffff',
	 * 	'default-image' => '',
	 * ) ) );
	 */

}
add_action( 'after_setup_theme', 'braces_setup' );

/**
 * Enqueue scripts and styles
 */
function braces_scripts() {
	wp_enqueue_style( 'braces', BRACES_STYLESHEET );
	wp_enqueue_style( 'braces-theme', BRACES_STYLESHEET_URI . '/css/styles.css', null, false, 'all' );

	wp_enqueue_script( 'braces-modernizr', BRACES_STYLESHEET_URI . '/js/modernizr.js', array(), '20140113', true );
	wp_enqueue_script( 'braces-navigation', BRACES_STYLESHEET_URI . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'braces-skip-link-focus-fix', BRACES_STYLESHEET_URI . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'braces-keyboard-image-navigation', BRACES_STYLESHEET_URI . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'braces_scripts' );

/**
 * Include WordPress core functionality.
 */

/* Custom Header */
// require BRACES_TEMPLATE . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require BRACES_TEMPLATE . '/inc/template-tags.php';

/* Custom functions that act independently of the theme templates. */
require BRACES_TEMPLATE . '/inc/extras.php';

/* Customizer additions. */
require BRACES_TEMPLATE . '/inc/customizer.php';

/* Load Jetpack compatibility file. */
require BRACES_TEMPLATE . '/inc/jetpack.php';

/* Load Widgets file. */
require BRACES_TEMPLATE . '/inc/widgets.php';

/**
 * Include WordPress core functionality Extensions.
 */

/* Picturefill */
//require BRACES_TEMPLATE . '/extensions/picturefill/braces-picturefill.php';
require BRACES_TEMPLATE . '/extensions/styleguide/braces-styleguide.php';

/**
 * Include WordPress core functionality Features.
 */
