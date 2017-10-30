<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'type' => array(
        'label' => __('Type', 'getleads'),
        'desc' => __('Select the notification type', 'getleads'),
        'value' => 'getleads-alert-info',
        'type' => 'image-picker',
        'choices' => array(
            'success' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/notification-congratulation.jpg',
                    'title' => __('Congratulations', 'getleads')
                ),
            ),
            'info' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/notification-information.jpg',
                    'title' => __('Information', 'getleads')
                ),
            ),
            'warning' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/notification-warning.jpg',
                    'title' => __('Alert', 'getleads')
                ),
            ),
            'danger' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/notification-error.jpg',
                    'title' => __('Error', 'getleads')
                ),
            ),
        ),
    ),
    'message' => array(
        'label' => __('Message', 'getleads'),
        'desc' => __('Notification message', 'getleads'),
        'type' => 'text',
        'value' => __('Message!', 'getleads'),
    ),
);
