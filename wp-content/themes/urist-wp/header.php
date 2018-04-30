<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/assets/images/favicon.png') ?>"
          type="image/x-icon"/>
    <title><?php 
    if(is_home()){
        bloginfo('name'); 
    }else{
         wp_title(''); 
    }
    ?></title>
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="Y27dbtn2oM0w-0AfG7RJkkr-ccRn4jpYwHEtTBb-FL4" />
    <meta name="yandex-verification" content="8b1d4e81fa903c6e" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118068239-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118068239-1');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48629660 = new Ya.Metrika({
                    id:48629660,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48629660" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->    
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="site-header  <?php  if (is_home()){ echo ' home-header';  } ?>">
        <div class="container header-walp">
            <div class="logo">
                <a href="<?php echo home_url(); ?>">

                    <img src="<?php echo get_theme_file_uri('/assets/images/logo-22.png'); ?>"/>
                    <div class="logo-textblock">
                        <div class="logo-title-top">АДВОКАТ</div>
                        <div class="logo-title">ТЮТЮННИК<br/>ЛАРИСА</div>

                    </div>
                </a>
            </div>

            <?php if (has_nav_menu('top_menu')) : ?>
                <div class="navigation-top">
                    <?php wp_nav_menu('menu_id=menu-main&menu_class=menu-main-container clearfix&theme_location=top_menu'); ?>
                </div>
            <?php endif; ?>
            <div id="mobile-bar">
                <a class="hamburger hamburger--slider">
							 	  	<span class="hamburger-box">
							 	    	<span class="hamburger-inner"></span>
							 	  	</span>
                </a>
            </div>
        </div>


    </header>


    <div class="site-content-contain">
        <div id="content" class="site-content">
