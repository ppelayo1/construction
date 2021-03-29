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
        
        <section class='serviceBox container'>
            <h1>Our Services</h1>
            <div id='servicesRow' class='row myRow'>
                <div class='service col-md-4'>
                    <h2>Construction</h2>
                    <p>We can build anything that you think of. We built buildings that reached the moon, and rocket ships that reached Europe.</p>
                </div>

                <div class='service col-md-4'>
                    <h2>Maintenance</h2>
                    <p>Our abilities to maintain things is unmatched. We maintain time machines so that we can always have a building like new.</p>
                </div>

                <div class='service col-md-4'>
                    <h2>Demolition</h2>
                    <p>Doesn't matter what it is, we can destroy it. We personally destroyed the Dinosaurs so that we can build more buildings.</p>
                </div>
            </div>
        </section>
        
        <section class='serviceBox container'>
            <h1>Our Story</h1>
            <div id='storyRow' class='row myRow'>
                <div id='famBusCol' class='col-md-6'>
                    <h2>Family Business</h2>
                    <p>Established in 1555 by Jimmy the Bean Bag man the Crazy Construction Company has fulfilled its customer needs 130% of the time. Jimmy opened his first office in his outside the city of San Francisco and the world of construction was never the same again.</p>
                </div>
                
                <div class='col-md-6'>
                    <p>placeHolder</p>
                </div>
                
                
            </div>
        
        </section>
        
        


    </main>
   
<?php get_footer(); ?>