<?php

function custom_theme_assets() {
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.css');
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function seedmed_scripts(){
  wp_enqueue_script('smooth-scroll-jquery', get_stylesheet_directory_uri() . '/assets/js/jquery.scrollTo.min.js');
	wp_enqueue_script('smooth-scroll', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll');
}

add_action( 'wp_enqueue_scripts', 'seedmed_scripts' );

function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'home.php' ) ) {
        wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css' );
    }

    if ( is_page_template( 'o-firmie.php' ) ) {
        wp_enqueue_style( 'o-firmie', get_template_directory_uri() . '/assets/css/o-firmie.css' );
    }

    if ( is_page_template( 'medycyna.php' ) ) {
        wp_enqueue_style( 'medycyna', get_template_directory_uri() . '/assets/css/medycyna.css' );
    }

    if ( is_page_template( 'diagnostyka.php' ) ) {
        wp_enqueue_style( 'diagnostyka', get_template_directory_uri() . '/assets/css/diagnostyka.css' );
    }

    if ( is_page_template( 'weterynaria.php' ) ) {
        wp_enqueue_style( 'weterynaria', get_template_directory_uri() . '/assets/css/weterynaria.css' );
    }

    if ( is_page_template( 'wspolpraca.php' ) ) {
        wp_enqueue_style( 'wspolpraca', get_template_directory_uri() . '/assets/css/wspolpraca.css' );
    }

    if ( is_page_template( 'kontakt.php' ) ) {
        wp_enqueue_style( 'kontakt', get_template_directory_uri() . '/assets/css/kontakt.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );
add_theme_support( 'post-thumbnails' );
