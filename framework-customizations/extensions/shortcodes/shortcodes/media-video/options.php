<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'video' => array(
        'label' => __('Video', 'getleads'),
        'desc' => __('Enter Youtube or Vimeo video URL', 'getleads'),
        'type' => 'text',
        'value' => 'https://www.youtube.com/embed/sU3FkzUKHXU',
    ),
    'width' => array(
        'label' => __('Width', 'getleads'),
        'desc' => __('Video width in pixels', 'getleads'),
        'type' => 'short-text',
        'value' => '',
    ),
    'height' => array(
        'label' => __('Height', 'getleads'),
        'desc' => __('Video height in pixels', 'getleads'),
        'type' => 'short-text',
        'value' => '',
    ),
    'frame' => array(
        'type' => 'switch',
        'value' => '',
        'label' => __('Video Border', 'getleads'),
        'desc' => __('Add a border to your video?', 'getleads'),
        'left-choice' => array(
            'value' => '',
            'label' => __('No', 'getleads'),
        ),
        'right-choice' => array(
            'value' => 'fw-video-frame',
            'label' => __('Yes', 'getleads'),
        )
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
