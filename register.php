<?php
/*
Plugin Name: Force Strong Password
Plugin URI: https://github.com/CheggEng/WP-Force-Strong-Password
Description: Wordpress 4.3+ now encourages using strong passwords but it still gives the user a option to use a weak password if they click confirm use of a weak password. This simple plugin takes away the option to allow weak password override. The end result is a wordpress site that assures strong passwords are used.
Author: Aaron Collins <acollins@chegg.com>
Version: 1.0
Author URI: http://www.chegg.com
License: GPLv2
*/

define('FORCE_STRONG_PASSWORD',plugin_dir_path(__FILE__));
include_once(FORCE_STRONG_PASSWORD.DIRECTORY_SEPARATOR.'Class'.DIRECTORY_SEPARATOR.'ForceStrongPassword.php');
add_filter('show_password_fields', 'ForceStrongPassword::UserEditTemplate');