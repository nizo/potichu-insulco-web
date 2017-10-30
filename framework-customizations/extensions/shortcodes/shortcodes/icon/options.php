<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'new-icon',
		'label' => __( 'Icon', 'getleads' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'getleads' ),
		'desc'  => __( 'Icon title', 'getleads' ),
	)
);