<?php
function wp_add_styles(){
    //enque and register the styles
    wp_register_style('BootStrap' ,'https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css');
    wp_register_style('style', get_template_directory_uri() . '/style.css',array('BootStrap'));
    wp_enqueue_style('style');
    
    
}

function wp_add_scripts(){
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
    
    