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
        <?php 
            //custom field for the nav header background color
            $backgroundColor = get_field('header_background_color');
             echo "<nav style='background:{$backgroundColor}'>"; 
        ?>
            <?php
            //lets user enter a custom header image
                if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
            ?>
        
            <?php 
                //custom field for the hamburger color
                $hamburgerColor = get_field('hamburger_color');
                 echo "<i id='headerHamburger' style='color:{$hamburgerColor}' class='fa fa-bars'></i>"; 
            ?>
        
            
            
        </nav>  
            

    
