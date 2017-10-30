<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'action_style' => array(
        'label' => __(' Action Style', 'getleads'),
        'desc' => __('Choose button style', 'getleads'),
        'type' => 'image-picker',
        'value' => '',
        'choices' => array(
            'action_one' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/cta-style1.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/cta-style1.png'
                ),
            ),
            'action_two' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/cta-style2.png'
                ),
                'large' => array(
                    'height' => 208,
                    'src' => GETLEADS_IMAGES . '/image-picker/cta-style2.png'
                ),
            ),
        ),
    ),
    'title' => array(
        'type' => 'text',
        'label' => __('Title', 'getleads'),
        'desc' => __('This can be left blank', 'getleads')
    ),
    'message' => array(
        'type' => 'textarea',
        'label' => __('Content', 'getleads'),
        'desc' => __('Enter some content for this Info Box', 'getleads')
    ),
    
    'header-page-box' => array(
        'title' => __('Button Settings', 'getleads'),
        'type' => 'box',
        'options' => array(
            'general_page_header' => array(
                'type' => 'multi',
                'label' => false,
                'inner-options' => array(
                    'page_header_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'style' => array(
                                'label' => __('Button Style', 'getleads'),
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
                            'button_label' => array(
                                'label' => __('Button Label', 'getleads'),
                                'desc' => __('This is the text that appears on your button', 'getleads'),
                                'type' => 'text',
                                'value' => 'View more classes'
                            ),
                            'button_link' => array(
                                'label' => __('Button Link', 'getleads'),
                                'desc' => __('Where should your button link to. dont forget to add <b>http://</b>', 'getleads'),
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
                           
                        )
                    ),
                )
            )
        )
    ),
);
