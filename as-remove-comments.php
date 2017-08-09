<?php
/*
 * Plugin Name: As Remove Comments
 * Version: 1.0
 * Plugin URI: https://github.com/anurag-singh/as-remove-comments
 * Description: Remove comments from all over the site or from any specific post type.
 * Author: Anurag Singh
 * Author URI: http://anuragsingh.me/
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: as-remove-comments
 * Domain Path: /lang/
 *
 * @package WordPress
 * @author Anurag Singh
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-wordpress-plugin-template.php' );
require_once( 'includes/class-wordpress-plugin-template-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-wordpress-plugin-template-admin-api.php' );
require_once( 'includes/lib/class-wordpress-plugin-template-post-type.php' );
require_once( 'includes/lib/class-wordpress-plugin-template-taxonomy.php' );

/**
 * Returns the main instance of WordPress_Plugin_Template to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object WordPress_Plugin_Template
 */
function WordPress_Plugin_Template () {
	$instance = WordPress_Plugin_Template::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = WordPress_Plugin_Template_Settings::instance( $instance );
	}

	return $instance;
}

WordPress_Plugin_Template();

WordPress_Plugin_Template()->as_hide_comments();

