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

function themeslug_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_section( 'header_color' , array(
      'title' => 'Header Color',
      'priority' => 41, // After Colors.
    ) );
    
    $wp_customize->add_setting( 'header_background_color',array(
    'default' => '#000000'));
    
    $wp_customize->add_control( 'header_background_color', array(
      'type' => 'color',
      'section' => 'header_color', // Required, core or custom.
      'description' => 'Color for the Header Background',
    ) );
    
    // Do stuff with $wp_customize, the WP_Customize_Manager object.
    $wp_customize->add_setting( 'hamburger_color',array(
    'default' => '#ffffff'));
    
    $wp_customize->add_control( 'hamburger_color', array(
      'type' => 'color',
      'section' => 'header_color', // Required, core or custom.
      'description' => 'Color for the Hamburger Icon',
    ) );
    
    $wp_customize->selective_refresh->add_partial( 'header_background_color', array(
        'selector' => 'nav') );
    $wp_customize->selective_refresh->add_partial( 'hamburger_color', array(
        'selector' => '#headerHamburger') );
    $wp_customize->selective_refresh->add_partial( 'header_image', array(
        'selector' => '#homeHeroHeader') );
}
add_action( 'customize_register', 'themeslug_customize_register' );
add_action( 'after_setup_theme', function () {
    add_theme_support( 'custom-header', array( 'header-text' => false ) );
} );

//css to add to header for the customizer
function my_customizer_css(){
    $colorHeader = get_theme_mod('header_background_color');
    $colorHamburger = get_theme_mod('hamburger_color');
    
    $css = "<style type='text/css' id='my_customizer'>
                nav{
                    background:{$colorHeader};
                }
                
                nav .customize-partial-edit-shortcut-custom_logo{
                    left:2rem;
                }
                
                nav .customize-partial-edit-shortcut-header_background_color{
                    right:50%;
                }
                
                nav #headerHamburger{
                    color:{$colorHamburger}
                }
                
                header .customize-partial-edit-shortcut-header_image{
                    top:3.5rem;
                    left:2.1rem;     
                }
            </style>";
    echo $css;
}add_action( 'wp_head', 'my_customizer_css');