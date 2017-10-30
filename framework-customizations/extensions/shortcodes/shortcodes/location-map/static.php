<?php if (!defined('FW')) die('Forbidden');



$shortcodes_extension = fw_ext('shortcodes');
$shortcodes_extension_theme = fw()->extensions->get( 'shortcodes' )->get_shortcode('map');
wp_enqueue_script(
	'fw-shortcode-location-map-script',
	fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/location-map/static/js/location.js'),
	array('jquery'),
	fw()->manifest->get_version(),
	true
);