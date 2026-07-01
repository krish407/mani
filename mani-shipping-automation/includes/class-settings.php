<?php
if (!defined('ABSPATH')) exit;

class MSA_Settings {
    public static function init(){
        add_action('admin_menu',[__CLASS__,'menu']);
    }

    public static function menu(){
        add_submenu_page(
            'woocommerce',
            'Mani Shipping',
            'Mani Shipping',
            'manage_woocommerce',
            'mani-shipping',
            [__CLASS__,'render']
        );
    }

    public static function render(){
        echo '<div class="wrap"><h1>Mani Shipping Automation</h1>';
        echo '<p>API settings for Delhivery and Shadowfax will be added here.</p>';
        echo '</div>';
    }
}
