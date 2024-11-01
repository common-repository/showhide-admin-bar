<?php
/**
 * Plugin Name: Show/Hide Admin Bar
 * Plugin URI: http://alexsancho.name/
 * Description: Shows/Hides the wordpress admin bar
 * Author: Alex Sancho
 * Version: 1.0
 * Author URI: http://alexsancho.name/
 */

function show_hide_admin_bar_init()
{
	global $wp_admin_bar;

	if ( ! is_admin_bar_showing() or ! is_object($wp_admin_bar))
		return false;

	wp_enqueue_script('show_hide_admin_bar',  plugins_url('', __FILE__) . '/show-hide-admin-bar.js', array('jquery'), '1.0', true);
}

// Initiate the plugin
add_action('init', 'show_hide_admin_bar_init');
