<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Choose Image', 'getleads'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'getleads')
    ),
//    'frame' => array(
//        'type' => 'switch',
//        'value' => '',
//        'label' => '',
//        'desc' => __('Add a border to your image?', 'getleads'),
//        'left-choice' => array(
//            'value' => '',
//            'label' => __('No', 'getleads'),
//        ),
//        'right-choice' => array(
//            'value' => 'fw-image-frame',
//            'label' => __('Yes', 'getleads'),
//        )
//    ),
    'img_round' => array(
        'type' => 'switch',
        'label' => __('Image Round', 'getleads'),
        'desc' => __('Select here if you want to round your image or not?', 'getleads'),
        'right-choice' => array(
            'value' => 'img-rounded',
            'label' => __('Yes', 'getleads'),
        ),
        'left-choice' => array(
            'value' => 'self',
            'label' => __('No', 'getleads'),
        ),
    ),
    'image_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'select_size' => array(
                'label' => __('Size', 'getleads'),
                'desc' => __('Select the image size', 'getleads'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'value' => 'auto',
                'choices' => array(
                    'auto' => __('auto', 'getleads'),
                    'custom' => __('Custom', 'getleads')
                ),
            ),
        ),
        'choices' => array(
            'custom' => array(
                'width' => array(
                    'label' => '',
                    'desc' => __('Image width in pixels', 'getleads'),
                    'type' => 'short-text',
                    'value' => '',
                ),
                'position' => array(
                    'label' => '',
                    'desc' => __('Select image position', 'getleads'),
                    'type' => 'image-picker',
                    'value' => 'fw-single-image-center',
                    'choices' => array(
                        'fw-single-image-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'getleads')
                            ),
                        ),
                        'fw-single-image-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'getleads')
                            ),
                        ),
                        'fw-single-image-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'getleads')
                            ),
                        ),
                    ),
                ),
            ),
        )
    ),
    'image-link-group' => array(
        'type' => 'group',
        'options' => array(
            'link' => array(
                'type' => 'text',
                'label' => __('Image Link', 'getleads'),
                'desc' => __('Where should your image link to?', 'getleads')
            ),
            'target' => array(
                'type' => 'switch',
                'label' => __('Open Link in New Window', 'getleads'),
                'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', 'getleads'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', 'getleads'),
                ),
            ),
        )
    )
);

