<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100); //Avec priorité supérieure à celle d'Elementor
function theme_enqueue_styles()
{
    // Chargement du thème parent OceanWP
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du style du thème actif enfant après celui du thème parent, sans versionnage pour éviter les blocages liés au navigateur
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), null);
}

//Activation du menu dans Apparence Menus
function register_my_menus() {
    register_nav_menus([
    'menu-header-planty' => 'Menu Header Planty'
    ]);
}
add_action('after_setup_theme', 'register_my_menus');