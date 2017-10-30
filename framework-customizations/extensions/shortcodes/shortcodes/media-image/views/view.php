<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
if (empty($atts['image'])) {
    return;
}


    $image = $atts['image']['url'];

if(isset($atts['alt']) != ''){
    $alt = $atts['alt'];
}
else{
    $alt = $atts['image']['attachment_id']; 
}
?>
<div class="getleads-single-image <?php //echo esc_attr($position); ?>" <?php //echo  $style; ?>>
    <?php if (empty($atts['link'])) : ?>
    <img src="<?php echo esc_url($image); ?>" class="img-responsive" alt="<?php echo esc_attr($alt) ?>"  />
    <?php else : ?>
        <a href="<?php echo esc_url($atts['link']); ?>" target="<?php echo  $atts['target'] ?>">
            <img src="<?php echo esc_url($image) ?>" class="img-responsive" alt="<?php echo esc_attr($alt) ?>"  />
        </a>
    <?php endif ?>
</div>