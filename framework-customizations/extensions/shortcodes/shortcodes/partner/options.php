<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'partner_style' => array(
        'label' => __('Partner Style', 'getleads'),
        'type' => 'image-picker',
        'desc' => __('Select Portfolio style.', 'getleads'),
        'choices' => array(
            'partner-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/partner-style1.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/partner-style1.jpg'
                ),
            ),
            'partner-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/partner-style2.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/partner-style2.jpg'
                ),
            ),
        ),
    ),
    'headline' => array(
        'label' => 'Headline',
        'type' => 'text',
        'desc' => 'Type your main headline here'
    ),
    'partner_gallery' => array(
        'type' => 'addable-popup',
        'label' => __('Partner Image', 'getleads'),
        'desc' => __('Add your partner image.', 'getleads'),
        'template' => '{{- partner_alt}}',
        'limit' => 6,
        'sortable' => true,
        'popup-options' => array(
            'partner_image' => array(
                'label' => __('Add your Partner Image', 'getleads'),
                'type' => 'upload',
            ),
            'partner_alt' => array(
                'label' => __('Partner Text', 'getleads'),
                'desc' => __('if you want you can use partner link also. or just Leave it blank', 'getleads'),
                'type' => 'text',
            ),
        ),
    )
);
