<?php
/*
Plugin Name: Force Strong Password
Plugin URI: hWordpress 4.3+ now encourages using strong passwords but it still gives the user a option to override the strong password.  This simple plugin takes that option away.
Author: Aaron Collins <acollins@chegg.com>
Version: 1.0
Author URI: http://www.chegg.com
License: GPLv2
*/

define('FORCE_STRONG_PASSWORD',plugin_dir_path(__FILE__));
include_once(FORCE_STRONG_PASSWORD.DS.'Class'.DS.'ForceStrongPassword.php');
add_filter('show_password_fields', ForceStrongPassword::UserEditTemplate);