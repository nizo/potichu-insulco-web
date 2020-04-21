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
                'label' => __('Name', 'getleads'),
                'type' => 'text',
            ),
            'images' => array(
                'label' => __('Image', 'getleads'),
                'type' => 'upload',
            ),
            'link' => array(
                'label' => __('Link', 'getleads'),
                'type' => 'text'
            ),
        )
    ),
);
