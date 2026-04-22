<?php
/**
 * Plugin Name:       Nelio WPBuild
 * Description:       Example plugin to test wp-build.
 * Version:           1.0.0
 *
 * Author:            Nelio Software
 * Author URI:        https://neliosoftware.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Requires at least: 6.7
 * Requires PHP:      7.4
 */

defined( 'ABSPATH' ) || exit;

define( 'NELIO', true );

function nelio_register_pages() {
	add_menu_page(
		'Nelio WPBuild',
		'Nelio WPBuild',
		'manage_options',
		'nelio-dashboard-wp-admin',
		'nelio_nelio_dashboard_wp_admin_render_page',
		'dashicons-hammer',
		1
	);

	add_submenu_page(
		'nelio-dashboard-wp-admin',
		'Main',
		'Main',
		'manage_options',
		'nelio-main',
		'nelio_nelio_main_render_page'
	);
}

function nelio_init() {
	$build_file = __DIR__ . '/build/build.php';
	if ( file_exists( $build_file ) ) {
		require_once $build_file;
		add_action( 'admin_menu', 'nelio_register_pages' );
	}
}
nelio_init();
