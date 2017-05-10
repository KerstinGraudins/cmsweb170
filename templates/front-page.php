
<!--
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
-->

<?php get_header(); ?>


   <!-- begin wp loop ONE -->
    <?php if ( have_posts()) :while(have_posts()) : the_post(); //starts loop ?>
    <h2><a href="<?php the_permalink();//link to page?>">
        <?php the_title(); //get title ?></a></h2>
    <?php the_content(''); //gets content ?>
    <!--page content goes here  -->
        <?php endwhile; endif;  //ends loop ?>
    <!-- end wp loop -->

</div><!--end wrapper div  -->

<div id="banner">
<!-- blueberry -->

    <div class="blueberry">
      <ul class="slides">
        <li><img src="images/kade.jpg" alt="Kerstin Graudins print" /></li>
        <li><img src="images/queer.jpg" alt="silent protest" /></li>
        <li><img src="images/goldface.jpg" alt="Mark Mitchell" /></li>
        <li><img src="images/camik.jpg" alt="Imminent Mode 2015" /></li>
      </ul>
    </div>

<!-- blueberry -->
</div>


<div class="article column1">
<p><h2>Ade' Connere is a multi-talented artist. She is an actress, singer and musician.</h2></p>
</div>
<!--begin loop TWO-->
<div class="article column2">
    
<h2>POSTS</h2>
    <?php rewind_posts(); //stop loop one ?>
    <?php query_posts('showposts=3'); //directions for loop two ?>
    <?php while (have_posts()) : the_post(); //start loop two ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; // end loop two ?>
</div>
<!-- end wp loop TWO -->
<div class="article column3">
<form action="formhandler.php"
method="post">
<fieldset>
<label>SEND ME A MESSAGE</label>
<textarea name= "comments" rows="8"></textarea>
<input type="submit" value="submit">
</fieldset>
</form>
</div>
<small>front-page.php</small>
<?php get_footer(); ?>