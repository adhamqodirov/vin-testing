<?php
// creating vin testing page with shortcode
add_action( 'admin_init', 'vin_testing_pages_admin_init' );
function vin_testing_pages_admin_init()
{
    $new_page_title = 'Vin Testing Page';
    $new_page_content = '[vin-testing]';

    $page_check = get_page_by_title($new_page_title);
    $new_page = array(
        'post_type' => 'page',
        'post_name' => 'vin-testing-page',
        'post_title' => $new_page_title,
        'post_content' => $new_page_content,
        'post_status' => 'publish',
        'post_author' => 1,
    );
    if (!isset($page_check->ID)) {
        $new_page_id = wp_insert_post($new_page);
        if (!empty($new_page_template)) {
            update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
        }
    }
}


// creating plugin admin page
add_action('admin_menu', 'plugin_admin_add_page');
function plugin_admin_add_page() {
    add_menu_page(
        'Vin Testing',
        'Vin Testing',
        'manage_options',
        'vin_testing.php',
        'vin_testing_plugin_options_page',
        'dashicons-welcome-widgets-menus',
        90
    );
}

function vin_testing_plugin_options_page() {

    require_once VIN_TESTING_PATH . '/includes/templates/admin/dashboard.php';


//    echo '<h1 class="adminnnn">' .esc_html__('Admin Page Test', 'vin-testing'). '</h1>';
}