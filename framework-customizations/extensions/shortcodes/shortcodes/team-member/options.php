<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'team_style' => array(
        'label' => __('Team Style', 'getleads'),
        'type' => 'image-picker',
        'value' => 'team-1',
        'desc' => __('Select Team style.', 'getleads'),
        'choices' => array(
            'team-1' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style1.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style1.jpg'
                ),
            ),
            'team-2' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style2.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style2.jpg'
                ),
            ),
            'team-3' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style3.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style3.jpg'
                ),
            ),
            'team-4' => array(
                'small' => array(
                    'height' => 70,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style4.jpg'
                ),
                'large' => array(
                    'height' => 214,
                    'src' => GETLEADS_IMAGES . '/image-picker/team-style4.jpg'
                ),
            ),
        ),
    ),
    'image_group' => array(
        'type' => 'group',
        'options' => array(
            'image' => array(
                'label' => __('Image', 'getleads'),
                'desc' => __('Upload an image', 'getleads'),
                'type' => 'upload'
            ),
        )
    ),
    'name' => array(
        'label' => __('Name', 'getleads'),
        'desc' => __('Enter the team member name', 'getleads'),
        'type' => 'text',
        'value' => ''
    ),
    'job' => array(
        'label' => __('Job Title', 'getleads'),
        'desc' => __('Enter the job title', 'getleads'),
        'type' => 'text',
        'value' => ''
    ),
    'desc' => array(
        'label' => __('Description', 'getleads'),
        'desc' => __('Enter team member description', 'getleads'),
        'type' => 'textarea',
//        'type' => 'wp-editor',
//        'tinymce' => true,
//        'reinit' => true,
    ),
    'socials' => array(
        'type' => 'addable-popup',
        'limit' => '4',
        'label' => __('Social Links', 'getleads'),
        'desc' => __('Add social links', 'getleads'),
        'template' => '{{=social_name}}',
        'popup-options' => array(
            'social_name' => array(
                'label' => __('Name', 'getleads'),
                'desc' => __('Enter a name (it is for internal use and will not appear on the front end)', 'getleads'),
                'type' => 'text',
            ),
            'icon_class' => array(
                'type' => 'new-icon',
                'value' => 'fa fa-adn',
                'label' => '',
            ),
            'background_color' => array(
                'label' => __('Social BG', 'getleads'),
                'desc' => __('Select the background color', 'getleads'),
                'value' => '#81d742',
                'type' => 'color-picker'
            ),
            'social_link' => array(
                'label' => __('Link', 'getleads'),
                'desc' => __('Enter your social URL link', 'getleads'),
                'type' => 'text',
                'value' => '#'
            )
        ),
    ),
    'txt_align' => array(
        'label' => __('Alignment', 'getleads'),
        'desc' => __('Select your alignment', 'getleads'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'text-left' => __('Left', 'getleads'),
            'text-center' => __('Center', 'getleads'),
            'text-right' => __('Right', 'getleads'),
        ),
        'value' => 'none'
    ),
    'class' => array(
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'type' => 'text',
        'value' => '',
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css.', 'getleads'),
    ),
);
