<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'type' => array(
        'label' => __('Type', 'getleads'),
        'desc' => __('Select the accordion type', 'getleads'),
        'value' => 'panel-default',
        'type' => 'image-picker',
        'choices' => array(
            'panel-default' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/accordion-default.jpg',
                    'title' => __('Default', 'getleads')
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/accordion-default.jpg'
                ),
            ),
            'panel-normal' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/accordion-success.jpg',
                    'title' => __('Congratulations', 'getleads')
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/accordion-success.jpg'
                ),
            )
        )
    ),
    'tabs' => array(
        'type' => 'addable-popup',
        'label' => __('Tabs', 'getleads'),
        'popup-title' => __('Add/Edit Tabs', 'getleads'),
        'desc' => __('Add tabs', 'getleads'),
        'template' => '{{=title}}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'getleads'),
                'desc' => __('Enter the tab title', 'getleads'),
                'type' => 'text',
                'value' => __('', 'getleads'),
            ),
            'content' => array(
                'label' => __('Content', 'getleads'),
                'desc' => __('Enter the accordion content', 'getleads'),
                'type' => 'wp-editor',
                'tinymce' => true,
                'reinit' => true,
            ),
            'opened' => array(
                'type' => 'switch',
                'label' => __('Default State', 'getleads'),
                'desc' => __('Set the default state for the tab', 'getleads'),
                'help' => __('Only one tab can be opened. If you choose two opened tabs the first one will be set as opened based on the position in the tab list.', 'getleads'),
                'value' => '',
                'right-choice' => array(
                    'value' => 'opened',
                    'label' => __('Opened', 'getleads'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('Closed', 'getleads'),
                ),
            ),
            'icon' => array(
                'label' => __('Icon', 'getleads'),
                'type' => 'icon',
            ),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'getleads'),
    ),
);
