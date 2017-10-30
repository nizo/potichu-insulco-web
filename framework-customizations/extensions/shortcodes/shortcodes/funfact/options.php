<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'funfact_icon' => array(
        'label' => __('Funfact Icon', 'getleads'),
        'type' => 'icon',
    ),
    'funfact_number' => array(
        'label' => __('Funfact Number', 'getleads'),
        'desc' => __('Add FunFact number which will Counting', 'getleads'),
        'type' => 'text',
        'value' => '10',
    ),
    'funfact_title' => array(
        'label' => __('Funfact name', 'getleads'),
        'desc' => __('Add FunFact Name', 'getleads'),
        'type' => 'text',
        'value' => 'HTML/CSS',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'getleads'),
        'desc' => __('Select the alignment for the funfact text', 'getleads'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'text-left' => __('Left', 'getleads'),
            'text-center' => __('Center', 'getleads'),
            'text-right' => __('Right', 'getleads'),
        ),
        'value' => 'none'
    ),
);
