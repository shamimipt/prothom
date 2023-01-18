<?php
/**
 * This file is Enqueue script and style to wordpress
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Prothom
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function prothom_scripts() {
	//CSS File
	wp_enqueue_style( 'prothom-google-font-style',  'https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-bootstrap-style', PROTHOM_THEME_URI . 'css/bootstrap.css', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-superfish-style', PROTHOM_THEME_URI . 'css/plugins/superfish/css/superfish.css', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-main-style', PROTHOM_THEME_URI . 'css/theme-main.css', array(), PROTHOM_VERSION );
	wp_enqueue_style( 'prothom-style', get_stylesheet_uri(), array(), PROTHOM_VERSION );
	wp_style_add_data( 'prothom-style', 'rtl', 'replace' );

	//JS File
	wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'prothom-superfish', PROTHOM_THEME_URI . 'js/pligins/superfish/js/superfish.min.js', array('jquery'), PROTHOM_VERSION, true );
	wp_enqueue_script( 'prothom-main', PROTHOM_THEME_URI . 'js/prothom-main.js', array('jquery'), PROTHOM_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'prothom_scripts' );