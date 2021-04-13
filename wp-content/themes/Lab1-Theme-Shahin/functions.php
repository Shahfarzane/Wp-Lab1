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



function add_themes() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
    wp_enqueue_style('font-awesome');


    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'add_themes' );
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Register WP Navigation menu
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
);
register_nav_menus(
array(
    'side-menu' => __('Side Menu', 'theme')
)
);

// Register Side bar
    register_sidebar(
        array(
            'id'            => 'sidebar-1',
            'name'          => 'WpBlogg Sidebar',
        )
    );


    add_image_size( 'slide', 1000, 400, false );



    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_60758b3572ac9',
            'title' => 'contact us',
            'fields' => array(
                array(
                    'key' => 'field_60758b68f015e',
                    'label' => 'contact',
                    'name' => 'contact',
                    'type' => 'acf_cf7',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '70',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'acfe_display_title' => '',
            'acfe_autosync' => '',
            'acfe_form' => 0,
            'acfe_meta' => '',
            'acfe_note' => '',
        ));
        
        acf_add_local_field_group(array(
            'key' => 'group_60758cb3dfb0e',
            'title' => 'Undersida',
            'fields' => array(
                array(
                    'key' => 'field_60758cbfb3f63',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => 'XXXX',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_60758d0f73af6',
                    'label' => 'Detail Note',
                    'name' => 'detail_note',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '34',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'acfe_display_title' => '',
            'acfe_autosync' => '',
            'acfe_form' => 0,
            'acfe_meta' => '',
            'acfe_note' => '',
        ));
        
        endif;
?>