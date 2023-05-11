<?php namespace TestTheme;
// only for demonstration of automatic versioning setup

function register_assets() {
	[ 'version' => $version ]  = include( \get_stylesheet_directory() . '/build/theme.asset.php' );
	wp_enqueue_script(
		'theme-script',
		\get_stylesheet_directory() . '/build/theme.js',
		array(),
		$version
	);
	wp_enqueue_style(
		'theme-style',
		\get_stylesheet_directory() . '/build/theme.css',
		array(),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'TestTheme\register_assets' );
