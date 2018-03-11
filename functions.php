<?php

function themeexperiment_enqueue_style() {
    // wp_enqueue_style('style',  get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'themeexperiment_enqueue_style');