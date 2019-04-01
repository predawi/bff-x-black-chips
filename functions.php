<?php
/**
 * Autoload all the things \o/
 */
require_once 'autoload.php';

/**
 * Load all services
 */
add_action( 'after_setup_theme', function () {
	// Boot the service, at after_setup_theme.
	\BEA\Theme\Framework\Framework::get_container()->boot_services();
} );

// Enable thumbnails
add_theme_support( 'post-thumbnails' );
add_image_size( 'portrait', 400, 380, array( 'center', 'top') );
set_post_thumbnail_size(200, 200, array( 'center', 'center')); // Normal post thumbnails

// Add title support
function wpc_theme_support() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'wpc_theme_support' );

// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	'bottom' => __( 'Bottom Navigation', 'wpfme' ),
) );