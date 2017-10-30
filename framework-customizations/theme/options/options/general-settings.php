<?php

if (!defined('FW')) {
    die('Forbidden');
}

$colors = array('color_1' => '#96243a', 'color_2' => '#17284d', 'color_3' => '#71c7e0', 'color_4' => '#ffffff', 'color_5' => '#2b303d');
$admin_url = admin_url();
$color_settings = fw_get_db_settings_option('color_settings', $colors);
$template_directory = get_template_directory_uri();

$options = array(
    'general' => array(
        'title' => esc_html__('General', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'general-box' => array(
                'title' => esc_html__('General Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'menu_logo' => array(
                        'label' => esc_html__('Menu Logo', 'getleads'),
                        'desc' => esc_html__('Add your website menu logo', 'getleads'),
                        'type' => 'upload',
                    ),
                    'menu_logo' => array(
                        'label' => esc_html__('Menu Logo', 'getleads'),
                        'desc' => esc_html__('Add your website menu logo', 'getleads'),
                        'type' => 'upload',
                    ),
                    'transparent_logo' => array(
                        'label' => esc_html__('Transparent Logo', 'getleads'),
                        'desc' => esc_html__('Add your transparent logo if you are use menu transparent option', 'getleads'),
                        'type' => 'upload',
                        'value' => get_bloginfo('name')
                    ),
                    'favicon' => array(
                        'label' => esc_html__('Favicon', 'getleads'),
                        'desc' => esc_html__('Upload a favicon image', 'getleads'),
                        'type' => 'upload'
                    ),
                    'site_icon_192' => array(
                        'label' => esc_attr__( 'Large Favicon', 'getleads' ),
                        'desc' => esc_html__( 'Upload a Favicon for larger display (192x192 px)', 'getleads' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'site_icon_180' => array(
                        'label' => esc_attr__( 'Apple Touch Icon', 'getleads' ),
                        'desc' => esc_html__( 'Upload a Apple Touch Icon (180x180 px)', 'getleads' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    'site_icon_270' => array(
                        'label' => esc_html__( 'Microsoft Tile Image', 'getleads' ),
                        'desc' => esc_html__( 'Upload a Favicon for Microsoft devices (270x270 px)', 'getleads' ),
                        'type' => 'upload',
                        'images_only' => true,
                    ),
                    
                    'loader' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Pre Loader', 'getleads'),
                        'desc' => false,
                        'right-choice' => array(
                            'value' => 'yes',
                            'label' => esc_html__('Yes', 'getleads'),
                        ),
                        'left-choice' => array(
                            'value' => 'no',
                            'label' => esc_html__('No', 'getleads'),
                        ),
                    ),
                    'menus' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'menu_style' => array(
                                'label' => esc_html__('Menu Style', 'getleads'),
                                'type' => 'image-picker',
                                'value' => 'menu-1',
                                'desc' => esc_html__('Select Menu style.', 'getleads'),
                                'choices' => array(
                                    'menu-1' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu1.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu1.jpg'
                                        ),
                                    ),
                                    'menu-2' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu4.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu4.jpg'
                                        ),
                                    ),
                                    'menu-3' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu3.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/menu3.jpg'
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'choices' => array(
                            'menu-1' => array(
                                'menu_button' => array(
                                    'label' => esc_html__('Menu Button', 'getleads'),
                                    'type' => 'addable-popup',
                                    'limit' => '2',
                                    'desc' => esc_html__('Add Menu Call to action button', 'getleads'),
                                    'template' => 'Menu Button : {{- btn_label }}',
                                    'add-button-text' => 'Add Call to action button',
                                    'popup-options' => array(
                                        'btn_style' => array(
                                            'label' => esc_html__('Style', 'getleads'),
                                            'desc' => esc_html__('Choose button style', 'getleads'),
                                            'type' => 'image-picker',
                                            'value' => '',
                                            'choices' => array(
                                                'download' => array(
                                                    'small' => array(
                                                        'height' => 70,
                                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style4.jpg'
                                                    ),
                                                    'large' => array(
                                                        'height' => 208,
                                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style4.jpg'
                                                    ),
                                                ),
                                                'primary' => array(
                                                    'small' => array(
                                                        'height' => 70,
                                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                                    ),
                                                    'large' => array(
                                                        'height' => 208,
                                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                                    ),
                                                ),
                                            ),
                                        ),
                                        'btn_label' => array(
                                            'label' => esc_html__('Button Label', 'getleads'),
                                            'desc' => esc_html__('This is the text that appears on your button', 'getleads'),
                                            'type' => 'text',
                                            'value' => 'Get Action'
                                        ),
                                        'btn_link' => array(
                                            'label' => esc_html__('Button Link', 'getleads'),
                                            'desc' => esc_html__('Where should your button link to', 'getleads'),
                                            'type' => 'text',
                                            'value' => '#'
                                        ),
                                    ),
                                ),
                            ),
                            'menu-2' => array(
                                'schedule' => array(
                                    'label' => esc_html__('Schedule', 'getleads'),
                                    'type' => 'text',
                                    'desc' => esc_html__('Enter your schedule', 'getleads'),
                                    'value' => 'Mon-Sat 8:00-18:00, Sun 8:00-14:00',
                                ),
                                'information' => array(
                                    'type' => 'addable-popup',
                                    'label' => esc_html__('Menu Top Information', 'getleads'),
                                    'desc' => esc_html__('Add your top information', 'getleads'),
                                    'limit' => '2',
                                    'template' => '{{=info}}',
                                    'popup-options' => array(
                                        'info' => array(
                                            'label' => esc_html__('Information', 'getleads'),
                                            'desc' => esc_html__('Enter your information', 'getleads'),
                                            'type' => 'text',
                                        ),
                                        'icon' => array(
                                            'label' => esc_html__('Icon', 'getleads'),
                                            'type' => 'new-icon',
                                            'value' => 'fa fa-mobile'
                                        ),
//                                        'link' => array(
//                                            'label' => esc_html__('Link', 'getleads'),
//                                            'desc' => wp_kses_post('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
//                                            'type' => 'text',
//                                        ),
                                    ),
                                ),
                            ),
                            'menu-3' => array(
                                'info' => array(
                                    'type' => 'text',
                                    'label' => esc_html__('Information', 'getleads'),
                                    'value' => esc_html__('+89 123 456 768', 'getleads'),
                                ),
                                'socials' => array(
                                    'type' => 'addable-popup',
                                    'limit' => '4',
                                    'label' => esc_html__('Social Links', 'getleads'),
                                    'desc' => esc_html__('Add your social profiles', 'getleads'),
                                    'template' => '{{=social_name}}',
                                    'popup-options' => array(
                                        'social_name' => array(
                                            'label' => esc_html__('Name', 'getleads'),
                                            'desc' => esc_html__('Enter a name (it is for internal use and will not appear on the front end)', 'getleads'),
                                            'type' => 'text',
                                        ),
                                        'icon' => array(
                                            'type' => 'new-icon',
                                            'value' => 'fa fa-adn',
                                            'label' => esc_html__('Icon', 'getleads'),
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => wp_kses_post('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
                                            'type' => 'text',
                                        ),
                                        'color' => array(
                                            'label' => esc_html__('Background', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '#4A4A4A',
                                            'desc' => esc_html__('Footer social icon color.', 'getleads'),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'show_borders' => false,
                    ),
                    'menu_postion' => array(
                        'label' => esc_html__('Menu Postion', 'getleads'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => 'right',
                            'label' => esc_html__('right', 'getleads')
                        ),
                        'left-choice' => array(
                            'value' => 'left',
                            'label' => esc_html__('left', 'getleads')
                        ),
                        'value' => 'right',
                        'desc' => esc_html__('Select your prefered logo position.', 'getleads'),
                    ),
                    'menu_fixed' => array(
                        'label' => esc_html__('Menu fixed in top', 'getleads'),
                        'type' => 'switch',
                        'right-choice' => array(
                            'value' => 'navbar-fixed-top',
                            'label' => esc_html__('yes', 'getleads')
                        ),
                        'left-choice' => array(
                            'value' => 'navbar-static-top',
                            'label' => esc_html__('no', 'getleads')
                        ),
                        'value' => 'right',
                        'desc' => esc_html__('Select your prefered logo position.', 'getleads'),
                    ),
                    'menu_bg' => array(
                        'type' => 'switch',
                        'label' => esc_html__('Menu Transparent', 'getleads'),
                        'desc' => wp_kses_post('Select here if you want to use menu transparent or background for only <b>Menu Style-1</b> & <b>Menu Style-3</b>', 'getleads'),
                        'right-choice' => array(
                            'value' => 'bg-transparent',
                            'label' => esc_html__('Yes', 'getleads'),
                        ),
                        'left-choice' => array(
                            'value' => 'bg-default',
                            'label' => esc_html__('No', 'getleads'),
                        ),
                    ),
                ),
            ),
        )
    )
);
