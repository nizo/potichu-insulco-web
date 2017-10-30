<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'footer_settings' => array(
        'title' => esc_html__('Footer Settings', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'footer_box' => array(
                'title' => esc_html__('Footer Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'footer' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'footer_style' => array(
                                'label' => esc_html__('Footer Style', 'getleads'),
                                'type' => 'image-picker',
                                'value' => 'footer-1',
                                'desc' => esc_html__('Select Footer style.', 'getleads'),
                                'choices' => array(
                                    'footer-1' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer1.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer1.jpg'
                                        ),
                                    ),
                                    'footer-2' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer2.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer2.jpg'
                                        ),
                                    ),
                                    'footer-3' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer3.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer3.jpg'
                                        ),
                                    ),
                                    'footer-4' => array(
                                        'small' => array(
                                            'height' => 70,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer4.jpg'
                                        ),
                                        'large' => array(
                                            'height' => 214,
                                            'src' => GETLEADS_IMAGES . '/image-picker/footer4.jpg'
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        'choices' => array(
                            'footer-1' => array(
                                'socials' => array(
                                    'type' => 'addable-popup',
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
                                            'label' => '',
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => esc_html__('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'color' => array(
                                            'label' => esc_html__('Social Color', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '',
                                            'desc' => esc_html__('Footer social icon color.', 'getleads'),
                                        ),
                                    ),
                                ),
                            ),
                            'footer-2' => array(
                                'link' => array(
                                    'type' => 'addable-popup',
                                    'label' => esc_html__('Add Links', 'getleads'),
                                    'desc' => esc_html__('Add your custom link here', 'getleads'),
                                    'template' => '{{=title}}',
                                    'popup-options' => array(
                                        'title' => array(
                                            'label' => esc_html__('Title', 'getleads'),
                                            'desc' => esc_html__('Enter title', 'getleads'),
                                            'type' => 'text',
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => wp_kses_post(__('Enter your URL link ( dont forget to add <b>http://</b>)', 'getleads')),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'lnk_color' => array(
                                            'label' => esc_html__('Link Color', 'getleads'),
                                            'desc' => esc_html__('Select your footer links color', 'getleads'),
                                            'type' => 'color-picker',
                                        ),
                                    ),
                                ),
                                'socials' => array(
                                    'type' => 'addable-popup',
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
                                            'label' => '',
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => esc_html__('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'color' => array(
                                            'label' => esc_html__('Social Color', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '',
                                            'desc' => esc_html__('Footer social icon color.', 'getleads'),
                                        ),
                                    ),
                                ),
                            ),
                            'footer-3' => array(
                                'socials' => array(
                                    'type' => 'addable-popup',
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
                                            'label' => '',
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => esc_html__('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'social_bg' => array(
                                            'label' => esc_html__('Social Background', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '#ffffff',
                                            'desc' => esc_html__('Footer social icon background color.', 'getleads'),
                                        ),
                                        'color' => array(
                                            'label' => esc_html__('Social Color', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '',
                                            'desc' => esc_html__('Footer social icon color.', 'getleads'),
                                        ),
                                    ),
                                ),
                            ),
                            'footer-4' => array(
                                'footer_logo' => array(
                                    'label' => esc_html__('footer logo', 'getleads'),
                                    'type' => 'upload',
                                    'desc' => esc_html__('Upload footer logo.', 'getleads'),
                                ),
                                'ft_mid_text' => array(
                                    'type' => 'textarea',
                                    'label' => esc_html__('Footer Middle text', 'getleads'),
                                    'desc' => esc_html__('Enter Your Footer Middle text', 'getleads'),
                                ),
                                'socials' => array(
                                    'type' => 'addable-popup',
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
                                            'label' => '',
                                        ),
                                        'link' => array(
                                            'label' => esc_html__('Link', 'getleads'),
                                            'desc' => esc_html__('Enter your social URL link ( dont forget to add <b>http://</b>)', 'getleads'),
                                            'type' => 'text',
                                            'value' => '#',
                                        ),
                                        'social_bg' => array(
                                            'label' => esc_html__('Social Background', 'getleads'),
                                            'type' => 'color-picker',
                                            'value' => '#ffffff',
                                            'desc' => esc_html__('Footer social icon background color.', 'getleads'),
                                        ),
                                        
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'copyright' => array(
                        'label' => esc_html__('Footer Text', 'getleads'),
                        'type' => 'text',
                        'value' => 'GetLeads. All Rights Reserved',
                        'desc' => esc_html__('Footer Copyright Text.', 'getleads'),
                    ),
                    'bg_color' => array(
                        'label' => esc_html__('Background Color', 'getleads'),
                        'type' => 'color-picker',
                        'desc' => esc_html__('Footer background color.', 'getleads'),
                    ),
                    'text_color' => array(
                        'label' => esc_html__(' Text Color', 'getleads'),
                        'type' => 'color-picker',
                        'value' => '',
                        'desc' => esc_html__('Footer text color.', 'getleads'),
                    ),
                ),
            ),
        ),
    ),
);
