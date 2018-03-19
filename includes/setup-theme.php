<?php

// Setup theme 
function stonedancing_setup() {
    register_nav_menus( array(
        'home_menu' => esc_html__('Home Page Nav', 'stonedancing')
    ));

    // Featured Images
    add_theme_support('post-thumbnails');

    // Instructor list thumbnail
    add_image_size('instructor_thumb', 250, 250, true);
}
add_action('after_setup_theme', 'stonedancing_setup');

