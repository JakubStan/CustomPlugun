<?php
/*
Plugin Name: My Book Plugin
Description: Custom plugin for managing books.
Version: 1.0
Author: Jakub Stankiewicz
*/

// Include Custom Post Type registration
require_once( plugin_dir_path( __FILE__ ) . 'includes/custom-post-type.php' );

// Include ACF fields registration
require_once( plugin_dir_path( __FILE__ ) . 'includes/acf-fields.php' );

// Include template handling
require_once( plugin_dir_path( __FILE__ ) . 'includes/templates.php' );

// Include styles and scripts
require_once( plugin_dir_path( __FILE__ ) . 'includes/enqueue.php' );
