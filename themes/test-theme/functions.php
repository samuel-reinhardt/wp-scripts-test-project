<?php
// untested, and not meant to work
// only for demonstration of automatic versioning setup

$theme_assets = include( get_stylesheet_directory() . 'build/theme.asset.php' );
wp_register_script(
    'theme-script',
    get_stylesheet_directory() . 'build/theme.js',
    array(),
    $theme_assets['version']
);
wp_register_style(
	'theme-style',
	get_stylesheet_directory . 'build/theme.css',
	array(),
	$theme_assets['version']
);
