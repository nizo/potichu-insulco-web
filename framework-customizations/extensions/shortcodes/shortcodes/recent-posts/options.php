<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'category' => array(
        'label' => __('Display From', 'getleads'),
        'desc' => __('Select a blog category', 'getleads'),
        'type' => 'select',
        'value' => '',
        'choices' => getleads_get_category_term_list(),
    ),

    'class' => array(
        'attr' => array('class' => 'border-bottom-none'),
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'type' => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.', 'getleads'),
        'value' => '',
    ),
);
