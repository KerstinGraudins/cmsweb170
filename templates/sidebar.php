<?php
/*
Theme Name: Kerstin's LP
Author: Kerstin Graudins
Author URI: http://www.adeallday.com/
Description: this is a theme for the web 170 class 
version 1.0
*/
?>
<!-- This is a side bar -->
<div id="sidebar">

<!-- sub navigation is here-->
    <div id="sub-navigation" class="widget">
    <h2><?php
        
        if(is_page()) 
        {
            echo get_the_title($post->post_parent);//lists the parent page title
        }
        else
        {
            echo 'Blog';
        }
        
        ?></h2>
        <ul class="sub-navigation-items">
            <?php
            if(is_page()) {
                if($post->post_parent) {
               
                    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '',)); //list children
                } else {
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));
                } 
            } else {
                    wp_list_categories(array('title_li' => '',));   
                }
            
            ?>
        </ul>
    </div>
<!--end sub navigation-->
    <!--begin Pull Quote-->
    <div id="pull-quote">
    <?php if (get_post_meta($post->ID, 'Quote', true)) ://is there a quote ?>
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true);//write quote ?></blockquote>
    <?php endif; ?>
    </div>
    <!--end quote-->
<!-- end pull quote here-->
    <!-- widgets will go here-->
    <?php dynamic_sidebar(1); //calls the widget ?>
<!--end widgets -->

</div><!--end side bar -->