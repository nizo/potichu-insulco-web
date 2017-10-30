<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'test1z' => array(
		'label' => __('Type of Transition', 'getleads'),
		'desc'  => __('Type of transition between slides', 'getleads'),
		'type'  => 'select',
		'choices' => array(
			'horizontal' => __('Horizontal', 'getleads'),
			'vertical' => __('Vertical', 'getleads'),
			'fade' => __('Fade', 'getleads')
		),
		'value' => 'horizontal',
	)
);
