<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );


wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.css');


