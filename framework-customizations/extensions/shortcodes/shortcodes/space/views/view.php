<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if($atts['height'] != 'space-sm' && $atts['height'] != 'space-md' && $atts['height'] != 'space-lg'){
	//$height = '';
	//$custom_spacing = 'style="margin-bottom:'.(int)$atts['height'].'px;"';
	$height = $atts['height'];
	$custom_spacing = '';
	
	?>
		
	<div class="fw-divider-space" style="height: <?php echo  $height; ?>" <?php echo  $custom_spacing; ?> ></div>
	
	<?php
	
}
else{
	$height = $atts['height'];
	$custom_spacing = '';
	?>
		
	<div class="fw-divider-space <?php echo  $height; ?>" <?php echo  $custom_spacing; ?> ></div>
	
	<?php
}
?>
