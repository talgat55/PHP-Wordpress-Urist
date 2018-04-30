<?php

add_theme_support('post-thumbnails');


/*
* Enrique Script
*/

function th_scripts()
{
    // Theme stylesheet.
    wp_enqueue_style('th-style', get_theme_file_uri('style.css'), array(), '');
    wp_enqueue_style('style', get_theme_file_uri('/assets/css/style.css'), array(), '3');
    // wp_enqueue_style('style', get_theme_file_uri('/assets/css/minify.css'), array(), '');
    // wp_enqueue_style('lightbox.min', get_theme_file_uri('/assets/css/lightbox.min.css'), array(), '');
    wp_enqueue_script('default', get_theme_file_uri('/assets/js/default.js'), array(), '2');
    wp_enqueue_script('jquery.inputmask', get_theme_file_uri('/assets/js/jquery.inputmask.js'), array(), '2');
    wp_enqueue_script('social','https://yastatic.net/share2/share.js', array(), '2');



    /*    wp_enqueue_script('jquery', get_theme_file_uri('/assets/js/jquery-3.2.1.min.js'), array(), '1');

        wp_enqueue_script('compressed', get_theme_file_uri('/assets/js/compressed.js'), array(), '2');
     wp_enqueue_script('lightbox.min', get_theme_file_uri('/assets/js/lightbox.min.js'), array(), '2');
      wp_enqueue_script('slick.min', get_theme_file_uri('/assets/js/slick.min.js'), array(), '2');
      wp_enqueue_script('tabs', get_theme_file_uri('/assets/js/tabs.js'), array(), '2');
      wp_enqueue_script('appear', get_theme_file_uri('/assets/js/appear.js'), array(), '2');
      wp_enqueue_script('lazyload.min', get_theme_file_uri('/assets/js/lazyload.min.js'), array(), '2');


      wp_enqueue_script('jquery.equalheightresponsive.min', get_theme_file_uri('/assets/js/jquery.equalheightresponsive.min.js'), array(), '2');
      wp_enqueue_script('jquery.ui-slider', get_theme_file_uri('/assets/js/jquery-ui.min.js'), array(), '2');
      wp_enqueue_script('ajax-confirm', get_theme_file_uri('/assets/js/ajax-confirm.js'), array(), '2');
      wp_enqueue_script('jquery.ui.touch-punch.min', get_theme_file_uri('/assets/js/jquery.ui.touch-punch.min.js'), array(), '2');
 */


}

add_action('wp_enqueue_scripts', 'th_scripts');


/*
* Register nav menu
*/
if (function_exists('register_nav_menus')) {

    $menu_arr = array(
        'top_menu' => 'Топ Меню'
    );


    register_nav_menus($menu_arr);
}
 

/*
* Custom excerpt
*/
function my_string_limit_words($string, $word_limit)
{
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit)
        array_pop($words);
    //	return implode(' ', $words).'... ';
    return implode(' ', $words) . '...';
}

/*
 *  Pagination
 */
function kama_link_pages()
{

    ## Настройки ================
    $text_num_page = ''; // Текст для количества страниц. {current} заменится текущей, а {last} последней. Пример: 'Страница {current} из {last}' = Страница 4 из 60
    $num_pages = 1; // сколько ссылок показывать
    $stepLink = 1; // после навигации ссылки с определенным шагом (значение = число (какой шаг) или '', если не нужно показывать). Пример: 1,2,3...10,20,30
    $dotright_text = '…'; // промежуточный текст "до".
    $dotright_text2 = '…'; // промежуточный текст "после".
    $backtext = '« назад'; // текст "перейти на предыдущую страницу". Ставим '', если эта ссылка не нужна.
    $nexttext = 'вперед »'; // текст "перейти на следующую страницу". Ставим '', если эта ссылка не нужна.
    $first_page_text = '« к началу'; // текст "к первой странице" или ставим '', если вместо текста нужно показать номер страницы.
    $last_page_text = 'в конец »'; // текст "к последней странице" или пишем '', если вместо текста нужно показать номер страницы.
    ## / Настроек ================

    global $page, $numpages;

    $paged = (int)$page;
    $max_page = $numpages;

      if( $max_page <= 1 )
        return false; // если навигация не нужна

    if (empty($paged) || $paged == 0) $paged = 1;

    $pages_to_show = intval($num_pages);
    $pages_to_show_minus_1 = $pages_to_show - 1;

    $half_page_start = floor($pages_to_show_minus_1 / 2); // сколько ссылок до текущей страницы
    $half_page_end = ceil($pages_to_show_minus_1 / 2); // сколько ссылок после текущей страницы

    $start_page = $paged - $half_page_start; // первая страница
    $end_page = $paged + $half_page_end; // последняя страница (условно)

    if ($start_page <= 0)
        $start_page = 1;

    if (($end_page - $start_page) != $pages_to_show_minus_1)
        $end_page = $start_page + $pages_to_show_minus_1;

    if ($end_page > $max_page) {
        $start_page = $max_page - $pages_to_show_minus_1;
        $end_page = (int)$max_page;
    }

    if ($start_page <= 0) $start_page = 1;

    // вывод
    $out = '<div class="wp-pagenavi">' . "\n";

    if ($text_num_page) {
        $text_num_page = preg_replace('!{current}|{last}!', '%s', $text_num_page);
        $out .= sprintf("<span class='pages'>$text_num_page</span>", $paged, $max_page);
    }

    if ($backtext && $paged != 1)
        $out .= _wp_link_page($paged - 1) . $backtext . '</a>';

    if ($start_page >= 2 && $pages_to_show < $max_page) {
        $out .= _wp_link_page(1) . ($first_page_text ?: 1) . '</a>';
        if ($dotright_text && $start_page != 2)
            $out .= '<span class="extend">' . $dotright_text . '</span>';
    }

    for ($i = $start_page; $i <= $end_page; $i++) {
        if ($i == $paged)
            $out .= '<span class="current">' . $i . '</span>';
        else
            $out .= _wp_link_page($i) . $i . '</a>';

    }

    //ссылки с шагом
    if ($stepLink && $end_page < $max_page) {
        for ($i = $end_page + 1; $i <= $max_page; $i++) {
            if ($i % $stepLink == 0 && $i !== $num_pages) {
                if (++$dd == 1)
                    $out .= '<span class="extend">' . $dotright_text2 . '</span>';
                $out .= _wp_link_page($i) . $i . '</a>';
            }
        }
    }

    if ($end_page < $max_page) {
        if ($dotright_text && $end_page != ($max_page - 1))
            $out .= '<span class="extend">' . $dotright_text2 . '</span>';
        $out .= _wp_link_page($max_page) . ($last_page_text ?: $max_page) . '</a>';
    }

    if ($nexttext && $paged != $end_page)
        $out .= _wp_link_page($paged + 1) . $nexttext . '</a>';

    $out .= '</div>';

    return $out;
}


/*
* Visual Composer Options
*/


function vc_component_service()
{
    vc_map(array(
        "name" => __("Услуги", "js_composer"),
        "base" => "service",
        "params" => array(
            array(
                "type" => "attach_image",
                "heading" => "Изображение",
                "param_name" => "bg_image"
            ),
            array(
                "type" => "textarea_html",
                "heading" => "Текст",
                "param_name" => "content"
            )


        )
    ));
}

add_action('vc_before_init', 'vc_component_service');

/**
 *  Template
 */
add_shortcode('service', 'vc_service_function');
function vc_service_function($atts,$content)
{

    extract( shortcode_atts( array(
        'bg_image' => ''
    ), $atts ) );


    $img_url = wp_get_attachment_url($bg_image);


    $html = ' 
        	   <div class="service-block">
        	    <div class="service-img">
        	        <img src="' .$img_url. '"/> 
                </div>
                <div class="service-text-block">
                    ' . $content . '
                </div>
        	   </div>
        	
        	';

    return $html;

}
