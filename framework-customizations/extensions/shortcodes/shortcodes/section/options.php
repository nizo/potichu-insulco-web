<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'section_title' => array(
        'type' => 'text',
        'label' => __('Sorting title', 'getleads'),
        'value' => '',
        'desc' => __('Enter a name (it is for internal use and will not appear on the front end) ', 'getleads')
    ),
    'is_fullwidth' => array(
        'label' => __('Full Width', 'getleads'),
        'type' => 'switch',
    ),
    'default_spacing' => array(
        'type' => 'radio',
        'label' => __('Section Spacing', 'getleads'),
        'desc' => __('Top and bottom spacing of this section', 'getleads'),
//        'value' => 'sections',
        'choices' => array(
            'sections' => __('Default Spacing', 'getleads'),
            'min-spacing' => __('Min Spacing', 'getleads'),
            'no-spacing' => __('No Spacing', 'getleads'),
            ),
    ),
    'height' => array(
        'label' => __('Height', 'getleads'),
        'desc' => __("Select the section's height in px (Ex: 400) (dont include with <b>px</b>)", "getleads"),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'getleads'),
            'fw-section-height-sm' => __('small', 'getleads'),
            'fw-section-height-md' => __('medium', 'getleads'),
            'fw-section-height-lg' => __('large', 'getleads'),
        ),
        'custom' => 'custom_width',
        'help' => __('This option to set extra height in your section. we have used three classs for extra height which fw-section-height-sm = 350px, fw-section-height-md= 450px , fw-section-height-lg = 650px. you can use your custom height to like just add 400 (dont include with px)', 'getleads'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'getleads'),
                'desc' => __('Select the background for your section', 'getleads'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'getleads'),
                    'color' => __('Color', 'getleads'),
                    'image' => __('Image', 'getleads'),
                    'video' => __('Video', 'getleads'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'getleads'),
                    'desc' => __('Select the background color', 'getleads'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'getleads'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'getleads'),
                            'desc' => __('Enable image overlay color?', 'getleads'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'getleads'),
                                'desc' => __('Select the overlay color', 'getleads'),
                                'value' => 'rgba(0,0,0,0.35)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
                ),
            ),
            'video' => array(
                'video' => array(
                    'label' => __('', 'getleads'),
                    'desc' => __('Insert a YouTube or Vimeo video URL', 'getleads'),
                    'type' => 'text',
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'getleads'),
                            'desc' => __('Enable video overlay color?', 'getleads'),
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
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'getleads'),
                                'desc' => __('Select the overlay color', 'getleads'),
                                'value' => 'rgba(0,0,0,0.55)',
                                'type' => 'rgba-color-picker'
                            ),
                        ),
                    ),
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
    ),
);
