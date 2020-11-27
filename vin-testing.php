<?php
/*
Plugin Name: Vin Testing
Plugin URI:
Description: Plugin for decode cars via Vin Number
Author: Tester
Author URI: theme.uz
Text Domain: vin-testing
Version: 1.0
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define('VIN_TESTING_PATH', plugin_dir_path(__FILE__));
define('VIN_TESTING_URL', plugin_dir_url(__FILE__));

require_once VIN_TESTING_PATH . '/includes/functions.php';


