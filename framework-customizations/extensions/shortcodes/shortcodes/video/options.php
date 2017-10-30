<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'getleads'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'getleads'),
        'type' => 'text',
        'value' => 'https://www.youtube.com/watch?v=nrJtHemSPW4',
    ),
    'icon' => array(
        'label' => __('Icon', 'getleads'),
        'desc' => __('Select your video icon', 'getleads'),
        'type' => 'new-icon',
        'value' => 'fa fa-play-circle',
    ),
    'description' => array(
        'label' => __('Description', 'getleads'),
        'desc' => __('Type your video description', 'getleads'),
        'type' => 'textarea',
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
    'color' => array(
        'label' => __('Text Color', 'getleads'),
        'desc' => __('Select your text color', 'getleads'),
        'type' => 'color-picker',
        'value' => '#ffffff',
    ),
    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode.', 'getleads'),
        'value' => '',
    ),
);
