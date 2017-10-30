<?php if (!defined('FW')) die('Forbidden'); ?>



<?php
$style = $atts['tab_item']['selected_value'];

$icon = $before_btn = $after_btn = '';
$btn = $atts['btn_alignment'];

if (isset($btn) && $btn != '') {
    $before_btn = '<div class="' . $btn . '">';
    $after_btn = '</div>';
}
?>

<?php if ($style == 'button'): ?>

    <?php echo $before_btn; ?> 
    <?php
    foreach ($atts['tab_item']['button']['button_settings'] as $btn):


        if ($btn['icon'] != '') {
            $icon_position = $btn['icon_position'];
            $icon = '<i class="' . $btn['icon_position'] . ' ' . $btn['icon'] . '"></i>';
        }
        ?>

        <a target="<?php echo $btn['target']; ?>" href="<?php echo esc_url($btn['link']); ?>" class="btn btn-<?php echo $btn['size']; ?> btn-<?php echo $btn['shadow']; ?> btn-<?php getleads_theme_button_class($btn['style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['label']); ?></a>
        <?php
    endforeach;
    echo $after_btn;
endif;
?>

<?php if ($style == 'image'): ?>
    <?php echo $before_btn; ?> 
    <?php foreach ($atts['tab_item']['image']['image_button'] as $image): ?>
        <a target="<?php echo esc_attr($image['target']);?>" href="<?php echo esc_url($image['link']);?>"><img src="<?php echo esc_url($image['image']['url']);?>" class="m-t wow zoomIn" alt="<?php echo esc_attr($image['title']);?>"></a>
    <?php endforeach; ?>
    <?php echo $after_btn; ?>
<?php endif; ?>
