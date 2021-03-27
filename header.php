<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PatrickP.Tech</title>

                
    <?php do_action('wp_head'); ?>
</head>

<body>
    <header>
        <nav>
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
            ?>
            
            <div id="heroHeader"></div>
            
        </nav>
    </header>

    
