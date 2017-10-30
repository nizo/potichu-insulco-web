<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$feature_left = $atts['feature']['feature-1']['feature_left'];
$feature_right = $atts['feature']['feature-1']['feature_right'];
?>

<?php

    if ($atts['feature']['feature-1']['phone_image'] != '') {
        $image = $atts['feature']['feature-1']['phone_image']['url'];
    }
    ?>
    <div class="row y-middle">
        <!-- Features Left -->
        <div class="col-md-4 col-sm-6">
            <ul class="features-list features-list-left list-unstyled">
                <?php foreach ($feature_left as $left): ?>
                    <?php if ($left): ?>
                        <li class="m-b-lg wow zoomIn">
                            <?php if (!empty($left['title'])) { ?>
                                <h5><?php echo wp_kses_post($left['title']); ?></h5>
                            <?php } ?>

                            <?php if (!empty($left['message'])) { ?>
                                <p><?php echo wp_kses_post($left['message']); ?></p>
                            <?php } ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Features Right -->
        <div class="col-md-4 col-md-push-4 col-sm-6">
            <ul class="features-list list-unstyled">
                <?php foreach ($feature_right as $right): ?>
                    <?php if ($right): ?>
                        <li class="m-b-lg wow zoomIn">
                            <?php if ($right['title']) { ?>
                                <h5><?php echo wp_kses_post($right['title']); ?></h5>
                            <?php } ?>

                            <?php if ($right['message']) { ?>
                                <p><?php echo wp_kses_post($right['message']); ?></p>
                            <?php } ?>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Center Device Image -->
        <div class="col-md-4 col-md-pull-4 text-center features-list-img wow slideInUp" >
            <img src="<?php echo $image; ?>" class="img-responsive m-x-auto" alt="Featured Image">
        </div>
    </div><!-- /End Row -->


