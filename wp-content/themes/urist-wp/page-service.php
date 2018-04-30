<?php
/**
 * Template Name: Услуги
 */

get_header(); ?>

    <div class="wrap">
        <div class="container">
            <div class="title-section margin-bottom-30">Услуги и цены</div>
             <?php
             while ( have_posts() ) : the_post();

                echo do_shortcode(get_the_content());
            endwhile;


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
