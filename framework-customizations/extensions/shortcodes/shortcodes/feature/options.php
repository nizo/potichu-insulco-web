<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'feature' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'feature_style' => array(
                'label' => __('Feature Style', 'getleads'),
                'desc' => __('Choose Feature Style', 'getleads'),
                'type' => 'image-picker',
                'value' => '',
                'choices' => array(
                    'feature-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/features-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES . '/image-picker/features-style1.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'feature-1' => array(
                'phone_image' => array(
                    'type' => 'upload',
                    'label' => __('Image', 'getleads'),
                ),
                'feature_left' => array(
                    'label' => __('Feature Left', 'getleads'),
                    'type' => 'addable-popup',
                    'desc' => __('Add Left Side Feature', 'getleads'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Add Feature Title here.', 'getleads'),
                            'type' => 'text',
                        ),
                        'message' => array(
                            'label' => __('Message', 'getleads'),
                            'type' => 'textarea',
                            'value' => '',
                            'desc' => __('Add feature Message Here', 'getleads'),
                        ),
                    )
                ),
                'feature_right' => array(
                    'label' => __('Feature Right', 'getleads'),
                    'type' => 'addable-popup',
                    'desc' => __('Add Right Side Feature', 'getleads'),
                    'template' => 'Feature : {{- title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Add Feature Title here.', 'getleads'),
                            'type' => 'text',
                        ),
                        'message' => array(
                            'label' => __('Message', 'getleads'),
                            'type' => 'textarea',
                            'value' => '',
                            'desc' => __('Add feature Message Here', 'getleads'),
                        ),
                    )
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
