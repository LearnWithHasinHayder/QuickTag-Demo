<?php
/*
Plugin Name: QuickTags Demo
Plugin URI:
Description:
Version: 1.0
Author: LWHH
Author URI: https://hasin.me
License: GPLv2 or later
Text Domain: quicktags-demo
Domain Path: /languages/
*/

function qtsd_assets($screen){
	if('post.php'==$screen){
		wp_enqueue_script('qtsd-main-js',plugin_dir_url(__FILE__)."/assets/js/qt.js",array('quicktags','thickbox'));
		wp_localize_script('qtsd-main-js','qtsd',array('preview'=>plugin_dir_url(__FILE__)."/fap.php"));
	}
}
add_action('admin_enqueue_scripts','qtsd_assets');

