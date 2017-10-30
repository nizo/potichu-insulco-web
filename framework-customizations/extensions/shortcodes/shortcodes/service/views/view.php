<?php
if (!defined('FW')) {
    die('Forbidden');
}

$service_style = $atts['services']['service_style'];

$title = $atts['title'];
$content = $atts['content'];
$icon = $atts['services']['service-1']['icon'];
?>

<?php if ($service_style == 'service-1'): ?>
    <!-- Features Items -->

    <div class="text-center features-block c3">
        <i class="<?php echo $icon; ?>"></i>
        <?php if (!empty($title)): ?>
            <h4><?php echo wp_kses_post($title); ?></h4>
        <?php endif; ?>

        <?php if (!empty($content)): ?> 
            <p class="m-b-0"><?php echo wp_kses_post($content); ?></p>
        <?php endif; ?>
    </div><!-- /End Features-Block -->
<?php endif; ?>


<?php
$image = $atts['services']['service-2']['image'];
if ($service_style == 'service-2'):
    ?> 
    <div class="text-center features-block c3">
        <?php if (!empty($image)): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo wp_kses_post($title); ?>">
        <?php endif; ?>

        <?php if (!empty($title)): ?>
            <h4><?php echo wp_kses_post($title); ?></h4>
        <?php endif; ?>

        <?php if (!empty($content)): ?>
            <p><?php echo wp_kses_post($content); ?></p>
        <?php endif; ?>
    </div>

    <?php
endif;
?>

<?php
$icon3 = $atts['services']['service-3']['icon'];
if ($service_style == 'service-3'):
    ?> 
    <div class="features-block c2 margin-bottom">
        <div class="icon-left clearfix"> 
            <i class="<?php echo $icon3; ?>"></i>
            <?php if (!empty($title)): ?>
                <h5 class="m-t f-w-900"><?php echo wp_kses_post($title); ?></h5>
            <?php endif; ?>

            <?php if (!empty($content)): ?>
                <p><?php echo wp_kses_post($content); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php
endif;

$image4 = $atts['services']['service-4']['image'];
if ($service_style == 'service-4'):
    ?> 
    <div class="features-block wow fadeIn margin-bottom">
        <div class="c2">
            <div class="img-left clearfix">
                <?php if (!empty($image4)): ?>
                    <img src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo wp_kses_post($title); ?>">
                <?php endif; ?>

                <?php if (!empty($title)): ?>  
                    <h5 class="m-t f-w-900"><?php echo wp_kses_post($title); ?></h5>
                <?php endif; ?>

                <?php if (!empty($content)) { ?>
                    <p><?php echo wp_kses_post($content); ?></p>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php


 endif;