<?php

// 1. enqueue frontend styles
add_action('wp_enqueue_scripts', 'enqueue_vin_testing_plugin_style_scripts');
function enqueue_vin_testing_plugin_style_scripts()
{
    wp_enqueue_style('styleee', plugin_dir_url(__DIR__) . 'assets/css/frontend/main.css');
    wp_enqueue_script('vueeee2', 'https://unpkg.com/vue@next', []);
    wp_enqueue_script('vueappp3', plugin_dir_url( __DIR__ ) . '/assets/main.js');
}

// enqueue admin styles
add_action('admin_init', 'enqueue_vin_testing_plugin_admin_style_scripts');
function enqueue_vin_testing_plugin_admin_style_scripts()
{
    wp_enqueue_style('styleaa', plugin_dir_url(__DIR__) . "assets/css/admin/style.css");
    wp_enqueue_script('vueeee2', 'https://unpkg.com/vue@next', []);
    wp_enqueue_script('bootstrapppp', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', []);
    wp_enqueue_script('vueappp3', plugin_dir_url( __DIR__ ) . '/assets/admin.js');
}