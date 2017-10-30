<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'others_settings' => array(
        'title' => esc_html__('Others Settings', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'header-others-box' => array(
                'title' => esc_html__('Others Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'mailchimp' => array(
                        'type' => 'text',
                        'label' => esc_html__('Mailchimp URL', 'getleads'),
                        'desc' => esc_html__('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'getleads'),
                        'value' => wp_kses_post('http://facebook.us8.list-manage.com/subscribe/post-json?u=85f515a08b87483d03fee7755&id=dff5d2324f', 'getleads'),
                    ),
                ),
            )
        ),
    ),
);
