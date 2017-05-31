<!--
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
-->

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
    <title><?php get_my_title_tag();?></title>
    

 <!-- meta-->
<meta name="description" content="<?php get_the_excerpt(); ?>"/>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />  
    
<!-- begin styles here -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<!--<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css"> -->
    
<!-- scripts go here here-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
    <!-- flex slider will go here here-->
    <!-- flex ends here-->
     <!--Toggle for navigation drop down is   here-->
    <script type="text/javascript" charset="utf-8">
        $(window).load(function()){//enable on window load
            $("#toggle").click(function(){ //when toggle clicked
                $("#navigation").toggle(); //opens and closes nav
            
        });
    });
    </script>
     <!-- toggle ends here-->
    
    
<!-- begin wordpress head -->
    <?php wp_head(); ?>
<!-- end wordpress head -->
    
</head>
<body <?php body_class(); ?>>

    
<!--begin header  -->

    <h1 id="logo"><a href="<?php echo get_option('home'); ?>">ADE'</a></h1>
    <img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">

<!-- end header -->
    
<!--begin old static nav  -->
<!--<div id="nav">
<ul>

<li><a href="index.html">HOME</a></li>
<li><a href="calendar.html">CALENDAR</a></li>
<li><a href="gallery.html">GALLERY</a></li>
<li><a href="video.html">VIDEO</a></li>
<li><a href="drag.html">DRAG</a></li>
<li><a href="theater.html">THEATER</a></li>
<li><a href="music.html">MUSIC</a></li>

</ul>
</div><!-- end old nav div -->
    <!-- this is wordpress navigation-->
    <div id="nav">
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation',)); ?>
        </div>
    <!--end nav-->
     <!--begin middle ??? here-->
     <!-- <div id="middle">--> 