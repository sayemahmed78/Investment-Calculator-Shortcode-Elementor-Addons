<?php
/**
 * Plugin Name:       ROI Investment Calculator WP by Sayem
 * Plugin URI:        https://wordpress.org/plugins/simple-investment-calculator-wp-by-sayem
 * Description:       A simple Simple Investment Calculator plugin for WordPress with shortcode. The plugin also support as a elementor addons.
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.2
 * Author:            Sayem Ahmed
 * Author URI:        https://mdsayemahmed.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       simple-investment-calculator-wp
 */

if (!defined('ABSPATH')) {
    exit;
}

// Check if Elementor is Active
if (!did_action('elementor/loaded')) {
    add_action('admin_notices', function () {
        echo '<div class="notice notice-error"><p>Elementor must be installed and activated for the Investment Calculator plugin to work.</p></div>';
    });
    return;
}

// Includes
require_once plugin_dir_path(__FILE__) . 'includes/investment-calculator-shortcode.php';
require_once plugin_dir_path(__FILE__) . 'includes/admin-panel.php';

// Register Widget with Elementor
add_action('elementor/widgets/register', function ($widgets_manager) {
    require_once plugin_dir_path(__FILE__) . 'includes/class-elementor-investment-widget.php';
    $widgets_manager->register(new \Elementor_Investment_Calculator_Widget());
});

// Enqueue Styles and Scripts
function sa_investment_calculator_assets() {
    wp_enqueue_style('investment-calculator-style', plugins_url('assets/style.css', __FILE__));
    wp_enqueue_script('investment-calculator-script', plugins_url('assets/script.js', __FILE__), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'sa_investment_calculator_assets');


// Enqueue Admin Styles and Scripts
function sa_investment_calculator_admin(){
    wp_enqueue_style('admin_investment-calculator-style', plugins_url('assets/style.css', __FILE__), false, "1.0.0");
}
add_action('admin_enqueue_scripts', 'sa_investment_calculator_admin');

