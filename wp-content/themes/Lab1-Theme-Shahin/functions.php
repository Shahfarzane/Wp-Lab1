<?php

function my_scripts_method(){

    wp_register_script('script',get_template_directory_uri() .'/js/script.js', array(), 1, 'all');
    wp_enqueue_script('script');
    wp_enqueue_script( 'jquery' ); 

}
add_action('wp_enqueue_scripts', 'my_scripts_method');




add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_theme_support('widgets');



function add_themes() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.1', 'all');
    wp_enqueue_style('font-awesome');


    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style');

}
add_action( 'wp_enqueue_scripts', 'add_themes');
add_theme_support('menus');
add_theme_support('post-thumbnails');


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
            'name'          => 'Sidebar',
        )
    );

// function wpb_custom_new_menu() {
//     register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
//   }
//   add_action( 'init', 'wpb_custom_new_menu' );

    add_image_size( 'slide', 1000, 400, false );


acf_add_options_page(
    array(
        'page_title' 	=> 'Theme General Settings',
    'menu_title'	=> 'Theme Settings',
    'menu_slug' 	=> 'theme-general-settings',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Header Settings',
        'menu_title'	=> 'Header',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Sidebar Settings',
        'menu_title'	=> 'Sidebar',
        'parent_slug'	=> 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Theme Footer Settings',
        'menu_title'	=> 'Footer',
        'parent_slug'	=> 'theme-general-settings',
    ));


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
            'key' => 'group_6075a1e6936d9',
            'title' => 'Home',
            'fields' => array(
                array(
                    'key' => 'field_6075a1f3c2a4d',
                    'label' => 'title text',
                    'name' => 'title_text',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6075a220c2a4e',
                    'label' => 'full text',
                    'name' => 'full_text',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6075a22dc2a4f',
                    'label' => 'cover image',
                    'name' => 'cover_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'uploader' => '',
                    'acfe_thumbnail' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                    'library' => 'all',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '125',
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
            'key' => 'group_607595ad1bacf',
            'title' => 'Undersida',
            'fields' => array(
                array(
                    'key' => 'field_607595b67091f',
                    'label' => 'Text title',
                    'name' => 'text_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_607595ec70920',
                    'label' => 'full text',
                    'name' => 'full_text',
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
                        'value' => '88',
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
            'key' => 'group_607597002ce8f',
            'title' => 'Undersida2',
            'fields' => array(
                array(
                    'key' => 'field_607597063f5b8',
                    'label' => 'text title',
                    'name' => 'text_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_6075970e3f5b9',
                    'label' => 'full text',
                    'name' => 'full_text',
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
                        'value' => '94',
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
            'key' => 'group_60759a5e6cf1b',
            'title' => 'Undersida3',
            'fields' => array(
                array(
                    'key' => 'field_60759a6af7d46',
                    'label' => 'Text title',
                    'name' => 'text_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_60759a74f7d47',
                    'label' => 'Full text',
                    'name' => 'full_text',
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
                        'value' => '108',
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
            'key' => 'group_60759b01ecb3a',
            'title' => 'Undersida4',
            'fields' => array(
                array(
                    'key' => 'field_60759b0b585c0',
                    'label' => 'Text title',
                    'name' => 'text_title',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_60759b1a585c1',
                    'label' => 'Full text',
                    'name' => 'full_text',
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
                array(
                    'key' => 'field_60759b27585c2',
                    'label' => 'image',
                    'name' => 'image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'uploader' => '',
                    'acfe_thumbnail' => 0,
                    'return_format' => 'array',
                    'preview_size' => 'thumbnail',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                    'library' => 'all',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page',
                        'operator' => '==',
                        'value' => '114',
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


        function get_related_author_posts() {
            global $authordata, $post;
         
            $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );
         
            $output = '<ul>';
            foreach ( $authors_posts as $authors_post ) {
                $output .= '<li><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
            }
            $output .= '</ul>';
         
            return $output;
        }
?>