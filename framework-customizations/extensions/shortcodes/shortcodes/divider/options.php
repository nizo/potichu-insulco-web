<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'type' => array(
        'label' => __('Type', 'getleads'),
        'desc' => __('Select divider type', 'getleads'),
        'type' => 'image-picker',
        'value' => 'getleads-line-solid',
        'choices' => array(
            'getleads-line-solid' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/solid.jpg',
                    'title' => __('Solid Line', 'getleads')
                ),
            ),
            'getleads-line-dashed' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/dashed.jpg',
                    'title' => __('Dashed Line', 'getleads')
                ),
            ),
            'getleads-line-dotted' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/dotted.jpg',
                    'title' => __('Dotted Line', 'getleads')
                ),
            ),
            'getleads-line-double' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/double.jpg',
                    'title' => __('Double Line', 'getleads')
                ),
            ),
            'getleads-line-thick' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/thick.jpg',
                    'title' => __('Thick Line', 'getleads')
                ),
            ),
            'getleads-divider-space' => array(
                'small' => array(
                    'height' => 50,
                    'src' => GETLEADS_IMAGES . '/image-picker/space_gap.jpg',
                    'title' => __('Space', 'getleads')
                ),
            ),
        ),
    ),
    'divider_size' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'size' => array(
                'label' => __('Height', 'getleads'),
                'desc' => __('Select the top and bottom margin in px', 'getleads'),
                'attr' => array('class' => 'getleads-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'space-sm' => __('Small', 'getleads'),
                    'space-md' => __('Medium', 'getleads'),
                    'space-lg' => __('Large', 'getleads'),
                    'custom' => __('Custom', 'getleads'),
                ),
                'value' => 'space-md'
            ),
        ),
        'choices' => array(
            'custom' => array(
                'margin_top' => array(
                    'label' => __('Margin Top', 'getleads'),
                    'desc' => __('Enter margin-top in px', 'getleads'),
                    'attr' => array('class' => 'getleads-option-width-small'),
                    'type' => 'short-text',
                    'value' => ''
                ),
                'margin_bottom' => array(
                    'label' => __('Margin Bottom', 'getleads'),
                    'attr' => array('class' => 'getleads-option-width-small'),
                    'desc' => __('Enter margin-bottom in px', 'getleads'),
                    'type' => 'short-text',
                    'value' => ''
                ),
            ),
            'no' => array(),
        ),
        'show_borders' => false,
    ),
    'width' => array(
        'label' => __('Width', 'getleads'),
        'desc' => __('Select the width size in %', 'getleads'),
        'type' => 'radio-text',
        'choices' => array(
            '25' => __('25%', 'getleads'),
            '50' => __('50%', 'getleads'),
            '100' => __('100%', 'getleads'),
        ),
        'custom' => 'custom_width',
        'value' => '100'
    ),
    'bg_color' => array(
        'label' => __('Color', 'getleads'),
        'desc' => __('Select divider color', 'getleads'),
        'value' => '',
        'type' => 'color-picker'
    ),
    'special_divider' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'selected_value' => array(
                'label' => __('Add Element', 'getleads'),
                'desc' => __('Make a special divider by adding an icon or text to it', 'getleads'),
                'attr' => array('class' => 'getleads-checkbox-float-left'),
                'value' => 'none',
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'getleads'),
                    'text' => __('Text', 'getleads'),
                    'icon' => __('Icon', 'getleads'),
                ),
            )
        ),
        'choices' => array(
            'text' => array(
                'title_text' => array(
                    'label' => __('', 'getleads'),
                    'desc' => __('This text will be displayed on the divider', 'getleads'),
                    'type' => 'text',
                    'value' => '',
                ),
                'color' => array(
                    'label' => __('Text Color', 'getleads'),
                    'desc' => __('Select the text color', 'getleads'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'show_bg' => array(
                    'type' => 'switch',
                    'label' => __('Background', 'getleads'),
                    'desc' => __('Add a background to your text?', 'getleads'),
                    'value' => 'no',
                    'right-choice' => array(
                        'value' => 'yes',
                        'label' => __('Yes', 'getleads'),
                    ),
                    'left-choice' => array(
                        'value' => 'no',
                        'label' => __('No', 'getleads'),
                    ),
                ),
                'position' => array(
                    'label' => __('Position', 'getleads'),
                    'desc' => __('Select text position', 'getleads'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'getleads')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'getleads')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'getleads')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'getleads'),
                    'desc' => __('Select divider size', 'getleads'),
                    'attr' => array('class' => 'getleads-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'getleads-divider-size-md',
                    'choices' => array(
                        'getleads-divider-size-sm' => __('Small', 'getleads'),
                        'getleads-divider-size-md' => __('Medium', 'getleads'),
                        'getleads-divider-size-lg' => __('Large', 'getleads'),
                    ),
                ),
            ),
            'icon' => array(
                'icon_class' => array(
                    'type' => 'icon',
                    'label' => __('', 'getleads')
                ),
                'color' => array(
                    'label' => __('Icon Color', 'getleads'),
                    'desc' => __('Select the icon color', 'getleads'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
                'position' => array(
                    'label' => __('Position', 'getleads'),
                    'desc' => __('Select icon position', 'getleads'),
                    'type' => 'image-picker',
                    'value' => '',
                    'choices' => array(
                        'title-left' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/left-position.jpg',
                                'title' => __('Left', 'getleads')
                            ),
                        ),
                        '' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/center-position.jpg',
                                'title' => __('Center', 'getleads')
                            ),
                        ),
                        'title-right' => array(
                            'small' => array(
                                'height' => 50,
                                'src' => GETLEADS_IMAGES . '/image-picker/right-position.jpg',
                                'title' => __('Right', 'getleads')
                            ),
                        ),
                    ),
                ),
                'divider_size' => array(
                    'label' => __('Size', 'getleads'),
                    'desc' => __('Select divider size', 'getleads'),
                    'attr' => array('class' => 'getleads-checkbox-float-left'),
                    'type' => 'radio',
                    'value' => 'getleads-divider-size-md',
                    'choices' => array(
                        'getleads-divider-size-sm' => __('Small', 'getleads'),
                        'getleads-divider-size-md' => __('Medium', 'getleads'),
                        'getleads-divider-size-lg' => __('Large', 'getleads'),
                    ),
                ),
            ),
            'none' => array(),
        ),
        'show_borders' => false,
    ),
    'link_id' => array(
        'type' => 'text',
        'label' => __('Link ID', 'getleads'),
        'desc' => __('Enter a custom CSS id for this divider', 'getleads'),
        'help' => sprintf("%s", __('Use this ID in any URL link in the page in order to anchor link to this divider', 'getleads')),
        'value' => '',
    ),
    'class' => array(
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'getleads'),
        'type' => 'text',
        'value' => '',
    ),
);
