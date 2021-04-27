<?php

function getStyle() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',
        array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/assets/mycss/style.css',
        array(), false, 'all');
    wp_enqueue_style('main');    
}

add_action('wp_enqueue_scripts', 'getStyle');

function getJS() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        'jquery', false, true);
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'getJS');