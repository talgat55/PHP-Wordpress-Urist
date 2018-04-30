<?php
 

get_header(); ?>

    <div class="wrap single-post-page">
        <div class="container">

            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();
                echo '
                <article>
                        <div class="title-post">' . get_the_title(get_the_ID()) . '</div>
                        <div>' .do_shortcode(get_the_content(get_the_ID())). '</div>
                          <div class="ya-share2" data-services="vkontakte,odnoklassniki,facebook" data-description="' . strip_tags (my_string_limit_words(get_the_content(get_the_ID()), 10)) . '" data-title="' . get_the_title(get_the_ID()) . '"   data-url="' . get_the_permalink(get_the_ID()) . '"   data-counter></div>
            
                </article>
            ';

            endwhile; // End of the loop.
            ?>

        </div>
    </div><!-- .wrap -->

<?php get_footer();
