<?php    

function test_style_func() {
 	wp_enqueue_style( 'test_style', get_stylesheet_directory_uri() . '/css/style.css', array() );
    wp_enqueue_style( 'test_plugins', get_stylesheet_directory_uri() . '/css/plugins.css', array() );
    wp_enqueue_style( 'test_reset', get_stylesheet_directory_uri() . '/css/reset.css', array() );
    wp_enqueue_style( 'test_yourstyle', get_stylesheet_directory_uri() . '/css/yourstyle.css', array() );
    
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'test_core', get_template_directory_uri() . '/js/core.js', array('jquery') );
    
    wp_enqueue_script( 'test_plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery') );
    wp_enqueue_script( 'test_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery') );
    wp_add_inline_script( 'jquery', '$ = jQuery;', 'after' );
}

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_action('wp_enqueue_scripts', 'test_style_func');
