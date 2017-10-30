<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tabs_position_picker' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'tabs_type' => array(
                'label' => __('Type', 'getleads'),
                'type' => 'image-picker',
                'value' => '',
                'desc' => __('Choose the tabs type', 'getleads'),
                'choices' => array(
                    'one' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES . '/image-picker/special-tab11.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES . '/image-picker/special-tab11.jpg'
                        ),
                    ),
                    'two' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES . '/image-picker/special-tab22.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES . '/image-picker/special-tab22.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'one' => array(
                'tabs' => array(
                    'type' => 'addable-popup',
                    'size' => 'large',
                    'label' => __('Tabs', 'getleads'),
                    'popup-title' => __('Add/Edit Tab', 'getleads'),
                    'desc' => __('Add tabs', 'getleads'),
                    'template' => '{{=tab_title}}',
                    'popup-options' => array(
                        'tab_title' => array(
                            'type' => 'text',
                            'label' => __('Tab Title', 'getleads'),
                            'desc' => __('Enter tab title', 'getleads')
                        ),
                        'tab_content_top_title' => array(
                            'type' => 'text',
                            'label' => __('Content Top Main Title', 'getleads'),
                            'desc' => __('Enter Top Content Title', 'getleads')
                        ),
                        'tab_content_top_subtitle' => array(
                            'type' => 'text',
                            'label' => __('Content Top Main Sub-Title', 'getleads'),
                            'desc' => __('Enter Top Content Sub-Title', 'getleads')
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
                                    'tab_content' => array(
                                        'type' => 'addable-popup',
                                        'size' => 'large',
                                        'label' => __('Tab Content', 'getleads'),
                                        'popup-title' => __('Add/Edit Tab Content', 'getleads'),
                                        'desc' => __('Add tab content item', 'getleads'),
                                        'template' => '{{=tab_content_title}}',
                                        'popup-options' => array(
                                            'tab_content_title' => array(
                                                'type' => 'text',
                                                'label' => __('Content Title', 'getleads'),
                                                'desc' => __('Enter Content Tab Title', 'getleads')
                                            ),
                                            'tab_content_icon' => array(
                                                'type' => 'new-icon',
                                                'label' => __('Content Icon', 'getleads'),
                                                'desc' => __('Choose tab Content icon', 'getleads')
                                            ),
                                            'tab_main_content' => array(
                                                'type' => 'textarea',
                                                'label' => __('Main Content', 'getleads'),
                                                'desc' => __('Enter Main Tab content', 'getleads')
                                            ),
                                        )
                                    )
                                ),
                                'image' => array(
                                    'tab_image' => array(
                                        'label' => __('', 'getleads'),
                                        'desc' => __('Upload Tab image', 'getleads'),
                                        'type' => 'upload'
                                    ),
                                ),
                            ),
                            'show_borders' => false,
                        ),
                    )
                ),
            ),
            'two' => array(
                'tabs2' => array(
                    'type' => 'addable-popup',
                    'label' => __('Tabs', 'getleads'),
                    'popup-title' => __('Add/Edit Tab', 'getleads'),
                    'desc' => __('Add tabs', 'getleads'),
                    'template' => '{{=tab_title}}',
                    'size' => 'large',
                    'popup-options' => array(
                        'tab_title' => array(
                            'type' => 'group',
                            'options' => array(
                                'tab_title' => array(
                                    'type' => 'text',
                                    'label' => __('Tab Title', 'getleads'),
                                    'desc' => __('Enter tab title', 'getleads')
                                ),
                                'tab_image' => array(
                                    'type' => 'upload',
                                    'label' => __('Tab Image', 'getleads'),
                                    'desc' => __('Upload tab image', 'getleads')
                                ),
                            )
                        ),
                        'content' => array(
                            'type' => 'group',
                            'options' => array(
                                'tab_content_title' => array(
                                    'type' => 'text',
                                    'label' => __('Content Title', 'getleads'),
                                    'desc' => __('Enter content title', 'getleads')
                                ),
                                'tab_content_sub_title' => array(
                                    'type' => 'text',
                                    'label' => __('Content Sub-Title', 'getleads'),
                                    'desc' => __('Enter content sub-title', 'getleads')
                                ),
                                'tab_content_image' => array(
                                    'label' => __('Content Image', 'getleads'),
                                    'desc' => __('Upload an image', 'getleads'),
                                    'type' => 'upload'
                                ),
                                'tab_content' => array(
                                    'type' => 'textarea',
                                    'teeny' => true,
                                    'reinit' => true,
                                    'label' => __('Tab Content', 'getleads'),
                                    'desc' => __('Enter tab content', 'getleads')
                                ),
                                'tab_list_item' => array(
                                    'type' => 'addable-option',
                                    'label' => __('', 'getleads'),
                                    'desc' => __('Add list item', 'getleads'),
                                    'option' => array('type' => 'text'),
                                    'add-button-text' => __('Add list', 'getleads'),
                                    'sortable' => true,
                                )
                            )
                        )
                    )
                ),
            ),
        )
    ),
);
