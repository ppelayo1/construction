<?php
function wp_add_styles(){
    //enque and register the styles
    wp_register_style('BootStrap' ,'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    wp_register_style('FontAwesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css',array('BootStrap','FontAwesome'));
    wp_enqueue_style('style');
    
    
}

function wp_add_scripts(){
    wp_register_script('main',get_template_directory_uri() . '/main.js',array('jquery','jquery-effects-slide'));
    wp_enqueue_script('main');
}

add_action('wp_enqueue_scripts', 'wp_add_styles');
add_action('wp_enqueue_scripts', 'wp_add_scripts');



//custom background default background color
$args = array(
    'default-color' => '0000ff',
    'default-image' => get_template_directory_uri() . '/images/wapuu.jpg',
);


//added theme supports
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
    
//add menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );
    