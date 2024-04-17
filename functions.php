<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    wp_enqueue_style('child-style', get_template_directory_uri() . '/style.css', array ('parent-style'), filemtime (get_stylesheet_directory() . '/style.css'));

    wp_enqueue_style( 'parent-woocommerce-style', get_template_directory_uri() . '/assets/css/woocommerce.css' ); 
    wp_enqueue_style('child-woocommerce-style', get_template_directory_uri() . '/style.css', array ('parent-style'));

    wp_enqueue_style( 'parent-responsive-style', get_template_directory_uri() . '/assets/css/responsive.css' ); 
    wp_enqueue_style('child-reponsive-style', get_template_directory_uri() . '/style.css', array ('parent-style'));
}

add_filter( 'big_image_size_threshold', '__return_false' );



function remove_google_fonts_stylesheet() {

    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');
}

add_action('wp_enqueue_scripts', 'remove_google_fonts_stylesheet', 9999);

 