<?php
if (!defined('FW')) {
    die('Forbidden');
}
?>
<blockquote class="getleads-quote <?php echo esc_attr($atts['text_align']); ?> <?php echo esc_attr($atts['font_size']); ?> <?php echo esc_attr($atts['class']); ?>">
    <?php echo esc_attr($atts['text']); ?>
<?php if ($atts['author'] != '') : ?>
        <small class="getleads-quote-author">
            <span>
                <?php if ($atts['author_link'] != '') : ?>
                    <a class="anchor scroll-to" href="<?php echo esc_url($atts['author_link']); ?>"><?php echo getleads_theme_translate(esc_attr($atts['author'])); ?></a>
                <?php else : ?>
                    <?php echo getleads_theme_translate(esc_attr($atts['author'])); ?>
    <?php endif; ?>
            </span>
        </small>
<?php endif; ?>
</blockquote>