<?php

//add featured image in post support
add_theme_support( 'post-thumbnails' );

// Main styles
function custom_theme_assets() {
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.min.css');
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.min.css');
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

// Custom styles
// function wpse_enqueue_page_template_styles() {
//     if ( is_page_template( 'home.php' ) ) {
//         wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.min.css' );
//         wp_enqueue_style( 'slider-def', get_template_directory_uri() . '/assets/css/slider-def.css' );
//     }
//
//     if ( is_page_template( 'o-firmie.php' ) ) {
//         wp_enqueue_style( 'o-firmie', get_template_directory_uri() . '/assets/css/o-firmie.css' );
//     }
//
//     if ( is_page_template( 'medycyna.php' ) ) {
//         wp_enqueue_style( 'medycyna', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.css' );
//     }
//
//     if ( is_page_template( 'diagnostyka.php' ) ) {
//         wp_enqueue_style( 'diagnostyka', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.css' );
//     }
//
//     if ( is_page_template( 'weterynaria.php' ) ) {
//         wp_enqueue_style( 'weterynaria', get_template_directory_uri() . '/assets/css/medycyna-diagnostyka-weterynaria.css' );
//     }
//
//     if ( is_page_template( 'wspolpraca.php' ) ) {
//         wp_enqueue_style( 'wspolpraca', get_template_directory_uri() . '/assets/css/wspolpraca.css' );
//     }
//
//     if ( is_page_template( 'kontakt.php' ) ) {
//         wp_enqueue_style( 'kontakt', get_template_directory_uri() . '/assets/css/kontakt.css' );
//     }
// }

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

// Scripts

// include custom jQuery
function custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'custom_jquery');

function seedmed_scripts(){
    wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array('jquery'), '1.0', 'true');
    wp_enqueue_script('animations', get_template_directory_uri() . '/assets/js/animations.min.js', array('jquery'),'1.0','true');
}

add_action( 'wp_enqueue_scripts', 'seedmed_scripts' );
