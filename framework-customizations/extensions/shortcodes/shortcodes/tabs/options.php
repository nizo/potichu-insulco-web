<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options = array(

    'tabs_position_picker' => array(
        'type'  => 'multi-picker',
        'label' => false,
        'desc'  => false,
        'picker' => array(
            'tabs_type' => array(
                'label' => __('Type', 'getleads'),
                'type'  => 'image-picker',
                'value' => '',
                'desc'  => __('Choose the tabs type', 'getleads'),
                'choices' => array(
                    'one' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES .'/image-picker/framed-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES .'/image-picker/framed-top.jpg'
                        ),
                    ),
                    'two' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES .'/image-picker/framed-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES .'/image-picker/framed-side.jpg'
                        ),
                    ),
                    'three' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES .'/image-picker/minimal-top.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES .'/image-picker/minimal-top.jpg'
                        ),
                    ),
                    'four' => array(
                        'small' => array(
                            'height' => 75,
                            'src' => GETLEADS_IMAGES .'/image-picker/minimal-side.jpg',
                        ),
                        'large' => array(
                            'height' => 208,
                            'src' => GETLEADS_IMAGES .'/image-picker/minimal-side.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'one' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'getleads'),
                    'desc'  => __('Make tabs justified', 'getleads'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'getleads'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'getleads'),
                    )
                ),
            ),
            'three' => array(
                'tabs_justified' => array(
                    'type'  => 'switch',
                    'value' => '',
                    'label' => __('', 'getleads'),
                    'desc'  => __('Make tabs justified', 'getleads'),
                    'left-choice' => array(
                        'value' => '',
                        'label' => __('No', 'getleads'),
                    ),
                    'right-choice' => array(
                        'value' => 'nav-justified',
                        'label' => __('Yes', 'getleads'),
                    )
                ),
            )
        )
    ),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'Tabs', 'getleads' ),
		'popup-title'   => __( 'Add/Edit Tab', 'getleads' ),
		'desc'          => __( 'Add tabs', 'getleads' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
            'tab_title' => array(
                'type' => 'group',
                'options' => array(
                    'tab_title'   => array(
                        'type'  => 'text',
                        'label' => __('Title', 'getleads'),
                        'desc' => __('Enter tab title', 'getleads')
                    ),
					
                    'tab_icon' => array(
                        'type' => 'icon',
                        'label' => __( 'Icon', 'getleads' ),
                        'desc' => __( 'Choose tab icon', 'getleads' )
                    ),
					
                )
            ),
            'content' => array(
                'type' => 'group',
                'options' => array(
                    'tab_content_top_title'   => array(
                        'type'  => 'text',
                        'label' => __('Content Title', 'getleads'),
                        'desc' => __('Enter content title', 'getleads')
                    ),
					'tab_content_top_subtitle'   => array(
                        'type'  => 'text',
                        'label' => __('Content Sub Title', 'getleads'),
                        'desc' => __('Enter content Sub title', 'getleads')
                    ),
					
					'tab_content_main_title'   => array(
                        'type'  => 'text',
                        'label' => __('Content Main Title', 'getleads'),
                        'desc' => __('Enter content title', 'getleads')
                    ),
					
                    'tab_main_content' => array(
                        'type'   => 'wp-editor',
                        'teeny'  => true,
                        'reinit' => true,
                        'label' => __('Main Content', 'getleads'),
                        'desc' => __('Enter Main Tab content', 'getleads')
                    ),
					
					'tab_content_main_image'   => array(
                        'type'  => 'upload',
                        'label' => __('Content Main Image', 'getleads'),
                        'desc' => __('Enter Main Content Image', 'getleads')
                    ),
					
                )
            )

		)
	),
    'class'  => array(
        'attr'  => array( 'class' => 'border-bottom-none'),
        'label'   => __( 'Custom Class', 'getleads' ),
        'desc'    => __( 'Enter custom CSS class', 'getleads' ),
        'type'    => 'text',
        'help' => __('You can use this class to further style this shortcode by adding your custom CSS in the <strong>style.css</strong> file. This file is located on your server in the <strong>child-theme</strong> folder.','getleads'),
        'value' => '',
    ),
);