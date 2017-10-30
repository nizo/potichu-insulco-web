<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'twitterpost' => array(
        'label' => __('Show Twitter Post', 'getleads'),
        'type' => 'short-text',
        'value' => '3',
        'desc' => __('How many post will be display', 'getleads'),
    ),
    'twitterid' => array(
        'label' => __('Twitter Widget ID', 'getleads'),
        'desc' => __('you need twitter feed id. check this easily you can create twitter ID http://goo.gl/YFwdZN', 'getleads'),
        'type' => 'text',
        'value' => '569000074533814272',
    ),
);
