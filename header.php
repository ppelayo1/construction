<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PatrickP.Tech</title>

                
    <?php do_action('wp_head'); ?>
</head>

<body>
    <div id='mobileMenu'>
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) );?>
    </div>
    
    <header>
        
            <nav class='navBar'>
        
            <?php
            //lets user enter a custom header image
                if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
            ?>  
                
            <i id='headerHamburger' class='fa fa-bars'></i>"
            </nav>  
            

    
