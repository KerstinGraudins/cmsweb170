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
<div id="content">
    <?php if ( have_posts()) :while(have_posts()) : the_post(); //starts loop ?>
<article id="article-<?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink();//link to page?>">
        <?php the_title(); //get title ?></a></h2>
    <?php the_content(''); //gets content ?>
    </article>
    <!--page content goes here  -->
        <?php endwhile; endif;  //ends loop ?>
    <small>page.php</small>
</div>
    <!-- end wp loop -->
<?php get_sidebar(); ?>
    
    <?php get_footer(); ?>