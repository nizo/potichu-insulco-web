<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'socials' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'social_style' => array(
                'label' => __('Social Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'social-1',
                'desc' => __('Select Social style.', 'getleads'),
                'choices' => array(
                    'social-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style1.jpg'
                        ),
                    ),
                    'social-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style2.jpg'
                        ),
                    ),
                    'social-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style4.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/social-style4.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'social-1' => array(
                'social_item' => array(
                    'type' => 'addable-popup',
                    'limit' => '3',
                    'label' => __('Social Item', 'getleads'),
                    'popup-title' => __('Add/Edit Social Item', 'getleads'),
                    'desc' => __('Add Social item one by one', 'getleads'),
                    'template' => '{{=title}}',
                    'popup-options' => array(
                        'title' => array(
                            'label' => __('Social Title', 'getleads'),
                            'desc' => __('Type your social share title', 'getleads'),
                            'type' => 'text',
                            'value' => 'Share on Facebook'
                        ),
                        'link' => array(
                            'label' => __('Social Link', 'getleads'),
                            'desc' => __('Where should your Social link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'background-color' => array(
                            'label' => __('Background', 'getleads'),
                            'desc' => __('Choose your social link background color', 'getleads'),
                            'type' => 'color-picker',
                            'value' => '#FF0000',
                        ),
                        'icon' => array(
                            'label' => __('Social Icon', 'getleads'),
                            'desc' => __('Select your social icon', 'getleads'),
                            'type' => 'new-icon',
                        ),
                    ),
                )
            ),
            'social-2' => array(
                'twiter_user_name' => array(
                    'type' => 'text',
                    'label' => __('Twitter User Name', 'getleads'),
                    'desc' => __('Input Twitter User Name', 'getleads'),
                    'value' => '@envato',
                ),
                'link' => array(
                    'label' => __('Twitter Link', 'getleads'),
                    'desc' => __('Where should your twitter link to', 'getleads'),
                    'type' => 'text',
                    'value' => '#'
                ),
                'twiter_id' => array(
                    'type' => 'text',
                    'label' => __('Twitter ID', 'getleads'),
                    'desc' => __('Input Twitter ID for twitter feed', 'getleads'),
                    'value' => '644499500418117632',
                ),
            ),
            'social-3' => array(
                'documentation' => array(
                    'label' => esc_html__('Instagram', 'getleads'),
                    'type' => 'html',
                    'html' => '<p>You should create your own Client ID and Access Token from here <b><i>URL : http://bit.ly/22ErApq</i></b></p> <br /> Make sure username and client access token need to be create same account.',
                ),
                'access_token' => array(
                    'type' => 'text',
                    'label' => esc_html__('Access Token', 'getleads'),
                    'value' => '355387859.fe38278.7ba069fad87d4554b4b',
                    'desc' => esc_html__('Add your own Access token', 'getleads'),
                ),
                'client_id' => array(
                    'type' => 'text',
                    'label' => esc_html__('Client ID', 'getleads'),
                    'value' => 'fe38278c378947c4812fd5173ce60',
                    'desc' => esc_html__('Add your own Client ID', 'getleads'),
                ),
                'instauser_name' => array(
                    'type' => 'text',
                    'label' => __('Instagram User Name', 'getleads'),
                    'desc' => __('Input Your own Instagram User Name. Others username wont work', 'getleads'),
                    'value' => ''
                ),
            ),
        ),
        'show_borders' => false,
    ),
);
