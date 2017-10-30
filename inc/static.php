<?php

if (!defined('ABSPATH'))
    die('Direct access forbidden.');

if (!is_admin()) {
    //wp_enqueue_style('xs-main', GETLEADS_CSS . '/xs_main.css', null, GETLEADS_VERSION);
    //wp_enqueue_style('blog', GETLEADS_CSS . '/blog.css', null, GETLEADS_VERSION);
    //wp_enqueue_style('animate', GETLEADS_CSS . '/plugins/animate.css', null, GETLEADS_VERSION);
    wp_enqueue_style('bootstrap.min', GETLEADS_CSS . '/plugins/bootstrap.min.css', null, GETLEADS_VERSION);
    //wp_enqueue_style('bootstrap-map', GETLEADS_CSS . '/plugins/bootstrap.min.css.map', null, GETLEADS_VERSION);
    wp_enqueue_style('loaders', GETLEADS_CSS . '/plugins/loaders.css', null, GETLEADS_VERSION);
    wp_enqueue_style('magnific-popup', GETLEADS_CSS . '/plugins/magnific-popup.css', null, GETLEADS_VERSION);
    wp_enqueue_style('owl.carousel', GETLEADS_CSS . '/plugins/owl.carousel.css', null, GETLEADS_VERSION);    
    //wp_enqueue_style('xs-swiper', GETLEADS_CSS . '/swiper.min.css', null, GETLEADS_VERSION);

    //wp_enqueue_style('pickadate-default', GETLEADS_CSS . '/plugins/pickadate-default.css', null, GETLEADS_VERSION);
    //wp_enqueue_style('pickadate-default2', GETLEADS_CSS . '/plugins/pickadate-default.date.css', null, GETLEADS_VERSION);
    wp_enqueue_style('iconfont', GETLEADS_CSS . '/icon-font.css', null, GETLEADS_VERSION);
    wp_enqueue_style('st', GETLEADS_CSS . '/style.css', null, GETLEADS_VERSION);
    wp_enqueue_style('responsive', GETLEADS_CSS . '/responsive.css', null, GETLEADS_VERSION);
}


if (!is_admin()) {

    wp_enqueue_script('jquery');

    wp_enqueue_script('bootstrap.min', GETLEADS_SCRIPTS . '/plugins/bootstrap.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('box-slider-all.jquery.min', GETLEADS_SCRIPTS . '/plugins/box-slider-all.jquery.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('jquery.countTo', GETLEADS_SCRIPTS . '/plugins/jquery.countTo.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('jquery.easing', GETLEADS_SCRIPTS . '/plugins/jquery.easing.1.3.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('jquery.formchimp', GETLEADS_SCRIPTS . '/plugins/jquery.formchimp.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('jquery.jCounter', GETLEADS_SCRIPTS . '/plugins/jquery.jCounter-0.1.4.js', array('jquery'), GETLEADS_VERSION, true);
    wp_enqueue_script('jquery.magnific-popup', GETLEADS_SCRIPTS . '/plugins/jquery.magnific-popup.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('jquery.vide.min', GETLEADS_SCRIPTS . '/plugins/jquery.vide.min.js', array('jquery'), GETLEADS_VERSION, true);
    wp_enqueue_script('owl.carousel', GETLEADS_SCRIPTS . '/plugins/owl.carousel.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('picker', GETLEADS_SCRIPTS . '/plugins/picker.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('picker.date', GETLEADS_SCRIPTS . '/plugins/picker.date.js', array('jquery'), GETLEADS_VERSION, true);
    wp_enqueue_script('xs-form-helpers.js', GETLEADS_SCRIPTS . '/plugins/fw-form-helpers.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('spectragram', GETLEADS_SCRIPTS . '/plugins/spectragram.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('twitterFetcher', GETLEADS_SCRIPTS . '/plugins/twitterFetcher_min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('swipermin', GETLEADS_SCRIPTS . '/plugins/swiper.min.js', array('jquery'), GETLEADS_VERSION, true);
    //wp_enqueue_script('wow', GETLEADS_SCRIPTS . '/plugins/wow.min.js', array('jquery'), GETLEADS_VERSION, true);

    wp_enqueue_script('custom.js', GETLEADS_SCRIPTS . '/custom.js', array('jquery'), GETLEADS_VERSION, true);

    // Load Wordpress Comment js
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


