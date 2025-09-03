<?php

// Hooks action

function theme_enqueue_styles()
{
    // Chargement du thème parent OceanWP
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du style du thème actif enfant après celui du thème parent avec gestion de la version du fichier
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles', 100);


// Activation du menu dans Apparence Menus sur WordPress
function menuheaderplanty()
{
    register_nav_menu('menu-header-planty', 'Menu Header Planty');
}
add_action('after_setup_theme', 'menuheaderplanty');


// Hook filter

// Admin dans le menu
function lien_admin($items) {
    if (is_user_logged_in()) {
         // Si utilisateur connecté alors ajout d'un élément dans la liste
        $items .= '<li class="menuadmin"><a href="' . admin_url() . '">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'lien_admin', 10, 1);