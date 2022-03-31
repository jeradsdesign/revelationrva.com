<?php

function revelationva_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');

    	// This theme uses post thumbnails

	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'revelationva_theme_support');

function revelationva_menus(){
    $locations = array(
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'revelationva_menus');

function revelationva_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap", array(), '', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . "/node_modules/bootstrap/dist/css/bootstrap.min.css", array(), '5.1.3', 'all');
    wp_enqueue_style('revelationva-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'revelationva_register_styles');

function revelationva_register_scripts(){
    
    wp_enqueue_script('revelationva-bootstrap', get_template_directory_uri() . "/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", array(), '1', 'true');
    wp_enqueue_script('main-js', get_template_directory_uri() . "/js/main.js", array(), '1', 'true');

}

add_action('wp_enqueue_scripts', 'revelationva_register_scripts');

?>