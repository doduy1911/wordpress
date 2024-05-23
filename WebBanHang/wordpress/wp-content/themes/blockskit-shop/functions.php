<?php

/**
 * Blockskit Shop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blockskit Shop
 */

define( 'BLOCKSKIT_SHOP_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'blockskit_shop_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function blockskit_shop_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'blockskit-shop', get_template_directory() . '/languages' );

		// Add theme support
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
}
add_action( 'after_setup_theme', 'blockskit_shop_setup' );

/**
 * Enqueue scripts and styles
 */
function blockskit_shop_scripts() {
	$version = wp_get_theme( 'blockskit-shop' )->get( 'Version' );
	// Stylesheet
	wp_enqueue_style( 'blockskit-shop-styles', get_theme_file_uri( '/style.css' ), array(), $version );
	wp_enqueue_style( 'blockskit-shop-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $version, 'all' );

	if ( file_exists( get_template_directory() . '/assets/css/theme-style.css' ) ) {
		wp_enqueue_style( 'blockskit-shop-theme-style', get_template_directory_uri() . '/assets/css/theme-style.css',  array(), $version );
	}

	$deps = array( 'blockskit-shop-animate' );
	global $wp_styles;
	if ( in_array( 'wc-blocks-vendors-style', $wp_styles->queue ) ) {
		$deps[] = 'wc-blocks-vendors-style';
	}

	if (is_rtl()) {
	    wp_enqueue_style( 'rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css' );
	}

	// Scripts
	$deps = array( 'jquery' );
	wp_enqueue_script( 'blockskit-shop-animate', get_template_directory_uri() . '/assets/js/animate.min.js', $deps, $version );

}
add_action( 'wp_enqueue_scripts', 'blockskit_shop_scripts' );

/**
 * Add editor styles
 */
function blockskit_shop_editor_style() {
    wp_enqueue_style( 'blockskit-shop-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css', array(), '1.0' );
}
add_action( 'enqueue_block_editor_assets', 'blockskit_shop_editor_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function blockskit_shop_block_assets()
{
    wp_enqueue_style( 'blockskit-shop-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css' );
}
add_action( 'enqueue_block_assets', 'blockskit_shop_block_assets' );

/**
 * Load core file
 */
require get_theme_file_path() . '/inc/core/init.php';

/**
 * Theme info
 */
require get_theme_file_path( '/inc/theme-info/theme-info.php' );

/**
 * Getting started notification
 */
require get_theme_file_path( '/inc/getting-started/getting-started.php' );

/**
 * Skips redirection after Elementor plugin activation
 */
add_action( 'admin_init', function() {
	if ( did_action( 'elementor/loaded' ) ) {
		remove_action( 'admin_init', [ \Elementor\Plugin::$instance->admin, 'maybe_redirect_to_getting_started' ] );
	}
}, 1 );

/**
 * Skips redirection after Spectra plugin activation
 */
add_filter( 'uagb_enable_redirect_activation', 'blockskit_shop_disable_spectra_redirection' );
function blockskit_shop_disable_spectra_redirection(){
  	return false;
}

/**
 * Skips redirection after WooCommerce plugin activation
 */
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );