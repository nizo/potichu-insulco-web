<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$template_directory = get_template_directory_uri();
$options = array(
	'text_align' => array(
		'label' => __( 'Text Alignment', 'getleads' ),
		'desc'  => __( 'Select the prefered text alignment', 'getleads' ),
		'type'  => 'image-picker',
		'value' => '',
		'choices' => array(
			'getleads-quote-left' => array(
				'small' => array(
					'height' => 50,
					'src' => GETLEADS_IMAGES .'/image-picker/left-position.jpg',
					'title' => __('Left','getleads')
				),
			),
			'getleads-quote-center' => array(
				'small' => array(
					'height' => 50,
					'src' => GETLEADS_IMAGES .'/image-picker/center-position.jpg',
					'title' => __('Center','getleads')
				),
			),
			'getleads-quote-right' => array(
				'small' => array(
					'height' => 50,
					'src' => GETLEADS_IMAGES .'/image-picker/right-position.jpg',
					'title' => __('Right','getleads')
				),
			),
		),
	),
	'text'  => array(
		'label'   => __( 'Text', 'getleads' ),
		'desc'    => __( 'Enter quote text', 'getleads' ),
		'value'   => '',
		'type'    => 'wp-editor',
		'tinymce' => true,
		'reinit'  => true,
		'wpautop' => false,
	),
    'text_group' => array(
        'type' => 'group',
        'options' => array(
            'author'  => array(
                'label' => __( 'Author', 'getleads' ),
                'desc'  => __( 'Enter the quote author', 'getleads' ),
                'type'  => 'text',
                'value' => ''
            ),
            'author_link'   => array(
                'label' => __( 'Link', 'getleads' ),
                'desc'  => __( 'Enter the author link', 'getleads' ),
                'type'  => 'text',
                'value' => ''
            ),
        )
    ),
	'font_size' => array(
		'label' => __( 'Font Size', 'getleads' ),
		'desc'  => __( 'Select font size', 'getleads' ),
		'attr'  => array( 'class' => 'getleads-checkbox-float-left' ),
		'type'  => 'radio',
		'value' => 'getleads-quote-md',
		'choices' => array(
			'getleads-quote-sm' => __( 'Small', 'getleads' ),
			'getleads-quote-md' => __( 'Medium', 'getleads' ),
			'getleads-quote-lg' => __( 'Large', 'getleads' ),
		),
	),
	'class'  => array(
		'label' => __( 'Custom Class', 'getleads' ),
		'desc'  => __( 'Enter custom CSS class', 'getleads' ),
		'type'  => 'text',
		'value' => '',
		'help'  => __( 'you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'getleads' ),
	),
);