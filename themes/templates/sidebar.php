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
            if(is_page())
            {
                if($post->post_parent)
                {
                    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '',));//list children
                }
                else
                {
                    wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',));
                }
                else
                {
                    wp_list_categories(array('title_li' => '',));   
                }
            }
            ?>
        </ul>
    </div>
<!-- pull quote will go here-->
    <!-- widgets will go here-->


</div><!--end side bar -->