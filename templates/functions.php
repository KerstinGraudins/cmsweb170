<?php
/*
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
*/
// DO WHAT THE FUCK I AM TELLING YOU TO DO.

//register sidebars
register_sidebar(array('before_widget' => '<div id="%1%$s" class="widget %2$s">', 'after_widget' => '</div>'));
//
//register my menus
register_nav_menus(array(
  'main-menu' => __( 'Main Menu' )));
//
//create post thumbnails
add_theme_support( 'post-thumbnails' );
//
//create page excerpts
add_post_type_support( 'page', 'excerpt' );
//
?>