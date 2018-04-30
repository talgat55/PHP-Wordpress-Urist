<?php
/**
 * Template Name: Blog
 */

get_header(); ?>

    <div class="wrap">
        <div class="container">
            <div class="title-section margin-bottom-30">Статьи</div>
            <?php
            $args = array(
                'post_type' => 'post'
            );
            global $paged;
            global $wp_query;
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('posts_per_page=10&post_type=post'.'&paged='.$paged);



            //$the_query = new WP_Query($args);
            while ($wp_query->have_posts()):
                $wp_query->the_post();
                $post_id = $wp_query->post->ID;





                echo '
            <article>
                    <div class="title-post"> <a href="' . get_the_permalink($post_id) . '">' . get_the_title($post_id) . '</a></div>
                    <div class="social-links">
            <div class="ya-share2" data-services="vkontakte,odnoklassniki,facebook" data-description="' . strip_tags (my_string_limit_words(get_the_content($post_id), 10)) . '" data-title="' . get_the_title($post_id) . '"   data-url="' . get_the_permalink($post_id) . '"   data-counter></div>
                    </div>

                    <div>' . my_string_limit_words(get_the_content($post_id), 55) . '</div>
                    <div class="link-to-post">
                    <a href="' . get_the_permalink($post_id) . '">Читать далее</a>
                    </div>
            </article>
            ';

            endwhile;
                echo '<div class="pagination">';
                    previous_posts_link('&laquo; Следующие');
                    next_posts_link('Предыдущие &raquo;');
                echo '</div>';

            $wp_query = null;
            $wp_query = $temp;
            ?>

        </div>
        <section id="main-form" class="clearfix">
            <div class="container">
                <div class="title-section ustom-titile">Задайте вопрос</div>

                <?php echo do_shortcode('[contact-form-7 id="41" title="задать вопрос"  html_class="form-main"]'); ?>
            </div>
            <img class="main-form-img" src="<?php echo get_theme_file_uri('/assets/images/bg-form.png'); ?>"/>
        </section>
    </div><!-- .wrap -->

<?php get_footer();
