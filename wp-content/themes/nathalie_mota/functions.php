<?php
//pour les versions anciens de  WP
if ( !function_exists('wp_body_open')){
    function wp_body_open() {
        do_action( 'wp_body_open');
    }
}

function nathalie_mota_enqueue_style() {
    //  Chargement du style personnalisé du theme
  
    wp_register_style('nathalie_mota_stylesheet', get_stylesheet_uri() , array(), '1.0');
    
}

/*************Actions*************/
add_action('wp_enqueue_script', 'nathalie_mota_enqueue_style');

//  supprimer l'extention de Gutenberg
add_filter('use_block_editor_for_post_type', '__return_false', 100);
//  activer le menu
add_theme_support('menus');