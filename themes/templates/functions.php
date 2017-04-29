<?php
/*
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
*/
?>
<?php
if (function_exists('add_theme_support'))
{
    add_theme_support('post-thumbnails');
}

//bloginfo function
function bloginfo( $show = '' ) {
    echo get_bloginfo( $show, 'display' );
}

//body_class function
function body_class( $class = '' ) {
    // Separates classes with a single space, collates classes for body element
    echo 'class="' . join( ' ', get_body_class( $class ) ) . '"';
}

//header function
    function wp_header() 
{
    do_action('wp_head');
}

// footer function
function wp_footer() 
{
    do_action( 'wp_footer' );
}
?>





?>