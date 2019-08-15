<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

// Disable admin bar 
show_admin_bar( false );

// deregister JQuery
wp_deregister_script( 'jquery' );

function buckstreet_assets() {

    // Load the main stylesheet.
	wp_enqueue_style(
		'main-stylesheet',
		get_theme_file_uri( ) . '/assets/css/style.css',
		null,
		true,
		'all'
    );

    // Load the main script file.
	wp_enqueue_script(
		'main-script',
		get_theme_file_uri( ) . '/assets/js/script.js',
		[ 'jquery' ],
		'1.1.0',
		true
	);

}

add_action( 'wp_enqueue_scripts', 'buckstreet_assets' );

wp_deregister_script( 'jquery' );

add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});