<?php

function custom_theme_assets() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.css');
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// function scripts(){
//   wp_enqueue_script('smooth-slide', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollTo.min.js', array('jquery'), false, false);
// }
//
// add_action( 'wp_enqueue_scripts', 'smooth-slide' );
