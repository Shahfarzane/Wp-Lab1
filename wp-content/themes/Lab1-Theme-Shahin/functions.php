<?php

function my_scripts_method(){

    wp_register_script('script',get_template_directory_uri() .'/js/script.js', array(), 1, 'all');
    wp_enqueue_script('script');
    wp_enqueue_script( 'jquery' ); 

}
add_action('wp_enqueue_scripts', 'my_scripts_method');




add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_image_size( 'slide', 1000, 400, false );



function add_theme_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('slider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.1', 'all');
    wp_enqueue_style('slider');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );
?>