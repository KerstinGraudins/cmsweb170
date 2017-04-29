<?php
/*
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
*/
?>
<?php get_header(); ?>

 <!-- begin wp loop -->
    <?php if ( have_posts()) :while(have_posts()) : the_post(); //starts loop ?>
    <h2><a href="<?php the_permalink();//link to page?>">
        <?php the_title(); //get title ?></a></h2>
    <?php the_content(''); //gets content ?>
    <!--page content goes here  -->
        <?php endwhile; endif;  //ends loop ?>
    <!-- end wp loop -->
    
    <?php get_footer(); ?>