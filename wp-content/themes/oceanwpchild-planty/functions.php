<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du thème parent OceanWP
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du style du thème actif enfant après celui du thème parent
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}