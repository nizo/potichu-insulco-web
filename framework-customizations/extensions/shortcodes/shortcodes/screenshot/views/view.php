<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$images = '';

$slides = $atts['screenshot_images'];
?>

<div class="owl-carousel-screenshots" data-wow-offset="120" data-wow-duration="1.5s">
    <?php
    foreach ($slides as $slide) :
        if (!empty($slide['images'])) {
            $images = $slide['images']['url'];
        }
        ?>

        <!--
		<div><a href="<?php echo esc_url($images); ?>" class="mp-gallery" ><img src="<?php echo esc_url($images); ?>" class="shadow" alt="<?php echo esc_attr($slide['text']); ?>"></a></div>
		-->
		
		<div><a href="<?php echo esc_url($images); ?>" class="mp-gallery" ><img src="<?php echo esc_url($images); ?>" class="shadow" alt="<?php echo esc_attr($slide['text']); ?>"></a>
		<div class="screenshot-description"><?php echo esc_attr($slide['text']); ?></div></div>
		
		
            <?php endforeach; ?>
</div>