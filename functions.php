<?php 
// Add javascript, stylesheets and fonts
require_once(__DIR__ . '/includes/styles-scrips.php'); 

// Setup Theme
require_once(__DIR__ . '/includes/setup-theme.php'); 

// Add bootstrap nav-item class to <li>
function stonedancing_custom_li_classes($classes, $items, $args) {
    if($args->theme_location == 'home_menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'stonedancing_custom_li_classes', 1, 3);

// Add bootstrap nav-link class to <a>
function stonedancing_custom_anchor_classes($attrs, $items, $args) {
    if($args->theme_location == 'home_menu') {
        $class = 'class';
        $attrs['class'] = 'nav-link';
    }
    return $attrs;
}
add_filter('nav_menu_link_attributes', 'stonedancing_custom_anchor_classes', 10, 3);

// Widgets
function stonedancing_widgets() {
    register_sidebar( array(
        'name' => 'Footer Widget Copyright',
        'id' => 'footer-widget-copyright',
        'class' => 'col-12 py-4 px-4 sd-copyright',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '',
        'before_title' => '',
        'after_title' => ''
    ));
}
add_action('widgets_init', 'stonedancing_widgets');

// Utils
function copyright_year() {
    return date('Y');
}
add_shortcode( 'copyrightyear', 'copyright_year' );

// Hide admin bar
add_filter('show_admin_bar', '__return_false');


// Customizations for instructors
require_once(__DIR__ . '/includes/instructors.php'); 

// Customizations for courses
require_once(__DIR__ . '/includes/courses.php'); 