<?php
/**
* Template Name: home_front_page
*
* 
*/
?>
<?php get_header(); ?>
        <div id="homeHeroHeader">
            <img  src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </div>

    </header>

    <main>
        <div class='contentBox'>
            <section class='container'>
                <h1>Our Services</h1>
                <div id='servicesRow' class='row'>
                    <div class='col-lg-4'>
                        <h2>Construction</h2>
                        <p>We can build anything that you think of. We built buildings that reached the moon, and rocket ships that reached Europe.</p>
                    </div>
                    
                    <div class='col-lg-4'>
                        <h2>Maintenance</h2>
                        <p>Our abilities to maintain things is unmatched. We maintain time machines so that we can always have a building like new.</p>
                    </div>
                    
                    <div class='col-lg-4'>
                        <h2>Demolition</h2>
                        <p>Doesn't matter what it is, we can destroy it. We personally destroyed the Dinosaurs so that we can build more buildings.</p>
                    </div>
                </div>
            </section>
        </div>
        


    </main>
   
<?php get_footer(); ?>