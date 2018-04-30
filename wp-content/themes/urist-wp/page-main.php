<?php
/** 
* Template Name: Main Page
 */

get_header(); ?>

    <div class="wrap">
        <div class="container">
            <?php
            while ( have_posts() ) : the_post();
                the_content();
                endwhile; // End of the loop.
            ?>
          </div>  
    </div><!-- .wrap -->

<?php get_footer();
