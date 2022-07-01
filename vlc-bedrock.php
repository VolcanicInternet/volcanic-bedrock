<?php

/**
 * Plugin Name: Volcanic Bedrock
 * Plugin URI: https://github.com/VolcanicInternet/volcanic-bedrock
 * Description: Volcanic plugin for WordPress projects
 * Version: 1.0.0
 * Author: Volcanic Internet
 * Author URI: https://volcanicinternet.com
 * Text Domain: vlc-bedrock
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Activation and deactivation
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-vlc-bedrock-activate.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-vlc-bedrock-deactivate.php';

register_activation_hook(__FILE__, 'Vlc_Bedrock_Activate::activate' );
register_deactivation_hook(__FILE__, 'Vlc_Bedrock_Deactivate::deactivate');