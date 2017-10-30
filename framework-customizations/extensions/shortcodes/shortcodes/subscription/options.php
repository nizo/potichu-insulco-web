<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'subscription_style' => array(
        'label' => __('Portfolio Style', 'getleads'),
        'type' => 'image-picker',
        'value' => 'subscription-1',
        'desc' => __('Select Portfolio style.', 'getleads'),
        'choices' => array(
            'subscription-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/subscription-style1.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/subscription-style1.jpg'
                ),
            ),
            'subscription-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/subscription-style2.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/subscription-style2.jpg'
                ),
            ),
        ),
    ),
    'action' => array(
        'label' => __('Mailchimp URL', 'getleads'),
        'desc' => __('Enter your mailchimp URL', 'getleads'),
        'type' => 'text',
        'value' => 'http://themedept.us9.list-manage.com/subscribe/post?u=a8cd4fa72585379e205821fa2&amp;id=366e69e674'
    ),
    'policy' => array(
        'label' => __('Privacy & Policy', 'getleads'),
        'desc' => __('Enter details about your privacy & policy', 'getleads'),
        'type' => 'wp-editor',
        'tinymce' => true,
        'reinit' => true,
    ),
    'center' => array(
        'type' => 'switch',
        'label' => __('Text Center', 'getleads'),
        'desc' => __('Select here if you want to center your text alignment', 'getleads'),
        'right-choice' => array(
            'value' => 'text-center',
            'label' => __('Yes', 'getleads'),
        ),
        'left-choice' => array(
            'value' => 'self',
            'label' => __('No', 'getleads'),
        ),
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
