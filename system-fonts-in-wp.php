<?php
/*
Plugin Name: System fonts in WP
Plugin URI: http://mattmiklic.com
Description: Replaces Open Sans with system fonts in WordPress.
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
endif;

if (!function_exists('add_system_fonts')) :
	function add_system_fonts() {
		wp_register_style( 'prefix-style', plugins_url('style.css', __FILE__) );
		wp_enqueue_style( 'prefix-style' );
	}

	add_action('wp_enqueue_scripts', 'add_system_fonts');
	add_action('admin_enqueue_scripts', 'add_system_fonts');
endif;
