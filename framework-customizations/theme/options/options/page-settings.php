<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'page_settings' => array(
        'title' => esc_html__('Page Settings', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'header-page-box' => array(
                'title' => esc_html__('Page Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'general_page_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'getleads-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'page_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Page Title',
                                        'desc' => 'Add your Page hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => esc_html__('Page Header Image', 'getleads'),
                                        'desc' => esc_html__('Upload a Page header image', 'getleads'),
                                        'help' => esc_html__("This default header image will be used for all your Page.", "getleads"),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => esc_html__('', 'getleads'),
                                        'desc' => esc_html__('Select the image overlay color', 'getleads'),
                                        'help' => esc_html__('', 'getleads'),
                                        'value' => 'rgba(26, 198, 255, 0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
        ),
    ),
);
