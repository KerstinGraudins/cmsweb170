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
<title><?php bloginfo('description'); ?> | <?php bloginfo('name');?> |ADE'</title>
<!--Remy Sharp Shim --> 
<!--[if lt IE 9]> 
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script> 
<![endif]-->
<!-- begin styles here -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<!--<link href= "css/sstyles.css" type="text/css" rel="stylesheet"> -->
    
<!--<link href="css/blueberry.css" type="text/css" rel="stylesheet"> -->
<!-- begin wordpress head -->
    <?php wp_head(); ?>
    <!-- end wordpress head -->
</head>
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