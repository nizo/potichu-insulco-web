<?php

function getleads_action_xs_hook_css() {
    if (defined('FW')) {

        $main_color = fw_get_db_settings_option('main_color');


        $hex = (getleads_xsrgb($main_color));
        $color_hex = $hex["r"] . ", " . $hex["g"] . ", " . $hex["b"];


        /* Global Fonts Settings */
        $global_title = fw_get_db_settings_option('heading_title');
        if ($global_title != '') {
            $global_title_family = $global_title['family'];
            $global_title_style = $global_title['style'];

            if ($global_title_style === 'regular') {
                $global_title_style = '400';
            }
            if ($global_title_style == 'italic') {
                $global_title_style = '400italic';
            }
            $global_title_font_style = ( strpos($global_title_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_title_font_weight = 'font-weight: ' . intval($global_title_style) . ';';
        }


        $global_subtitle = fw_get_db_settings_option('heading_subtitle');
        //fw_print($global);
        if ($global_subtitle != '') {
            $global_subtitle_family = $global_subtitle['family'];
            $global_subtitle_style = $global_subtitle['style'];

            if ($global_subtitle_style === 'regular') {
                $global_subtitle_style = '400';
            }
            if ($global_subtitle_style == 'italic') {
                $global_subtitle_style = '400italic';
            }
            $global_subtitle_font_style = ( strpos($global_subtitle_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_subtitle_font_weight = 'font-weight: ' . intval($global_subtitle_style) . ';';
        }

        $global_body_font = fw_get_db_settings_option('body_font');

        if ($global_body_font != '') {
            $global_body_font_family = $global_body_font['family'];
            $global_body_font_style = $global_body_font['style'];

            if ($global_body_font_style === 'regular') {
                $global_body_font_style = '400';
            }
            if ($global_body_font_style == 'italic') {
                $global_body_font_style = '400italic';
            }
            $global_body_font_font_style = ( strpos($global_body_font_style, 'italic') ) ? 'font-style: italic;' : '';
            $global_body_font_font_weight = 'font-weight: ' . intval($global_body_font_style) . ';';
        }



        /* Blog Hero Settings */
        $hero_heading = fw_get_db_settings_option('general_posts_header');
        $hero_overlay = $hero_heading['header_overlay_color'];
        $blog_hero = $hero_heading['header_image'] != '' ? $hero_heading['header_image']['url'] : '';




        /* Page Hero Settings */
        $page_hero_heading = fw_get_db_settings_option('general_page_header');
        $page_hero_overlay = $page_hero_heading['header_overlay_color'];
        $page_hero = $page_hero_heading['header_image'] != '' ? $page_hero_heading['header_image']['url'] : '';

        //custom css
        $custom_css = fw_get_db_settings_option('custom_css');

        $bg_color = fw_get_db_settings_option('bg_color');
        $txt_color = fw_get_db_settings_option('text_color');
//        fw_print($bg_color);
        $output = ""
                . ".btn-border.btn-green,a.btn-border.btn-green, .pricing-3pf .green .details h5, .pricing-3pf .green .details p, .pricing-st .price, .pricing-2p .green .price, .pricing-2p .green .details li i, .btn-border.btn-green, .entry-header h1 a, .entry-header h1, .entry-meta i, .panel-heading a, .navbar.bg-transparent .navbar-nav>li>a:hover, .navbar.bg-color .navbar-nav>li>a:hover, .navbar.bg-transparent.top-nav-collapse .navbar-nav>li>a:hover, .navbar.bg-transparent.top-nav-collapse .navbar-nav>li.active>a,.navbar-nav>li.active a, .navbar-nav>li>a:hover{color: $main_color;}"
                . ".bg-color,.success, input.toggle-round-flat:checked + label, input.toggle-round-flat:checked + label:before, .widget .w-tags a:hover, .bg-green, .cta-header .active .btn-nav.btn-green, .btn-green,a.inverse.btn-green, .inverse a.btn-green, .features-tab .tab-title.current, .top {background-color: $main_color;}"
                . ".popup-box .popup-button i, .blog .post-info .date, .swiper-pagination-bullet-active, .search-forms .search-submit, .widget_search .search-form input[type=\"submit\"], .widget_search input[type=\"submit\"] {background: $main_color;}"
                . ".btn-green:hover, .btn-nav.btn-green:hover, .btn-green:focus, .btn-nav.btn-green:focus {background-color: rgba($color_hex, 0.9);}"
                . ".pricing-3pf .green .details hr, .pricing-3po .green .info, .pricing-st .info:hover {border-color: $main_color;}"
                . ".ticket-prices .item-price.active, .ticket-prices .item-price:hover, .widget .w-tags a:hover {border: 3px solid $main_color;}"
                . ".fw-heading h1, .fw-heading h2, .fw-heading h3, .fw-heading h4, .fw-heading h5, h1, h2, h3, h4, h5, h6{font-family: '$global_title_family'; $global_title_font_style $global_title_font_weight}"
                . ".fw-special-subtitle-half, .fw-special-subtitle {font-family: '$global_subtitle_family' ! important; $global_subtitle_font_style $global_subtitle_font_weight}"
                . "body{font-family: '$global_body_font_family'; $global_body_font_font_style $global_body_font_font_weight}"
                . ".blog-hero-bg {background: url($blog_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".blog-hero {background: $hero_overlay;width: 100%;} .colorsbg, .separator, .separator-left, .separator, .btn-green.btnxs:hover, .team-separator, .timeline .start  {background: $main_color;}"
                . ".page-hero-bg {background: url($page_hero) no-repeat center center fixed;-moz-background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;-o-background-size:cover;background-size:cover;width:100%;overflow: hidden;}"
                . ".page-hero {background: $hero_overlay;width: 100%;} .page-hero {background: $page_hero_overlay;width: 100%;} .colorsbg, .separator, .separator-left, .separator, .btn-green.btnxs:hover, .team-separator, .timeline .start  {background: $main_color;}"
                . ".form-control:focus {border-color: $main_color;}.separator_wrap::after,.separator_wrap::before, .separator_wrap-left::after{background-color: $main_color;}.separator2 {border: 2px solid $main_color;}#fancy-inputs label.textarea span:before { background-color: $main_color;}.form-control:focus {-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px $main_color;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px $main_color;}.mega-menu-activated .mega-menu-row {border-top: 1px solid $main_color;}"
                . ".btn-green.active.focus,.btn-green.active:focus,.btn-green.active:hover,.btn-green:active.focus,.btn-green:active:focus,.btn-green:active:hover,.open > .dropdown-toggle.btn-green.focus,.open > .dropdown-toggle.btn-green:focus,.open > .dropdown-toggle {background-color: $main_color;border-color: $main_color;}"
                . ".btn-green {background-color: $main_color;border: 2px solid $main_color;}.btn-green:focus {background-color: $main_color;}.btn-green:hover {border-color: $main_color;}.navbar-default .btn-default:hover {border: 1px solid $main_color;}.try-registration-form input {border-left: 3px solid $main_color;}.try-registration-form textarea {border-left: 3px solid $main_color;}.try-registration-form input:focus {border: 1px solid $main_color;border-left: 3px solid $main_color;}.testimonialslide .carousel-indicators .active {background: $main_color !important;border-color: $main_color !important;}"
                . ".getleads-footer{background:$bg_color;Color:$txt_color}"
                . "$custom_css";
        wp_enqueue_style(
		'custom-style',
		GETLEADS_CSS . '/custom_script.css'
	);
        wp_add_inline_style('custom-style', $output);
    }
}



add_action('wp_enqueue_scripts', 'getleads_action_xs_hook_css', 90);



add_action('wp_footer', 'getleads_action_javascript'); // Write our JS below here

function getleads_action_javascript() {
    ?>
    <script type="text/javascript" >
        var adminAjax = "<?php echo admin_url("admin-ajax.php"); ?>";
        var homeUrl = "<?php echo get_template_directory_uri(); ?>";
    </script> <?php
}


