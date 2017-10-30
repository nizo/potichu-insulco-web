<?php
/*
 * This is for nav style 
 *  */



$menus = getleads_get_option('menus');

if (defined('FW')) {
    $menu_style = $menus['menu_style'];

    $menu_item1 = $menus['menu-1'];
    $menu_item2 = $menus['menu-2'];
    $menu_item3 = $menus['menu-3'];

    $logo = fw_get_db_settings_option('menu_logo');
    $menu_bg = fw_get_db_settings_option('menu_bg');
    $menu_fixed = fw_get_db_settings_option('menu_fixed');

    if ($menu_style == 'menu-1' || $menu_style == 'menu-3') {
        $menu_class = $menu_fixed . ' ' . $menu_bg;
    } else if ($menu_style == 'menu-2') {
        $menu_class = 'nav-2 bg-edit';
    }
} else {
    $menu_bg = '';
    $menu_style = 'menu-1';
    $menu_class = 'nav-2 bg-edit';
}
?>




<header>
    <?php if ($menu_style == 'menu-2'): ?> 
        <section class="top-bar">
            <div class="container p-l-0">
                <!-- Working Hours -->
                <div class="schedule text-edit">
                    <i class="icon icon-clock2"></i> 
                    <span><?php _e('Schedule: ', 'getleads'); ?></span> 
                    <?php echo esc_attr($menu_item2['schedule']); ?>
                </div>
                <!-- Contact Info -->
                <div class="contact-info text-edit">
                    <?php foreach ($menu_item2['information'] as $value): ?>
                        <?php if ($value) { ?>
                            <div class="email m-r-lg"><i class="<?php echo esc_attr($value['icon']); ?>"></i><?php echo esc_attr($value['info']); ?></div>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>

            </div><!-- /End Container -->
        </section>
    <?php endif; ?>
    <nav class="navbar <?php echo esc_attr($menu_class); ?> <?php
    if (function_exists('_filter_fw_ext_mega_menu_wp_nav_menu_args')) {
        echo 'mega-menu-activated';
    }
    ?>" id="main-navbar" role="navigation">
        <div class="container">
            <?php if ($menu_style == 'menu-1' || $menu_style == 'menu-2'): ?> 
                <div class="navbar-header">
                    <!-- Menu Button for Mobile Devices -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php echo home_url('/') ?>" class="navbar-brand logo-black smooth-scroll"><img src="<?php echo getleads_get_image('menu_logo', GETLEADS_IMAGES . '/logo-black.png') ?>" alt="logo"></a>
                    <?php if ($menu_bg == 'bg-transparent') { ?>
                        <a href="<?php echo home_url('/') ?>" class="navbar-brand logo-white smooth-scroll"><img src="<?php echo getleads_get_image('transparent_logo') ?>" alt="logo"></a>
                    <?php } ?>
                </div><!-- /End Navbar Header -->

                <div id="navbar-collapse" class="collapse navbar-collapse 
                     navbar-<?php
                     if (defined("FW")) {
                         echo fw_get_db_settings_option('menu_postion');
                     } else {
                         echo 'right';
                     }
                     ?>">

                    <?php
                    wp_nav_menu(array(
                        'menu' => 'primary',
                        'theme_location' => 'primary',
//                        'depth' => 2,
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'getleads_navwalker::fallback',
                        'walker' => new getleads_navwalker())
                    );
                    ?>
                    <?php if ($menu_style == 'menu-1'): ?> 
                        <ul class="nav navbar-nav">
                            <?php
                            if (defined('FW')) {
                                $menu_btn = $menu_item1['menu_button'];
                                foreach ($menu_btn as $btn):
                                    ?>
                                    <?php if ($btn) { ?>
                                        <li><a href="<?php echo esc_url($btn['btn_link']); ?>" class="btn-nav nav-btn btn-<?php getleads_theme_button_class($btn['btn_style']); ?>"><?php echo wp_kses_post($btn['btn_label']); ?></a></li>
                                    <?php } ?>
                                    <?php
                                endforeach;
                            }
                            ?>
                        </ul>
                    <?php endif; ?>

                </div><!-- /End Navbar Collapse -->
            <?php endif; ?>
            <?php if ($menu_style == 'menu-3'): ?> 

                <!-- Call Us -->
                <div class="col-md-4 hidden-sm hidden-xs text-left nav-3cols nav-callus p-l-0">
                    <?php _e('Call us at ', 'getleads'); ?><span class="phone-number"><?php echo esc_attr($menu_item3['info']); ?></span>
                </div>
                <!-- Logo -->
                <div class="col-md-4 col-xs-6 nav-3cols-logo">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php bloginfo('name'); ?>">
                </div>
                <!-- Social Buttons -->
                <div class="col-md-4 col-xs-6 nav-3cols text-right">
                    <div class="social-btn">
                        <span class="text-edit m-r"><?php _e('Stay Connected ', 'getleads'); ?></span>
                        <?php foreach ($menu_item3['socials'] as $social): ?>
                            <?php if ($social) { ?>
                                <a href="<?php echo esc_attr($social['link']); ?>" style="background:<?php echo esc_attr($social['color']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                                <?php } ?>
                            <?php endforeach; ?>
                    </div>
                </div>

            <?php endif; ?>
        </div><!-- /End Container -->
    </nav><!-- /End Navbar -->
</header>

