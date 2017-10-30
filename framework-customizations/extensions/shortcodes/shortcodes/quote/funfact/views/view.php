<?php if (!defined('FW')) die('Forbidden'); ?>

<?php

$funfact_icon = $atts['funfact_icon'];
$funfact_number = $atts['funfact_number'];
$funfact_title = $atts['funfact_title'];
?>


<div class="funfacts-counter">
    <?php if ($funfact_icon): ?>
        <i class="<?php echo esc_attr($funfact_icon); ?>"></i>
    <?php
    endif;
    if ($funfact_number):
        ?>
        <div class="statistic-counter"><?php echo esc_attr($funfact_number); ?></div>
    <?php
    endif;
    if ($funfact_title):
        ?>
        <div class="statistic-text"><?php echo esc_attr($funfact_title); ?></div>
    <?php endif;
?>
</div>

