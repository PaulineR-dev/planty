<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100); //Avec priorité supérieure à celle d'Elementor
function theme_enqueue_styles()
{
    // Chargement du thème parent OceanWP
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du style du thème actif enfant après celui du thème parent
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

//Activation du menu dans Apparence Menus
function register_my_menus() {
    register_nav_menus([
    'menu-header-planty' => 'Menu Header Planty'
    ]);
}
add_action('after_setup_theme', 'register_my_menus');

function lien_admin($items, $args) {
    if (is_user_logged_in()) {
         // Si utilisateur connecté alors ajout d'un élément dans la liste
        $items .= '<li class="menuadmin"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
// Hook filtre
add_filter('wp_nav_menu_items', 'lien_admin', 10, 2);
