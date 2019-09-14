<?php

// Add scripts and stylesheets
function resilienceacademy_scripts() {
    wp_enqueue_style( 'flexboxgrid', get_template_directory_uri() . '/css/flexboxgrid.min.css');
    wp_enqueue_style( 'flex', get_template_directory_uri() . '/css/flex.css' );
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_style( 'home', get_template_directory_uri() . '/css/home.css' );
    wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js');
}

add_action( 'wp_enqueue_scripts', 'resilienceacademy_scripts' );