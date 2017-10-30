<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'iconbox' => array(
        'type' => 'image-picker',
        'label' => __('Box Style', 'getleads'),
        'choices' => array(
            'fw-iconbox-1' => array(
                'small' => array(
                    'height' => 75,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type1.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type1.jpg'
                ),
            ),
            'fw-iconbox-2' => array(
                'small' => array(
                    'height' => 75,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type2.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type2.jpg'
                ),
            ),
            'fw-iconbox-3' => array(
                'small' => array(
                    'height' => 75,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type3.jpg',
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/icon-box-type3.jpg'
                ),
            ),
        ),
    ),
    'icon' => array(
        'type' => 'new-icon',
        'label' => __('Choose an Icon', 'getleads'),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'getleads'),
    ),
    'content' => array(
        'label' => __('Description', 'getleads'),
        'desc' => __('Enter the icon box description', 'getleads'),
        'type' => 'wp-editor',
    ),
);
