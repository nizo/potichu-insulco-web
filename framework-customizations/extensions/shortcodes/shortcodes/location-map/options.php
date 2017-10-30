<?php

if (!defined('FW')) {
    die('Forbidden');
}

$map_shortcode = fw_ext('shortcodes')->get_shortcode('map');
$options = array(
    'locationtitle' => array(
        'label' => __('Title', 'getleads'),
        'desc' => __('Enter the Location Title ', 'getleads'),
        'type' => 'text',
        'value' => 'Get Leads Locations'
    ),
    'locations' => array(
        'label' => __('Locations', 'getleads'),
        'popup-title' => __('Add/Edit Testimonial', 'getleads'),
        'desc' => __('Add locations which display in dropdown list.', 'getleads'),
        'type' => 'addable-popup',
        'template' => '{{=location}}',
        'popup-options' => array(
            'location' => array(
                'label' => __('Address', 'getleads'),
                'desc' => __('Enter the Location Address here. you will found ', 'getleads'),
                'type' => 'text'
            ),
        )
    ),
    'markertitle' => array(
        'label' => __('market Title', 'getleads'),
        'desc' => __('Enter marker Title ', 'getleads'),
        'type' => 'text',
        'value' => 'Get Leads Main Branch Address'
    ),
);
