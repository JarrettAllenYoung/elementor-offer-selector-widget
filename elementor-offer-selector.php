<?php
/**
 * Plugin Name: Elementor Offer Selector Widget GH
 * Description: A stylish custom offer selector widget for Elementor.
 * Author: JarrettYoungGH
 * Version: 1.0
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly

function register_offer_selector_widget($widgets_manager) {
    // Register the offer-selector.php widget
    require_once(__DIR__ . '/widgets/offer-selector.php');
    
    if (class_exists('Offer_Selector')) {
        $widgets_manager->register(new \Offer_Selector());
    }
}

add_action('elementor/widgets/register', 'register_offer_selector_widget');
