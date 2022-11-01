<?php
/**
 * palermo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package palermo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function palermo_setup() {

	load_theme_textdomain( 'palermo', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	// Image Sizes
	add_image_size( 'full-width', 3000, 2000 );

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
}
add_action( 'after_setup_theme', 'palermo_setup' );

/**
 * Enqueue scripts and styles.
 */
function palermo_scripts() {
	wp_enqueue_style( 'palermo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'palermo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.6.0.min.js', '', '', false );
	wp_enqueue_script( 'flickity','https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.min.js', '', '', true );
	wp_enqueue_script( 'theme-functions',get_template_directory_uri() . '/js/theme.min.js', '', '', true );

}
add_action( 'wp_enqueue_scripts', 'palermo_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/admin.php';
require get_template_directory() . '/inc/theme.php';
require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/post.php';