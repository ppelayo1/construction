<?php
/**
* Template Name: TEST
*
* 
*/
?>

<?php get_header(); ?>

   <h1><?php 
       $image = get_field('fun_label');
       
       echo  "<div style='background:{$image}'>test</div>";
        ?>
    </h1>
<?php get_footer(); ?>