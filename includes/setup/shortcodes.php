<?php

// registering shortcode
add_action('init', 'vin_testing_register_shortcodes');
function vin_testing_register_shortcodes()
{
    add_shortcode('vin-testing', 'vin_testing_shortcode_function');
}

function vin_testing_shortcode_function()
{
    require_once VIN_TESTING_PATH . '/includes/templates/front/decode-by-vin.php';
}