<?php
/*
Plugin Name: New Custom Checkout Fields
Description: Custom fields in the WooCommerce checkout form.
Version: 1.0
Author: Roman
*/

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

require_once( plugin_dir_path(__FILE__) . 'includes/class-scripts-handler.php' );
require_once( plugin_dir_path(__FILE__) . 'includes/class-shortcode-handler.php' );
require_once( plugin_dir_path(__FILE__) . 'includes/class-checkout-fields.php' );

// Initialize the scripts handler
$scripts_handler = new Custom_Checkout_Scripts();

// Initialize the shortcode handler
$shortcode_handler = new Custom_Checkout_Shortcode();

// Initialize the checkout fields handler
$checkout_fields = new Custom_Checkout_Fields();




