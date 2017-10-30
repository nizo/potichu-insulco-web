<?php

if (!defined('FW')) {
    die('Forbidden');
}

$template_directory = get_template_directory_uri();
$options = array(
    'list_group' => array(
        'type' => 'group',
        'options' => array(
            'list_items' => array(
                'type' => 'addable-popup',
                'label' => __('List Items', 'getleads'),
                'desc' => __('Add list items', 'getleads'),
                'template' => '{{=item}}',
                'popup-options' => array(
                    'sublist_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'item' => array(
                                'label' => __('Item', 'getleads'),
                                'desc' => __('Enter an item in list', 'getleads'),
                                'type' => 'text',
                            ),
                            'sublist_items' => array(
                                'type' => 'addable-popup',
                                'label' => __('Sublist Items', 'getleads'),
                                'desc' => __('Add sublist items', 'getleads'),
                                'template' => '{{=subitem}}',
                                'popup-options' => array(
                                    'subitem' => array(
                                        'label' => __('Sublist Item', 'getleads'),
                                        'desc' => __('Enter a sublist item', 'getleads'),
                                        'type' => 'text',
                                    ),
                                    'btn_link_group' => array(
                                        'type' => 'group',
                                        'options' => array(
                                            'link' => array(
                                                'label' => __('Link', 'getleads'),
                                                'desc' => __('you can add link if you want', 'getleads'),
                                                'type' => 'text',
                                            ),
                                            'target_subitem' => array(
                                                'type' => 'switch',
                                                'label' => __('', 'getleads'),
                                                'desc' => __('Open link in new window?', 'getleads'),
                                                'value' => '_self',
                                                'right-choice' => array(
                                                    'value' => '_blank',
                                                    'label' => __('Yes', 'getleads'),
                                                ),
                                                'left-choice' => array(
                                                    'value' => '_self',
                                                    'label' => __('No', 'getleads'),
                                                ),
                                            ),
                                        )
                                    ),
                                ),
                            ),
                        )
                    ),
                    'btn_link_group' => array(
                        'type' => 'group',
                        'options' => array(
                            'link' => array(
                                'label' => __('Link', 'getleads'),
                                'desc' => __('you can add link if you want', 'getleads'),
                                'type' => 'text',
                            ),
                            'target' => array(
                                'type' => 'switch',
                                'label' => __('', 'getleads'),
                                'desc' => __('Open link in new window?', 'getleads'),
                                'value' => '_self',
                                'right-choice' => array(
                                    'value' => '_blank',
                                    'label' => __('Yes', 'getleads'),
                                ),
                                'left-choice' => array(
                                    'value' => '_self',
                                    'label' => __('No', 'getleads'),
                                ),
                            ),
                        )
                    ),
                ),
            ),
            'separator' => array(
                'type' => 'switch',
                'label' => __('', 'getleads'),
                'desc' => __('Separate each list item by a line?', 'getleads'),
                'value' => '_self',
                'right-choice' => array(
                    'value' => 'list-bordered',
                    'label' => __('Yes', 'getleads'),
                ),
                'left-choice' => array(
                    'value' => '',
                    'label' => __('No', 'getleads'),
                ),
            ),
        )
    ),
    'list_type' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'getleads'),
                'desc' => __('Make a numbered list or add an icon to list items', 'getleads'),
                'attr' => array('class' => 'getleads-checkbox-float-left'),
                'value' => 'list-default',
                'type' => 'radio',
                'choices' => array(
                    'list-default' => __('None', 'getleads'),
                    'list-numbers' => __('Number', 'getleads'),
                    'list-icon' => __('Icon', 'getleads'),
                ),
            )
        ),
        'choices' => array(
            'list-default' => array(),
            'list-numbers' => array(),
            'list-icon' => array(
                'icon' => array(
                    'type' => 'icon',
                    'label' => __('', 'getleads')
                ),
            ),
        ),
        'show_borders' => false,
    ),
    'class' => array(
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'type' => 'text',
        'value' => '',
        'help' => __('You can use this class to further style this shortcode', 'getleads'),
    ),
);
