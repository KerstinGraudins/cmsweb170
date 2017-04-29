<?php
/*
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
*/
?>
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