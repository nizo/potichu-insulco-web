<?php
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */
/**
 * 1.0 - Define constants. Current Version number & Theme Name.
 */
define('GETLEADS_THEME', 'Getleads');
define('GETLEADS_VERSION', '1.0.18');
define('GETLEADS_THEMEROOT', get_template_directory_uri());
define('GETLEADS_IMAGES', GETLEADS_THEMEROOT . '/assets/images');
define('GETLEADS_CSS', GETLEADS_THEMEROOT . '/assets/css');
define('GETLEADS_SCRIPTS', GETLEADS_THEMEROOT . '/assets/js');
define('GETLEADS_PHPSCRIPTS', GETLEADS_THEMEROOT . '/assets/php');






/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------
 */
if (!isset($content_width)) {
    $content_width = 800;
}






/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if (!function_exists('getleads_setup')) {

    function getleads_setup() {
        /**
         * Make the theme available for translation.
         */
        $lang_dir = GETLEADS_THEMEROOT . '/languages';
        load_theme_textdomain('getleads', $lang_dir);

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array()
        );

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');


        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300, 300, array('center', 'center')); // Hard crop center center

        if (function_exists('add_image_size')) {
            add_image_size('getleads_recent_post', 350, 235, array('center', 'center'));
            add_image_size('getleads-blog-thumb', 770, 335, TRUE);
        }
       

        /**
         * Register nav menus.
         */
        register_nav_menus(
                array(
                    'primary' => esc_html__('Main Menu', 'getleads')
                )
        );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));



    }

    add_action('after_setup_theme', 'getleads_setup');
}





/**
 * ----------------------------------------------------------------------------------------
 * 7.0 - Register the widget areas.
 * ----------------------------------------------------------------------------------------
 */


/*
 * Theme Inc
 */
include_once get_template_directory() .'/inc/init.php';


function enque_insulco_style() {
	if( WP_DEBUG === true ) { 
		$version = '1';
	} else {
		$version = microtime(true);
		die();
	}

	wp_register_style( 'insulco-style', get_stylesheet_directory_uri() . '/style.css', array(), time());	
	wp_enqueue_style( 'insulco-style' );
}
	
add_action( 'wp_enqueue_scripts', 'enque_insulco_style',11);


function insulcoEfficiency_handler( $atts ){
	$a = shortcode_atts( array(
        'lv' => 0,
		'subtitle' => '',
		'bg' => ''
    ), $atts );

	return '<div class="efficiency-box" style="background-color: ' . $a['bg']. '"><span class="title">Účinnosť až</span><br/><span class="value">Δ Lw ' . $a['lv']. ' dB</span><div class="subtitle">' . $a['subtitle'] . '</div></div>';    
}
add_shortcode( 'insulcoEfficiency', 'insulcoEfficiency_handler' );

function fw_ext_shortodes_table_edit_max_cols( $max ) {
    $max_cols = 8;
    return $max_cols;
}

add_filter( 'fw_ext_shortcodes_table_max_columns', 'fw_ext_shortodes_table_edit_max_cols'  );