<?php
if (!defined('FW')) {
    die('Forbidden');
}

$team_style = $atts['team_style'];
$image = $atts['image'];
$name = $atts['name'];
$description = $atts['desc'];
$job_title = $atts['job'];

$social = $atts['socials'];
$txt_align = $atts['txt_align'];
?>

<?php if ($team_style == 'team-1'): ?>
    <div class="team team-member <?php echo esc_attr($txt_align); ?>">
        <div class="tm-img">
            <?php if ($image) { ?>
                <img src="<?php echo esc_url($image['url']); ?>" class="img-responsive m-x-auto" alt="<?php echo wp_kses_post($name); ?>">
            <?php } ?>
        </div>

        <div class="tm-details">
            <?php if ($name && $job_title) { ?>
                <p class="tm-name black-text m-b-md f-w-900"><?php echo wp_kses_post($name); ?><span class="tm-job f-w-900"><?php echo wp_kses_post($job_title); ?></span></p>
            <?php } ?>

            <div class="social-btn">
                <?php foreach ($social as $social_icon): ?>
                    <?php if ($social_icon) { ?>
                        <a target="_blank" href="<?php echo esc_attr($social_icon['social_link']); ?>" class="social-btn" style="background:<?php echo esc_attr($social_icon['background_color']); ?>"><i class="<?php echo esc_attr($social_icon['icon_class']); ?>"></i></a>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            <p class="tm-info m-t-md"><?php echo wp_kses_post($description); ?></p>
        </div>

    </div>
<?php endif; ?>

<?php if ($team_style == 'team-2'): ?>

    <div class="team h caption-4 m-b">
        <figure>
            <?php if ($image) { ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo wp_kses_post($name); ?>">
            <?php } ?>
            <figcaption>
                <div class="caption-box vertical-center-abs social-btn text-center">
                    <?php foreach ($social as $socials): ?>
                        <?php if ($socials) { ?>
                            <a target="_blank" href="<?php echo $socials['social_link']; ?>" style="background:<?php echo $socials['background_color']; ?>"><i class="<?php echo $socials['icon_class']; ?>"></i></a>
                        <?php } ?>
                    <?php endforeach; ?>
                </div>
            </figcaption>
        </figure>
    </div>
    <div class="team <?php echo esc_attr($txt_align); ?>">
        <?php if ($name && $job_title) { ?>
            <h5 class="f-w-900"><?php echo wp_kses_post($name); ?></h5>
            <p class="role"><?php echo wp_kses_post($job_title); ?></p>
        <?php } ?>
        <p class="bio"><?php echo wp_kses_post($description); ?></p>
    </div>
<?php endif; ?>

<?php if ($team_style == 'team-3'): ?>
    <!-- Team Item -->
    <div class="team m-b-md clearfix <?php echo esc_attr($txt_align); ?>">
        <div class="h caption-5">
            <figure>
                <?php if ($image) { ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo wp_kses_post($name); ?>">
                <?php } ?>
                <figcaption>
                    <div class="caption-box vertical-center-abs">
                        <?php if ($name) { ?>
                            <h5><?php echo wp_kses_post($name); ?></h5>
                        <?php } ?>
                        <p class="small m-b-md"><?php echo wp_kses_post($description); ?></p>
                        <div class="social-btn">
                            <?php foreach ($social as $socials): ?>
                                <?php if ($socials) { ?>
                                    <a target="_blank" href="<?php echo $socials['social_link']; ?>" style="background:<?php echo $socials['background_color']; ?>"><i class="<?php echo $socials['icon_class']; ?>"></i></a>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
<?php endif; ?>

<?php if ($team_style == 'team-4'): ?>
    <div class="team team-list p-a y-middle m-b-md wow slideInUp">
        <div class="col-md-3 tl-image text-center">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo wp_kses_post($name); ?>" class="img-circle img-thumbnail">
        </div>
        <div class="col-md-4 <?php echo esc_attr($txt_align); ?>">
            <?php if ($name && $job_title) { ?>
                <h4><?php echo wp_kses_post($name); ?></h4>
                <p><?php echo wp_kses_post($job_title); ?></p>
            <?php } ?>
            <div class="social-btn">
                <?php foreach ($social as $socials): ?>
                    <?php if ($socials) { ?>
                        <a target="_blank" href="<?php echo $socials['social_link']; ?>" style="background:<?php echo $socials['background_color']; ?>"><i class="<?php echo $socials['icon_class']; ?>"></i></a>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-5">
            <p><?php echo wp_kses_post($description); ?></p>
        </div>
    </div>
    <?php

 endif; 
