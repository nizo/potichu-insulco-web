<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'timelines' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'timeline_style' => array(
                'label' => __('timeline Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'timeline-1',
                'desc' => __('Select timeline style.', 'getleads'),
                'choices' => array(
                    'timeline-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/timeline-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/timeline-style1.jpg'
                        ),
                    ),
                    'timeline-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/timeline-style2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/timeline-style2.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'timeline-1' => array(
                'timeline_item' => array(
                    'type' => 'addable-popup',
                    'limit' => '3',
                    'label' => __('timeline Item', 'getleads'),
                    'popup-title' => __('Add/Edit timeline Item', 'getleads'),
                    'desc' => __('Add timeline item one by one', 'getleads'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'event_date' => array(
                            'type' => 'text',
                            'label' => __('Event Time Range', 'getleads'),
                            'desc' => __('Enter your event time range', 'getleads'),
                            'value' => '12:30 - 1:00pm',
                        ),
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Type your timeline title', 'getleads'),
                            'type' => 'text',
                        ),
                        'message' => array(
                            'label' => __('Message', 'getleads'),
                            'desc' => __('Type your timeline message', 'getleads'),
                            'type' => 'textarea',
                        ),
                    ),
                )
            ),
            'timeline-2' => array(
                'tabs' => array(
                    'type' => 'addable-popup',
                    'label' => __('Timeline Item', 'getleads'),
                    'popup-title' => __('Add/Edit Timeline Item', 'getleads'),
                    'desc' => __('Add tabs', 'getleads'),
                    'template' => '{{=tab_title}}',
                    'popup-options' => array(
                        'tab_title' => array(
                            'type' => 'group',
                            'options' => array(
                                'tab_title' => array(
                                    'type' => 'text',
                                    'label' => __('Tab Title', 'getleads'),
                                    'desc' => __('Enter tab title', 'getleads')
                                )
                            )
                        ),
                        'content_item' => array(
                            'label' => __('Content Item', 'getleads'),
                            'type' => 'addable-popup',
                            'template' => 'Content : {{- content_title }}',
                            'popup-options' => array(
                                'content' => array(
                                    'type' => 'group',
                                    'options' => array(
                                        'event_date' => array(
                                            'type' => 'text',
                                            'label' => __('Event Time Range', 'getleads'),
                                            'desc' => __('Enter your event time range', 'getleads'),
                                            'value' => '12:30 - 1:00pm',
                                        ),
                                        'content_title' => array(
                                            'type' => 'text',
                                            'label' => __('Content Title', 'getleads'),
                                            'desc' => __('Enter content title', 'getleads')
                                        ),
                                        'content_message' => array(
                                            'type' => 'textarea',
                                            'label' => __('Content Message', 'getleads'),
                                            'desc' => __('Type content message', 'getleads')
                                        ),
                                    )
                                )
                            )
                        ),
                    )
                ),
            ),
        ),
        'show_borders' => false,
    ),
//    'txt_color' => array(
//        'type' => 'color-picker',
//        'label' => __('Text Color', 'getleads'),
//        'value' => '#ffffff',
//        'desc' => __('Select Text Color', 'getleads')
//    ),
);
