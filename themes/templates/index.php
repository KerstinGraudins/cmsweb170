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
<!-- begin wordpress head -->
    <?php wp_head(); ?>
    <!-- end wordpress head -->

<body <?php body_class(); ?>>
<div id="wrapper">
<!--begin header  -->
<header>
<h1>ADE'</h1>
</header>
<!-- end header -->
<!--begin nav  -->
<div id="nav">
<ul>

<li><a href="index.html">HOME</a></li>
<li><a href="calendar.html">CALENDAR</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="video.html">VIDEO</a></li>
<li><a href="drag.html">DRAG</a></li>
<li><a href="theater.html">THEATER</a></li>
<li><a href="music.html">MUSIC</a></li>

</ul>
</div><!-- end nav div -->
   <!-- begin wp loop -->
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
<div class="article column2">
<h2>LINKS</h2>
<a href="http://www.thestranger.com/blogs/slog/2015/03/13/21901695/the-little-magic-that-remains-in-our-changing-capitol-hill"><h3>The Stranger</h3></a>
<a href="https://www.bellevuecollege.edu/news/2016/05/17/drag-bingo-coming-to-bellevue-college/"><h3>Bingo Host</h3></a>
<a href="http://chopsuey.com/calendar/cocktails-couture-the-witching-hour-in-the-den/"><h3>Chop Suey</h3></a>
<a href="https://www.strangertickets.com/events/33096464/whatever-happened-to-bianca-del-rio"><h3>Theater</h3></a>
<a href="http://www.thestranger.com/blogs/slog/2015/03/13/21901695/the-little-magic-that-remains-in-our-changing-capitol-hill"><h3>The Stranger</h3></a>
</div>
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

<?php get_footer(); ?>
 <!--start wp footer  -->
    <?php wp_footer(); ?>
    <!-- end wp footer -->

</body>
</html>