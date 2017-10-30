<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'portfolios' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'portfolio_style' => array(
                'label' => __('Portfolio Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'portfolio-1',
                'desc' => __('Select Portfolio style.', 'getleads'),
                'choices' => array(
                    'portfolio-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/portfolio-1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/portfolio-1.jpg'
                        ),
                    ),
                    'portfolio-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/portfolio-2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/portfolio-2.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'portfolio-1' => array(
                'portfolio_item' => array(
                    'type' => 'addable-popup',
                    'label' => __('Portfolio Item', 'getleads'),
                    'desc' => __('Add Portfolio Items', 'getleads'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Enter Title', 'getleads'),
                            'type' => 'text',
                        ),
                        'description' => array(
                            'type' => 'textarea',
                            'desc' => 'Enter the portfolios description message',
                            'label' => 'Description',
                        ),
						'usage' => array(
                            'label' => 'Used in',
                            'desc' =>'',
                            'value' => '',
                            'type' => 'text'
                        ),
						'usageBg' => array(
                            'label' => 'Used background color (hex)',
                            'desc' =>'',
                            'value' => '',
                            'type' => 'text'
                        ),
                        'btn_txt' => array(
                            'label' => __('Button Text', 'getleads'),
                            'desc' => __('Type your button text', 'getleads'),
                            'value' => 'View More',
                            'type' => 'text'
                        ),
						 'link' => array(
                            'label' => 'Link',
                            'desc' => 'Type URL address here',
                            'value' => '',
                            'type' => 'text'
                        ),
                        'image' => array(
                            'label' => __('Image', 'getleads'),
                            'desc' => __('Upload your portfolios image', 'getleads'),
                            'value' => false,
                            'type' => 'upload'
                        ),
                        'popup_image' => array(
                            'label' => __('Large Image', 'getleads'),
                            'desc' => __('Enter your popup large image title', 'getleads'),
                            'type' => 'upload',
                        )
                    ),
                ),
            ),
            'portfolio-2' => array(
                'portfolio_item' => array(
                    'type' => 'addable-popup',
                    'label' => __('Portfolio Item', 'getleads'),
                    'desc' => __('Add Portfolio Items', 'getleads'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Enter Title', 'getleads'),
                            'type' => 'text',
                            'value' => 'Project',
                        ),
                        'name' => array(
                            'type' => 'text',
                            'desc' => 'Enter your name',
                            'label' => 'Name',
                            'value' => 'By John Doe',
                        ),
                        'btn_txt' => array(
                            'label' => __('Button Text', 'getleads'),
                            'desc' => __('Type your button text', 'getleads'),
                            'value' => 'View More',
                            'type' => 'text'
                        ),
						'usage' => array(
                            'label' => 'Used in',
                            'desc' =>'',
                            'value' => '',
                            'type' => 'text'
                        ),
                        'image' => array(
                            'label' => __('Image', 'getleads'),
                            'desc' => __('Upload your portfolios image', 'getleads'),
                            'value' => false,
                            'type' => 'upload'
                        ),
                         'popup_image' => array(
                            'label' => __('Large Image', 'getleads'),
                            'desc' => __('Enter your popup large image title', 'getleads'),
                            'type' => 'upload',
                        )
                    ),
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'center' => array(
        'type' => 'switch',
        'label' => __('Text Center', 'getleads'),
        'desc' => __('Select here if you want to align your portfolio text', 'getleads'),
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
