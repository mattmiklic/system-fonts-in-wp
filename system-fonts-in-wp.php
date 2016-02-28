<?php
/*
Plugin Name: System fonts in WP
Plugin URI: https://github.com/mattmiklic/system-fonts-in-wp
Description: A plugin for WordPress that replaces Open Sans with your device's standard system fonts.
Version: 0.1
Author: Matt Miklic
Author URI: http://mattmiklic.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
if (!function_exists('remove_wp_open_sans')) :
	function remove_wp_open_sans() {
		wp_deregister_style( 'open-sans' );
		wp_register_style( 'open-sans', false );
	}
	add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
	add_action('admin_enqueue_scripts', 'remove_wp_open_sans');
	add_action('login_enqueue_scripts', 'remove_wp_open_sans');
endif;
if (!function_exists('add_system_fonts')) :
	function add_system_fonts() {
		wp_register_style( 'system-font-style', plugins_url('style.css', __FILE__) );
		wp_enqueue_style( 'system-font-style' );
	}
	add_action('wp_enqueue_scripts', 'add_system_fonts');
	add_action('admin_enqueue_scripts', 'add_system_fonts');
	add_action('login_enqueue_scripts', 'add_system_fonts');
endif;
