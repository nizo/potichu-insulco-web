<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'icon' => array(
        'label' => __('Icon', 'getleads'),
        'type' => 'icon',
        'desc' => __('Choose Contact Info Icon', 'getleads'),
    ),
    'title' => array(
        'label' => __('Title', 'getleads'),
        'type' => 'text',
        'desc' => __('Type Your Contact Info Title', 'getleads'),
    ),
    'info_item' => array(
        'label' => __('Info Item', 'getleads'),
        'type' => 'textarea',
        'desc' => __('Enter Your Contact Info Item', 'getleads'),
    ),
);
