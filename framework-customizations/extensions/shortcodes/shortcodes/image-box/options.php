<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'image' => array(
        'label' => __('Image', 'getleads'),
        'type' => 'upload',
        'value' => '',
    ),
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
    'name' => array(
        'label' => __('Title', 'getleads'),
        'desc' => __('Add title', 'getleads'),
        'type' => 'text',
        'value' => 'HTML/CSS',
    ),
    'text' => array(
        'label' => __('Description', 'getleads'),
        'desc' => __('Add Description', 'getleads'),
        'type' => 'textarea',
    ),
    'background_color' => array(
        'label' => __('Background color', 'getleads'),
        'desc' => __('add background color', 'getleads'),
        'type' => 'color-picker',
    ),
    'text_align' => array(
        'label' => __('Text Align', 'getleads'),
        'type' => 'short-select',
        'value' => 'text-left',
        'desc' => __('Set your text align.', 'getleads'),
        'choices' => array(
            'text-left' => 'Left',
            'text-center' => 'Center',
            'text-right' => 'Right',
        ),
        
    ),
    'icon-box-btn' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'show_bnt' => array(
                'type' => 'switch',
                'value' => '',
                'label' => __('Button', 'getleads'),
                'desc' => __('Show button?', 'getleads'),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', 'getleads'),
                ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', 'getleads'),
                )
            ),
        ),
        'choices' => array(
            'yes' => array(
                'style' => array(
                    'label' => __('Style', 'getleads'),
                    'desc' => __('Choose button style', 'getleads'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'default' => array(
                            'small' => array(
                                'height' => 70,
                                'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                            ),
                            'large' => array(
                                'height' => 208,
                                'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                            ),
                        ),
                        'primary' => array(
                            'small' => array(
                                'height' => 70,
                                'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                            ),
                            'large' => array(
                                'height' => 208,
                                'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                            ),
                        )
                    ),
                ),
                'label' => array(
                    'label' => __('Label', 'getleads'),
                    'desc' => __('This is the text that appears on your button', 'getleads'),
                    'type' => 'text',
                    'value' => 'Button Text'
                ),
                'link' => array(
                    'label' => __('Link', 'getleads'),
                    'desc' => __('Where should your button link to ?', 'getleads'),
                    'type' => 'text',
                    'value' => '#'
                ),
                'target' => array(
                    'type' => 'switch',
                    'label' => __('', 'getleads'),
                    'desc' => __('Open link in new window?', 'getleads'),
                    'value' => '_self',
                    'right-choice' => array(
                        'value' => '_blank',
                        'label' => __('Yes', 'getleads'),
                    ),
                    'left-choice' => array(
                        'value' => '_self',
                        'label' => __('No', 'getleads'),
                    ),
                ),
                'size' => array(
                    'label' => __('Size', 'getleads'),
                    'desc' => __('Choose button size', 'getleads'),
                    'attr' => array('class' => 'getleads-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => '',
                    'choices' => array(
                        'btn-sm' => __('Small', 'getleads'),
                        'btn-md' => __('Normal', 'getleads'),
                        'btn-lg' => __('Large', 'getleads'),
                    )
                ),
                'full_width' => array(
                    'type' => 'switch',
                    'label' => __('', 'getleads'),
                    'desc' => __('Make this button full width?', 'getleads'),
                    'value' => '',
                    'right-choice' => array(
                        'value' => 'getleads-btn-full',
                        'label' => __('Yes', 'getleads'),
                    ),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'getleads'),
                    ),
                ),
                'btn_alignment' => array(
                    'label' => __('Alignment', 'getleads'),
                    'desc' => __('Choose button alignment', 'getleads'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/no-align.jpg',
                                'title' => __('None', 'getleads')
                            ),
                        ),
                        'text-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'getleads')
                            ),
                        ),
                        'text-center' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'getleads')
                            ),
                        ),
                        'text-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'getleads')
                            ),
                        ),
                    ),
                ),
                'icon' => array(
                    'type' => 'new-icon',
                    'label' => __('Icon', 'getleads')
                ),
                'icon_position' => array(
                    'type' => 'switch',
                    'label' => __('', 'getleads'),
                    'desc' => __('Choose the icon position', 'getleads'),
                    'right-choice' => array(
                        'value' => 'pull-right',
                        'label' => __('Right', 'getleads'),
                    ),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('Left', 'getleads'),
                    ),
                )
            )
        )
    ),
);
