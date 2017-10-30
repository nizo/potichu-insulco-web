<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
?>
<div class="contact c2">
    <ul class="contact-info">
        <li class="text-edit"><i class="<?php echo $atts['icon'] ?>">
                <?php if (!empty($atts['title'])): ?>
                </i><?php echo $atts['title'] ?></li>
        <?php endif; ?>
    </ul>
</div>