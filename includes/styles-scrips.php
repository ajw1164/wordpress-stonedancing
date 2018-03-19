<?php

// Add javascript, stylesheets and fonts
function stonedancing_styles() {
    // load fonts
    wp_enqueue_style( 'google-fonts-bad-script', 'https://fonts.googleapis.com/css?family=Bad+Script', array(), '1.0');
    wp_enqueue_style( 'google-fonts-dancing', 'https://fonts.googleapis.com/css?family=Dancing+Script:400,700', array(), '1.0');
    wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700', array(), '1.0');
    wp_enqueue_style( 'google-fonts-open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700', array(), '1.0');
   
    // load styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), 'v4.0.0-beta.3');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array() , '1.0');

    // load scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.2.1', false );
    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array(), '', true );
    wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array(), '1.12.3', true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), 'v4.0.0-beta.3', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'stonedancing_styles' );

