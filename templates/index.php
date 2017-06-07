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
    <?php if ( have_posts() ) :while(have_posts() ) : the_post(); //starts loop ?>
<article id="article-<?php the_ID(); ?>" class="article">
    <h2><a href="<?php the_permalink();//link to page?>">
        <?php the_title(); //get title ?></a></h2>
<small>Posted on <?php the_time('F j, Y'); //get the time ?> by <?php the_author(); //gets authors name ?> in <?php the_category(', ');//gets category ?></small>
<a href="<?php the_permalink(); //links to page or posting ?>">
    <?php the_post_thumbnail( 'thumbnail' ); ?></a>
<p><?php echo get_the_excerpt(); //gets the postings exerpt ?><a href="<?php the_permalink(); ?>">Full Story&nbsp;&raquo;</a></p>
    <!--page content goes here  -->
</article>
        <?php endwhile; endif;  //ends loop ?>
    <!-- end wp loop -->
<small>index.php</small>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>