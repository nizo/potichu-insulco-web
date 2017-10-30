<?php

if (!defined('FW'))
    die('Forbidden');



$options = array(
    'testimonial_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'testimonial' => array(
                'label' => __('Testimonial', 'getleads'),
                'desc' => __('Select the testimonial for your section', 'getleads'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'default' => __('Default', 'getleads'),
                    'slider' => __('Slider', 'getleads'),
                ),
            )
        ),
        'choices' => array(
            'default' => array(
                'default_style_settings' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'default_style' => array(
                            'label' => __('Default Style', 'getleads'),
                            'type' => 'image-picker',
                            'desc' => __('Select Default style.', 'getleads'),
                            'choices' => array(
                                'default-1' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonial-default1.png'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonial-default1.png'
                                    ),
                                ),
                                'default-2' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonial-default2.png'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonial-default2.png'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'default-1' => array(
                            'popup-1' => array(
                                'label' => __('Item', 'getleads'),
                                'type' => 'addable-popup',
                                'desc' => __('Add Default Image And and Text.', 'getleads'),
                                'add-button-text' => __('Add Testimonial Item', 'getleads'),
                                'limit' => 3,
                                'template' => '{{-title }}',
                                'popup-options' => array(
                                    'image' => array(
                                        'label' => __('Iamge', 'getleads'),
                                        'type' => 'upload',
                                        'desc' => __('Upload Your Favorite Image', 'getleads'),
                                    ),
                                    'description' => array(
                                        'label' => __('Description', 'getleads'),
                                        'type' => 'textarea',
                                        'desc' => __('Type your testimonial Description.', 'getleads'),
                                    ),
                                    'title' => array(
                                        'label' => __('Name', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type the testimonial name.', 'getleads'),
                                    ),
                                    'position' => array(
                                        'label' => __('Position', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type Testimonial position.', 'getleads'),
                                    ),
                                )
                            )
                        ),
                        'default-2' => array(
                            'popup-2' => array(
                                'type' => 'addable-option',
                                'label' => __('Twitter Status Link', 'getleads'),
                                'desc' => __('Add twitter status URL. you can check this how to get twitter status URL <b>http://bit.ly/1TL8XIL</b>', 'getleads'),
                                'option' => array('type' => 'text', 'value' => 'https://twitter.com/collis/status/532695538022367232'),
                                'add-button-text' => __('Add Status Link', 'getleads'),
                                'sortable' => true,
                            )
                        ),
                    ),
                    'show_borders' => false,
                ),
            ),
            'slider' => array(
                'slider_style_settings' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'slider_style' => array(
                            'label' => __('Slider Style', 'getleads'),
                            'type' => 'image-picker',
                            'desc' => __('Select Slider style.', 'getleads'),
                            'choices' => array(
                                'slider-1' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style11.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style11.jpg'
                                    ),
                                ),
                                'slider-2' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style12.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style12.jpg'
                                    ),
                                ),
                                'slider-3' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style13.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 214,
                                        'src' => GETLEADS_IMAGES . '/image-picker/testimonials-style13.jpg'
                                    ),
                                ),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'slider-1' => array(
                            'left_title' => array(
                                'label' => __('Left Title', 'getleads'),
                                'type' => 'text',
                                'desc' => __('Type your left title', 'getleads'),
                            ),
                            'left_subtitle' => array(
                                'label' => __('Left Sub-Title', 'getleads'),
                                'type' => 'text',
                                'desc' => __('Type your left sub-title', 'getleads'),
                            ),
                            'left_content' => array(
                                'label' => __('Left Content', 'getleads'),
                                'type' => 'textarea',
                                'desc' => __('Type your left content.', 'getleads'),
                            ),
                            'popup-1' => array(
                                'label' => __('Item', 'getleads'),
                                'type' => 'addable-popup',
                                'desc' => false,
                                'limit' => 4,
                                'template' => '{{-title }}',
                                'add-button-text' => __('Add Testimonial Item', 'getleads'),
                                'popup-options' => array(
                                    'image' => array(
                                        'label' => __('Iamge', 'getleads'),
                                        'type' => 'upload',
                                        'desc' => __('Upload Your Favorite Image', 'getleads'),
                                    ),
                                    'description' => array(
                                        'label' => __('Description', 'getleads'),
                                        'type' => 'textarea',
                                        'desc' => __('Type your testimonial Description.', 'getleads'),
                                    ),
                                    'title' => array(
                                        'label' => __('Name', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type the testimonial name.', 'getleads'),
                                    ),
                                    'position' => array(
                                        'label' => __('Position', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type Testimonial position.', 'getleads'),
                                    ),
                                )
                            )
                        ),
                        'slider-2' => array(
                            'popup-2' => array(
                                'label' => __('Item', 'getleads'),
                                'type' => 'addable-popup',
                                'desc' => false,
                                'limit' => 4,
                                'template' => '{{-title }}',
                                'add-button-text' => __('Add Testimonial Item', 'getleads'),
                                'popup-options' => array(
                                    'image' => array(
                                        'label' => __('Iamge', 'getleads'),
                                        'type' => 'upload',
                                        'desc' => __('Upload Your Favorite Image', 'getleads'),
                                    ),
                                    'description' => array(
                                        'label' => __('Description', 'getleads'),
                                        'type' => 'textarea',
                                        'desc' => __('Type your testimonial Description.', 'getleads'),
                                    ),
                                    'title' => array(
                                        'label' => __('Name', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type the testimonial name.', 'getleads'),
                                    ),
                                    'position' => array(
                                        'label' => __('Position', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type Testimonial position.', 'getleads'),
                                    ),
                                )
                            )
                        ),
                        'slider-3' => array(
                            'popup-3' => array(
                                'label' => __('Item', 'getleads'),
                                'type' => 'addable-popup',
                                'desc' => false,
                                'limit' => 4,
                                'add-button-text' => __('Add Testimonial Item', 'getleads'),
                                'template' => '{{-title }}',
                                'popup-options' => array(
                                    'description' => array(
                                        'label' => __('Description', 'getleads'),
                                        'type' => 'textarea',
                                        'desc' => __('Type your testimonial Description.', 'getleads'),
                                    ),
                                    'title' => array(
                                        'label' => __('Name', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type the testimonial name.', 'getleads'),
                                    ),
                                    'position' => array(
                                        'label' => __('Position', 'getleads'),
                                        'type' => 'text',
                                        'desc' => __('Type Testimonial position.', 'getleads'),
                                    ),
                                )
                            )
                        ),
                    ),
                    'show_borders' => false,
                ),
            ),
        ),
    ),
    'center' => array(
        'type' => 'switch',
        'label' => __('Text Center', 'getleads'),
        'desc' => __('Select here if you want to use center for text or image', 'getleads'),
        'right-choice' => array(
            'value' => 'text-center',
            'label' => __('Yes', 'getleads'),
        ),
        'left-choice' => array(
            'value' => 'self',
            'label' => __('No', 'getleads'),
        ),
    ),
);
