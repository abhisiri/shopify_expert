<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

function enqueue_parent_styles()
{

    wp_enqueue_style('brabus-child', get_stylesheet_directory_uri() . '/style.css', array(),time());
    wp_enqueue_style('bootstrap-min', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array());
}