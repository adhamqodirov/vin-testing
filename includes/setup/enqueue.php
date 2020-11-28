<?php

// 1. enqueue frontend styles
add_action('wp_enqueue_scripts', 'enqueue_vin_testing_plugin_style_scripts');
function enqueue_vin_testing_plugin_style_scripts()
{
    wp_enqueue_style('vin-styleeee', VIN_TESTING_URL . '/assets/css/frontend/main.css');
    wp_enqueue_script('vin-vueeee22', 'https://unpkg.com/vue@next', []);
    wp_enqueue_script('vin-vueappp34', VIN_TESTING_URL . '/assets/main.js');

}

// enqueue admin styles
add_action('admin_init', 'enqueue_vin_testing_plugin_admin_style_scripts');
function enqueue_vin_testing_plugin_admin_style_scripts()
{
    wp_enqueue_style('vin-admin-style-css', VIN_TESTING_URL . '/assets/css/admin/style.css');
//    wp_enqueue_script('vin-vueeee22', 'https://unpkg.com/vue@next', []);
//    wp_enqueue_script('vin-vueappp34', VIN_TESTING_URL . '/assets/admin.js');
}