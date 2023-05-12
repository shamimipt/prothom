<?php
/**
 * Prothom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since 1.0
 * @package Prothom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'PROTHOM_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'PROTHOM_VERSION', '1.0.0' );
}

define( 'PROTHOM_THEME_DIR', untrailingslashit( get_template_directory() ) . '/' );
define( 'PROTHOM_THEME_URI', untrailingslashit( get_template_directory_uri() ) . '/' );

/**
 * Load after theme setup file
 */
require PROTHOM_THEME_DIR . 'inc/after-theme-setup.php';

/**
 * Load after theme setup file
 */
require PROTHOM_THEME_DIR . 'inc/register-widget.php';

/**
 * Load enqueue script
 */
require PROTHOM_THEME_DIR . 'inc/enqueue-script.php';

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

