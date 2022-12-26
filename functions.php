<?php
/**
 * Prothom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Prothom
 */

if ( ! defined( 'PROTHOM_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'PROTHOM_VERSION', '1.0.0' );
}

define( 'PROTHOM_THEME_DIR', untrailingslashit( get_template_directory() ) . '/' );
define( 'PROTHOM_THEME_URI', untrailingslashit( get_template_directory_uri() ) . '/' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function prothom_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		*/
	load_theme_textdomain( 'prothom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'prothom' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'prothom_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	/**
	 * Add support for Wp block style
	 */
	add_theme_support( "wp-block-styles" );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	/**
	 * Add support for Align Wide
	 */
	add_theme_support( "align-wide" );

	/**
	 * Add support for Responsive Embeds
	 */
	add_theme_support( "responsive-embeds" );

}
add_action( 'after_setup_theme', 'prothom_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function prothom_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'prothom' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'prothom' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'prothom_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function prothom_scripts() {
	//CSS File
	wp_enqueue_style( 'prothom-google-font-style',  'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-bootstrap-style', PROTHOM_THEME_URI . 'css/bootstrap.css', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-main-style', PROTHOM_THEME_URI . 'css/theme-main.css', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-style', get_stylesheet_uri(), array(), PROTHOM_VERSION );
	wp_style_add_data( 'prothom-style', 'rtl', 'replace' );

	//JS File
	wp_enqueue_script( 'prothom-main', PROTHOM_THEME_URI . 'js/prothom-main.js', array(), PROTHOM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'prothom_scripts' );

/**
 * Implement the Custom Header feature.
 */
require PROTHOM_THEME_DIR . 'inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require PROTHOM_THEME_DIR . 'inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require PROTHOM_THEME_DIR . 'inc/template-functions.php';

/**
 * Customizer additions.
 */
require PROTHOM_THEME_DIR . 'inc/customizer.php';

