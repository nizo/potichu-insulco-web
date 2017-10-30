<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'screenshot_images' => array(
        'label' => __('Screenshot', 'getleads'),
        'type' => 'addable-popup',
        'desc' => __('screenshot image minimum 4', 'getleads'),
        'template' => '{{- text }}',
        'popup-options' => array(
            'text' => array(
                'label' => __('Recognise name', 'getleads'),
                'desc' => __('Add a name for internal use.', 'getleads'),
                'type' => 'text',
            ),
            'images' => array(
                'label' => __('Slide Image', 'getleads'),
                'desc' => __('Upload Slide Image.', 'getleads'),
                'type' => 'upload',
            ),
        )
    ),
);
