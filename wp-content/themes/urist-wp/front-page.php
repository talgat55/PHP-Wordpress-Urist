<?php
/**
 * The front page template file
 */

get_header(); ?>
    <section id="slider">
        <div class="text-slider">
            <div class="container">
                <div class="pre-title">Оставьте заявку на</div>
                <h1 class="title-slider">ЮРИДИЧЕСКИЕ УСЛУГИ</h1>


                <?php echo do_shortcode('[contact-form-7 id="9" title="Заявка" html_class="form-slider"]'); ?>

            </div>
        </div>
                        <div class="buttons-slide">
                    <div class="button-mouse">
                    <span class="animate-mouse-scroll">

                    </span>

                    </div>
                    <p>листай вниз</p>
                </div>
    </section>
    <section id="about">
        <div class="container clearfix">
            <div class="clearfix">
                <div class="col-md-6" >
                    <img class="bg-women"  src="<?php echo get_theme_file_uri('/assets/images/women-2.png'); ?>"/>
                </div>
                <div class="col-md-6 relative">
                    <div class="overlay-about"></div>
                    <p>Адвокат</p>
                    <h2>Тютюнник Лариса<br/>
                        Петровна</h2>
                    <p>Юридическая помощь по гражданским и уголовным делам, представление интересов в суде</p>
                    <ul>
                        <li>
                            <img src="<?php echo get_theme_file_uri('/assets/images/phone-2.png'); ?>"/> <a
                                    href="tel:+79788424826">+7 (9788) 42-48-26</a>
                        </li>
                        <li>
                            <img src="<?php echo get_theme_file_uri('/assets/images/mail-2.png'); ?>"/> <a
                                    href="mailto:larisatyutyunnik2007@rambler.ru">larisatyutyunnik2007@rambler.ru</a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="bottom-about">
                <img class="quote-home" src="<?php echo get_theme_file_uri('/assets/images/quote-2.png'); ?>"/>
                <p>
                    АДВОКАТ ТЮТЮННИК ЛАРИСА ПЕТРОВНА, регистрационный номер No90/724 в Реестре адвокатов Республики
                    Крым, номер удостоверения No 1363, вы- дано ГУ Минюста России 15 января 2016г.,Российская Федерация,
                    Республика Крым, 295011, г. Симферополь, ул. Самокиша, 6-а
                </p>
            </div>


        </div>
    </section>
    <section id="service">
        <div class="container clearfix">
            <div class="col-md-3">
                <div class="overlay-service"></div>
                <img src="<?php echo get_theme_file_uri('/assets/images/why-1.png'); ?>"/>
                <p>Высокая квалификация</p>
            </div>
            <div class="col-md-3">
                <div class="overlay-service"></div>
                <img src="<?php echo get_theme_file_uri('/assets/images/why-2.png'); ?>"/>
                <p>Положительный опыт<br/>
                    введения судебных дел</p>
            </div>
            <div class="col-md-3">
                <div class="overlay-service"></div>
                <img src="<?php echo get_theme_file_uri('/assets/images/why-3.png'); ?>"/>
                <p>Индивидуальный подход<br/>
                    к каждому клиенту</p>
            </div>
            <div class="col-md-3">
                <div class="overlay-service"></div>
                <img src="<?php echo get_theme_file_uri('/assets/images/why-4.png'); ?>"/>
                <p>Разумные цены на<br/>
                    юридические услуги</p>
            </div>


        </div>
    </section>
    <section id="news">
        <div class="container">
            <div class="title-section">Статьи</div>
            <div class="clearfix row-news">
                <?php
                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=3&post_type=post');
                while ($wp_query->have_posts()):
                    $wp_query->the_post();
                    $post_id = $wp_query->post->ID;

                    echo '
                        <div class="col-md-4">
                            <div class="news-block">
                                <h3>'.get_the_title($post_id).'</h3>
                                <p>
                                    '.my_string_limit_words(get_the_content($post_id), 15).'
                                </p>
        
                                <a href="' . get_the_permalink($post_id) . '">Читать больше</a>
                            </div>
                        </div>
             
            ';

                endwhile;

                ?>



            </div>
            <a href="<?php  echo home_url('/blog'); ?>" class="link-post-more">
                Читать еще
            </a>

        </div>
    </section>


    <section id="main-form" class="clearfix">
        <div class="container">
            <div class="title-section ustom-titile">Задайте вопрос</div>

            <?php echo do_shortcode('[contact-form-7 id="41" title="задать вопрос"  html_class="form-main"]'); ?>
        </div>
        <img class="main-form-img" src="<?php echo get_theme_file_uri('/assets/images/bg-form.png'); ?>"/>
    </section>

<?php get_footer();
