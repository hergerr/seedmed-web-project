<?php

function custom_theme_assets() {
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.min.css');
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.min.css');
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function seedmed_scripts(){
	wp_enqueue_script('animations', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', array('jquery'),'false','false');
}

add_action( 'wp_enqueue_scripts', 'seedmed_scripts' );

function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'home.php' ) ) {
        wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.min.css' );
        wp_enqueue_style( 'slider-def', get_template_directory_uri() . '/assets/css/slider-def.min.css' );
    }

    if ( is_page_template( 'o-firmie.php' ) ) {
        wp_enqueue_style( 'o-firmie', get_template_directory_uri() . '/assets/css/o-firmie.min.css' );
    }

    if ( is_page_template( 'medycyna.php' ) ) {
        wp_enqueue_style( 'medycyna', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.min.css' );
    }

    if ( is_page_template( 'diagnostyka.php' ) ) {
        wp_enqueue_style( 'diagnostyka', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.min.css' );
    }

    if ( is_page_template( 'weterynaria.php' ) ) {
        wp_enqueue_style( 'weterynaria', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.min.css' );
    }

    if ( is_page_template( 'wspolpraca.php' ) ) {
        wp_enqueue_style( 'wspolpraca', get_template_directory_uri() . '/assets/css/wspolpraca.min.css' );
    }

    if ( is_page_template( 'kontakt.php' ) ) {
        wp_enqueue_style( 'kontakt', get_template_directory_uri() . '/assets/css/kontakt.min.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );
add_theme_support( 'post-thumbnails' );
