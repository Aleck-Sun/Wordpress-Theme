<?php

// Load Styles
function getStyle() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/mycss/style.css',
        array(), false, 'all');
    wp_enqueue_style('main');    
}

add_action('wp_enqueue_scripts', 'getStyle');

// Load JS
function getJS() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        'jquery', false, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'getJS');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus
register_nav_menus( array('nav-bar' => 'nav bar location', 'mobiles-menu' => 'mobiles menu location') );

// Image Sizes
add_image_size('blog-large', 100000, 400, true);
add_image_size('blog-small', 100000, 200, true);