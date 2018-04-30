<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap padding-bottom-40 usually-page">
        <div class="container">
            <?php


            while (have_posts()) : the_post();

                the_content();

            endwhile;
            ?>

        </div>
    </div><!-- .wrap -->
<?php get_footer();
