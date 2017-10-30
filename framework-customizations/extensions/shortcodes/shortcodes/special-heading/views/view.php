<?php
if (!defined('FW'))
    die('Forbidden');
/**
 * @var $atts
 */
?>

<div class="fw-heading heading fw-heading-<?php echo esc_attr($atts['heading']); ?> <?php echo!empty($atts['centered']) ? 'fw-heading-center' : ''; ?>  <?php echo esc_attr($atts['class']); ?>" style=" color:<?php echo esc_attr($atts['color']); ?>">
    <?php $heading = "<{$atts['heading']} class='fw-special-title'>{$atts['title']}</{$atts['heading']}>"; ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-title-half' : ''; ?>"><?php echo $heading; ?></div>

    <?php $subheading = "<{$atts['subheading']} class='fw-special-subtitle'>{$atts['subtitle']}</{$atts['subheading']}>"; ?>
    <div class="<?php echo empty($atts['centered']) ? 'fw-special-subtitle-half' : ''; ?>"><?php echo $subheading; ?></div>
</div>



