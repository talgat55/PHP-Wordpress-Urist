<?php
/**
 * The template for displaying the footer
 *
 */

?>

</div><!-- #content -->

<footer class="site-footer
<?php
if ( is_404() ) {
    echo ' not-found-page-footer';
}
?>
" >
    <div class="container">
        <div class="wrap-footer clearfix">
            <div class="footer-block footer-logo clearfix">
                <a href="<?php echo home_url(); ?>">
                    <div class="footer-logo-wrap">
                        <img src="<?php echo get_theme_file_uri('/assets/images/logo-22.png'); ?>"/>
                        <div class="logo-textblock">
                            <div class="logo-title-top">АДВОКАТ</div>
                            <div class="logo-title">ТЮТЮННИК<br/>ЛАРИСА</div>

                        </div>
                    </div>
                </a>
            </div>
            <div class="footer-block">
                <p>
                    АДВОКАТ ТЮТЮННИК ЛАРИСА ПЕТРОВНА, регистрационный номер No90/724 в Реестре адвокатов Республики
                    Крым, номер удостоверения No 1363, вы- дано ГУ Минюста России 15 января 2016г.,Российская Федерация,
                    Республика Крым, 295011, г. Симферополь, ул. Самокиша, 6-а
                </p>
            </div>


        </div><!-- .wrap -->

    </div>
    <div class="footer-bottom clearfix">
        <div class="container">
            <a target="_blank" title="Перейти на сайт разработчика" href="http://asmart-group.ru/">Сайт разработан
                IT-Company <span>ASMART</span></a>
        </div>

    </div>

</footer>
</div>
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
