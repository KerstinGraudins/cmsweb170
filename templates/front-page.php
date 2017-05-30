
<!--
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
-->

<?php get_header(); ?>
<!--flexsilder goes here -->
<!-- flexslider ends here-->


   <!-- begin wp loop ONE -->
    <?php if ( have_posts()) :while(have_posts()) : the_post(); //starts loop ?>
    <h2><a href="<?php the_permalink();//link to page?>">
        <?php the_title(); //get title ?></a></h2>
    <?php the_content(''); //gets content ?>
    <!--page content goes here  -->
        <?php endwhile; endif;  //ends loop ?>
    <!-- end wp loop -->


<!--begin loop TWO-->
<div class="article column2">
    
<h2>POSTS</h2>
    <?php rewind_posts(); //stop loop one ?>
    <?php query_posts('showposts=3'); //directions for loop two ?>
    <?php while (have_posts()) : the_post(); //start loop two ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; // end loop two ?>
</div>

<small>front-page.php</small>
<?php get_footer(); ?>