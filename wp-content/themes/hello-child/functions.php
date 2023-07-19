<?php

// branchement des fichiers enfant

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css');


    // wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/assets/js/script.js', '', '', true); // branchement du fichier JS enfant
}
