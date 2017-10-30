<?php
if (!defined('FW')) {
    die('Forbidden');
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.getleads-iconbox` supports 3 styles:
 * `getleads-iconbox-1`, `getleads-iconbox-2` and `getleads-iconbox-3`
 */

?>

<div class="fw-iconbox clearfix feature <?php echo esc_attr($atts['iconbox']); ?>">
    <div class="fw-iconbox-image">
        <i class="<?php echo esc_attr($atts['icon']); ?>"></i>
    </div>
    <div class="fw-iconbox-aside">
        <div class="fw-iconbox-title">
            <h4><?php echo esc_attr($atts['title']); ?></h4>
        </div>
        <div class="fw-iconbox-text">
            <p><?php echo wp_kses_post($atts['content']); ?></p>
        </div>

    </div>
</div>