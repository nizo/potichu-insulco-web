<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tab_item' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Style Type', 'getleads'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'button' => __('Button', 'getleads'),
                    'image' => __('Image Button', 'getleads'),
                ),
            )
        ),
        'choices' => array(
            'button' => array(
                'button_settings' => array(
                    'type' => 'addable-popup',
                    'label' => 'Button',
                    'template' => 'Button : {{- label }}',
                    'popup-options' => array(
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
                                ),
                            ),
                        ),
                        'label' => array(
                            'label' => __('Button Label', 'getleads'),
                            'desc' => __('This is the text that appears on your button', 'getleads'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'link' => array(
                            'label' => __('Button Link', 'getleads'),
                            'desc' => __('Where should your button link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'shadow' => array(
                            'type' => 'switch',
                            'label' => __('Button Shadow', 'getleads'),
                            'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                            'right-choice' => array(
                                'value' => 'shadow',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
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
                        'size' => array(
                            'label' => __('Button Size', 'getleads'),
                            'desc' => __('Choose a Size for your button', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'lg' => __('Large', 'getleads'),
                                'md' => __('Medium', 'getleads'),
                                'sm' => __('Small', 'getleads'),
                            )
                        ),
                        'letter_case' => array(
                            'label' => __('Letter Case', 'getleads'),
                            'desc' => __('Choose a lettercase for your button text', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'getleads'),
                                'capitalize' => __('Capitalize', 'getleads'),
                                'lowercase' => __('Lowercase', 'getleads'),
                            )
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
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
                                ),
                            )
                        ),
                    )
                )
            ),
            'image' => array(
                'image_button' => array(
                    'type' => 'addable-popup',
                    'limit' => '4',
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'getleads'),
                            'type' => 'text',
                        ),
                        'image' => array(
                            'label' => __('Image', 'getleads'),
                            'desc' => __('Upload Your Favorite Image Button', 'getleads'),
                            'type' => 'upload'
                        ),
                        'link' => array(
                            'label' => __('Link', 'getleads'),
                            'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'getleads'),
                            'type' => 'text',
                            'value' => '#',
                        ),
                        'target' => array(
                            'type' => 'switch',
                            'label' => __('Open Link in New Window', 'getleads'),
                            'desc' => __('Select here if you want to open the image in a new window', 'getleads'),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'btn_alignment' => array(
        'label' => __('Alignment', 'getleads'),
        'desc' => __('Choose button or image alignment', 'getleads'),
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
);
