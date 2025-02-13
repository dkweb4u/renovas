<?php

function myThmeStyles(){
    wp_enqueue_script('mtthmescript',get_theme_file_uri('/assets/js/main.js'),null,null,true );
    wp_enqueue_style('custom_theme_css_file', get_theme_file_uri('/assets/css/style.css'));
    wp_enqueue_style('dashicons'); // wordpress icons
    wp_enqueue_style('mythemestyle',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','myThmeStyles');

function my_theme_features() {
    // Register Menu
    register_nav_menu('headerMenuLocation','Header Menu Location');

    // wordpress title support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

}
add_action('after_setup_theme', 'my_theme_features');