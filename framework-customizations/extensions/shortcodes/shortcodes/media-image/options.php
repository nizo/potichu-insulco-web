<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'image' => array(
        'type' => 'upload',
        'label' => __('Image', 'getleads'),
        'desc' => __('Either upload a new, or choose an existing image from your media library', 'getleads')
    ),
    
    'alt' => array(
        'type' => 'text',
        'label' => __('alt text', 'getleads'),
        'desc' => __('Add alt text', 'getleads')
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

