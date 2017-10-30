<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'styling_settings' => array(
        'title' => esc_html__('Styling Settings', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'header-styling-box' => array(
                'title' => esc_html__('Styling Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'main_color' => array(
                        'type' => 'color-picker',
                        'label' => 'Theme Color',
                        'desc' => 'You can use any color in your theme',
                        'value' => '#1ac6ff'
                    ),
                    'typography-global' => array(
                        'title' => esc_html__('Global Typography', 'getleads'),
                        'type' => 'box',
                        'options' => array(
                            'heading_title' => array(
                                'label' => esc_html__('Headling Title ', 'getleads'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'Verdana',
                                    'style' => 'normal',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('Main Heading Title. you can create heading from shortcode <b>special heading</b>.', 'getleads'),
                            ),
                            'heading_subtitle' => array(
                                'label' => esc_html__('Sub Heading Title', 'getleads'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'Verdana',
                                    'style' => 'normal',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('Main Heading sub Title. you can create heading from shortcode <b>special heading</b>.', 'getleads'),
                            ),
                            'body_font' => array(
                                'label' => esc_html__('Body Font', 'getleads'),
                                'type' => 'typography',
                                'value' => array(
                                    'family' => 'Verdana',
                                    'style' => 'normal',
                                ),
                                'components' => array(
                                    'family' => true,
                                    'size' => false,
                                    'color' => false
                                ),
                                'desc' => esc_html__('this is default body font .', 'getleads'),
                            ),
                        ),
                    ),
                )
            ),
            'css-box' => array(
                'title' => esc_html__('EXTRA CSS', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'custom_css' => array(
                        'label' => esc_html__('Custom CSS', 'getleads'),
                        'desc' => esc_html__('Custom Css changes that will be applied to the theme', 'getleads'),
                        'help' => esc_html__('If you need to change major portions of the theme please add your custom CSS in the style.css file. This file is located on your server in the <strong>/child-theme/style.css</strong>', 'getleads'),
                        'type' => 'textarea',
                        'value' => '',
                    ),
                )
            ),
        ),
    ),
);
