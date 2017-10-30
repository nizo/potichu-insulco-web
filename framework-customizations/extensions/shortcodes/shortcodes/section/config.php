<?php

if (!defined('FW'))
    die('Forbidden');

$cfg = array(
    'page_builder' => array(
        'tab' => __('Layout Elements', 'getleads'),
        'title' => __('Section', 'getleads'),
        'description' => __('Add a Section', 'getleads'),
        'popup_size' => 'medium',
        'title_template' => '{{-title}}{{ if (o.section_title) { }} : <strong>{{= o.section_title}}</strong>{{ } }}',
        
        'type' => 'section' // WARNING: Do not edit this
    ),
);
