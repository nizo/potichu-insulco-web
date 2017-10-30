<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'contact_item' => array(
        'label' => __('Contact Info', 'getleads'),
        'type' => 'addable-popup',
        'limit' => '3',
        'add-button-text' => 'Add contact box',
        'template' => 'Title : {{-title }}',
        'popup-options' => array(
            'title' => array(
                'label' => __('Title', 'getleads'),
                'desc' => __('Enter the title in here and its not show front-end', 'getleads'),
                'type' => 'text',
            ),
            'tab_item' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'picker' => array(
                    'selected_value' => array(
                        'label' => __('Tab Type', 'getleads'),
                        'desc' => __('Select the tab type', 'getleads'),
                        'attr' => array('class' => 'getleads-checkbox-float-left'),
                        'value' => 'text',
                        'type' => 'radio',
                        'choices' => array(
                            'text' => __('Text', 'getleads'),
                            'image' => __('Image', 'getleads'),
                        ),
                    )
                ),
                'choices' => array(
                    'text' => array(
                        'icon' => array(
                            'label' => __('Icon', 'getleads'),
                            'type' => 'new-icon',
                            'desc' => __('Choose Contact Info Icon', 'getleads'),
                        ),
                        'title' => array(
                            'label' => __('Title', 'getleads'),
                            'desc' => __('Type the contact info title', 'getleads'),
                            'type' => 'text',
                        ),
                        'info' => array(
                            'label' => __('Information', 'getleads'),
                            'desc' => __('Type your informatiom what you want', 'getleads'),
                            'type' => 'text',
                        ),
                    ),
                    'image' => array(
                        'tab_image' => array(
                            'label' => __('', 'getleads'),
                            'desc' => __('Upload Tab image', 'getleads'),
                            'type' => 'upload'
                        ),
                        'circle' => array(
                            'type' => 'switch',
                            'label' => __('Image Circle', 'getleads'),
                            'desc' => __('Select here if you want to circle your image', 'getleads'),
                            'right-choice' => array(
                                'value' => 'img-circle',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'img_alt' => array(
                            'label' => __('Image Alt', 'getleads'),
                            'desc' => __('add image alt tag', 'getleads'),
                            'type' => 'text'
                        ),
                    ),
                ),
                'show_borders' => false,
            ),
        ),
    ),
    'center' => array(
        'type' => 'switch',
        'label' => __('Text Center', 'getleads'),
        'desc' => __('Select here if you want to center your text alignment', 'getleads'),
        'right-choice' => array(
            'value' => 'text-center',
            'label' => __('Yes', 'getleads'),
        ),
        'left-choice' => array(
            'value' => 'self',
            'label' => __('No', 'getleads'),
        ),
    ),
);
