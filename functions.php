<?php
function load_stylesheets()
{

    wp_register_style('stylesheet', get_template_directory_uri() . '/dist/app.css', array(), 1, 'all');
    wp_enqueue_style ('stylesheet');

    wp_enqueue_script('jquery');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');

}

add_action('wp_enqueue_scripts','load_stylesheets');

// This is a custom logo

add_theme_support( 'custom-logo' );

function themename_custom_logo() {
    $defaults = array(
        'height'               => 120,
        'width'                => 170,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo' );

// Register primary menu

function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'primary Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


//    function order_posts_by_title( $query ) { 

//     if ( $query-is_home() && $query-is_main_query() ) { 
 
//       $query-set( 'orderby', 'title' ); 
 
//       $query-set( 'order', 'ASC' ); 
 
//     } 
 
//  } 
 
//  add_action( 'pre_get_posts', 'order_posts_by_title' );