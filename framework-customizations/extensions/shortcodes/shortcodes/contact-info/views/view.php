<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$icon = $atts['icon'];
$title = $atts['title'];
$info_item = $atts['info_item'];
?>
<div class="c4 contact-divider text-white p-b-md text-center">
    <i class="<?php echo esc_attr($icon);?>"></i>
    <h5 class="f-w-900"><?php echo esc_attr($title);?></h5>
    <p><?php echo esc_attr($info_item);?></p>
</div>

