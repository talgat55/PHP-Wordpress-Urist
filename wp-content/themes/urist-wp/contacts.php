<?php
/**
 *  Template Name: Контакты
 */
get_header(); ?>

    <section id="about" class="contact-page">
        <div class="container clearfix">
            <div class="clearfix">
                <div class="title-section">Контакты</div>
                <div class="col-md-6 contact-info">
                    <div class="block-info-img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/phone-contact.png'); ?>"/>
                    </div>
                    <div class="block-info">
                        <h3>ТЕЛЕФОН:</h3>
                        <a class="phone-link" href="tel:+79788424826">+7(9788)42-48-26</a>
                    </div>
                </div>
                <div class="col-md-6 contact-info">
                    <div class="block-info-img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/email-contact.png'); ?>"/>
                    </div>
                    <div class="block-info">
                        <h3>E-MAIL:</h3>
                        <a href="mailto:larisatyutyunnik2007@rambler.ru">larisatyutyunnik2007@rambler.ru</a>
                    </div>
                </div>
            </div>


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
