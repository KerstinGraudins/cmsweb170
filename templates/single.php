<!--
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
-->

<?php get_header(); ?>

   <!-- begin wp loop -->
<div id="content"
<?php if ( have_posts()) :while(have_posts()) : the_post(); //starts loop ?>
<article id="post-<?php the_ID(); ?>" class="post">
<h2><?php the_title(); //get title ?></h2>
<small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //gets authors name ?> in <?php the_category(', ');//gets category ?></small>
<?php the_post_thumbnail( 'large' ); //gets featured image ?>
<?php the_content(''); //gets the content ?>
<?php endwhile; endif;  //ends loop ?>
<small>single.php</small>
</article>
</div>
<!-- end wp loop -->

<?php get_footer(); ?>