<?php
/**
 * Plugin Name: Elementify Visual Widgets
 * Description: The Elementify Visual Widgets plugin you install after Elementor! Packed with stunning free elements.
 * Plugin URI: https://astoundify.com/products/elementify-visual-widgets
 * Author: Astoundify
 * Version: 1.0.0
 * Author URI: https://astoundify.com/
 * Text Domain: elementify-visual-widgets
 * Domain Path: /languages
 * Elementor tested up to: 3.2.4
 * Elementor Pro tested up to: 3.2.2
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

/**
 * Defining plugin constants.
 *
 * @since 1.0.0
 */

define( 'EVW_PLUGIN_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/**
 * Load Plugin Text Domain.
 *
 * @since 1.0.0
 */
 
load_plugin_textdomain( 'elementify-visual-widgets' );

/**
 * Including elementor elements
 *
 * @since 1.0.0
 */
 
if( !function_exists( 'evw_load_elementor_widget' ) ) {

	function evw_load_elementor_widget() {
		require_once EVW_PLUGIN_PATH . 'includes/elementor-elements/features.php';
	}

}
add_action( 'elementor/widgets/widgets_registered', 'evw_load_elementor_widget' );