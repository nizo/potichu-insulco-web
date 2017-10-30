<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'title' => array(
        'type' => 'text',
        'label' => __('Heading Title', 'getleads'),
        'desc' => __('Write the heading title content', 'getleads'),
    ),
    'heading' => array(
        'type' => 'select',
        'label' => __('Heading Size', 'getleads'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'subtitle' => array(
        'type' => 'text',
        'label' => __('Heading Subtitle', 'getleads'),
        'desc' => __('Write the heading subtitle content', 'getleads')
    ),
    
    'subheading' => array(
        'type' => 'select',
        'label' => __('Sub Heading Size', 'getleads'),
        'choices' => array(
            'h1' => 'H1',
            'h2' => 'H2',
            'h3' => 'H3',
            'h4' => 'H4',
            'h5' => 'H5',
            'h6' => 'H6',
        )
    ),
    'centered' => array(
        'type' => 'switch',
        'label' => __('Centered', 'getleads'),
//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'getleads'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'getleads'),
//		),
    ),
    'color' => array(
        'type' => 'color-picker',
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'label' => __('Heading Color', 'getleads'),
        'desc' => __('If you want use diffrent color for parallax or video section', 'getleads'),
        'help' => __('If you want use diffrent heading color for parallax or video section. you can easily change from here', 'getleads'),
    ),
//    'separator' => array(
//        'type' => 'multi-picker',
//        'label' => false,
//        'desc' => false,
//        'picker' => array(
//            'show_separator' => array(
//                'type' => 'switch',
//                'value' => '',
//                'label' => __('Separator', 'getleads'),
//                'desc' => __('Show separator?', 'getleads'),
//                'left-choice' => array(
//                    'value' => 'no',
//                    'label' => __('No', 'getleads'),
//                ),
//                'right-choice' => array(
//                    'value' => 'yes',
//                    'label' => __('Yes', 'getleads'),
//                )
//            ),
//        ),
//    ),
    'class' => array(
        'type' => 'text',
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter a custom CSS class', 'getleads'),
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS.', 'getleads'),
    ),
);
