<?php
/**
 * Plugin Name: Mani Shipping Automation
 * Description: Shipping automation for WooCommerce with Delhivery, Shadowfax and India Post routing.
 * Version: 0.1.0
 * Author: Tejaswi Tech
 * Requires Plugins: woocommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'MSA_VERSION', '0.1.0' );
define( 'MSA_PLUGIN_FILE', __FILE__ );
define( 'MSA_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

register_activation_hook( __FILE__, function() {
    flush_rewrite_rules();
});

register_deactivation_hook( __FILE__, function() {
    flush_rewrite_rules();
});
