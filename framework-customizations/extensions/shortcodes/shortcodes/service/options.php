<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'services' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'service_style' => array(
                'label' => __('Service Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'service-1',
                'desc' => __('Select Service style.', 'getleads'),
                'choices' => array(
                    'service-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style1.jpg'
                        ),
                    ),
                    'service-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style2.jpg'
                        ),
                    ),
                    'service-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style3.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style3.jpg'
                        ),
                    ),
                    'service-4' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style4.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/service-style4.jpg'
                        ),
                    ),
                    
                ),
            ),
        ),
        'choices' => array(
            'service-1' => array(
                'icon' => array(
                    'type' => 'new-icon',
                    'label' => __('Choose an Icon', 'getleads'),
                ),
            ),
            'service-2' => array(
                'image' => array(
                    'label' => __('Image', 'getleads'),
                    'type' => 'upload',
                    'desc' => __('Upload your image', 'getleads'),
                ),
            ),
            'service-3' => array(
                'icon' => array(
                    'type' => 'new-icon',
                    'label' => __('Choose an Icon', 'getleads'),
                ),
            ),
            'service-4' => array(
                'image' => array(
                    'label' => __('Image', 'getleads'),
                    'type' => 'upload',
                    'desc' => __('Upload your image', 'getleads'),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title of the Box', 'getleads'),
    ),
    'content' => array(
        'label' => __('Description', 'getleads'),
        'desc' => __('Enter the Service description', 'getleads'),
        'type' => 'textarea',
    ),
);
