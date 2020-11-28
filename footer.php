<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>

<?php
if (defined('FW')) {
    $footer = fw_get_db_settings_option('footer');
    $copyright = fw_get_db_settings_option('copyright');


    if ($footer['footer_style'] == 'footer-1') :
        $socials = $footer['footer-1']['socials'];
        ?>
        <footer class="p-y-md footer f1 getleads-footer">
            <div class="container">
                <div class="row">
                    <!-- Copy -->
                    <div class="col-sm-8">
                        <?php if ($copyright) { ?>
                            <p><?php echo wp_kses_post($copyright); ?></p>
                        <?php } ?>
                    </div>
                    <!-- Social Links -->
                    <div class="col-sm-4">
                        <ul class="footer-social">
                            <?php foreach ($socials as $social): ?>
                                <?php if ($social) { ?>
                                    <li><a target="_blank" href="<?php echo esc_url($social['link']); ?>" style="color:<?php echo esc_attr($social['color']); ?>">  <i class="<?php echo esc_attr($social['icon']); ?>"></i></a></li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </footer>

    <?php endif; ?>

    <?php
    if ($footer['footer_style'] == 'footer-2') :
        $footer2 = $footer['footer-2']['link'];
        $socials = $footer['footer-2']['socials'];
        ?>
        <footer class="p-y-md footer f2 getleads-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <?php if ($copyright) { ?>
                            <p><?php echo wp_kses_post($copyright); ?></p>
                        <?php } ?>
                    </div>
                    <div class="col-sm-4 col-xs-12 text-center">
                        <ul class="footer-social">
                            <?php foreach ($socials as $social): ?>
                                <?php if ($social) { ?>
                                    <li><a target="_blank" href="<?php echo esc_url($social['link']); ?>" style="color:<?php echo esc_attr($social['color']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a></li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <ul class="footer-links">
                            <?php foreach ($footer2 as $item): ?>
                                <?php if ($item) { ?>
                                    <li><a target="_blank" style="color:<?php echo esc_attr($item['lnk_color']); ?>" href="<?php echo esc_url($item['link']); ?>" title="<?php echo esc_attr($item['title']); ?>"><?php echo esc_attr($item['title']); ?></a></li>
                                <?php } ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </footer>
    <?php endif; ?>

    <?php
    if ($footer['footer_style'] == 'footer-3') :
        $socials = $footer['footer-3']['socials'];
        ?>
        <section class="footer f3 p-y-md getleads-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <?php if ($copyright) { ?>
                            <p class="m-b-md"><?php echo wp_kses_post($copyright); ?></p>
                        <?php } ?>
                        <div class="social-btn m-t">
                            <?php foreach ($socials as $social): ?>
                                <?php if ($social) { ?>
                                    <a target="_blank" href="<?php echo esc_url($social['link']); ?>" style="background:<?php echo esc_attr($social['social_bg']); ?>;Color:<?php echo esc_attr($social['color']); ?>"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    if ($footer['footer_style'] == 'footer-4') :
        $mid_txt = $footer['footer-4']['ft_mid_text'];
        $logo = $footer['footer-4']['footer_logo'];
        $socials = $footer['footer-4']['socials'];
        ?>
        <footer class="p-y-md footer f4 getleads-footer" style="background:<?php echo esc_attr($bg_color); ?>;Color:<?php echo esc_attr($txt_color); ?>">
            <div class="container">
                <div class="row c3">
                    <!-- Logo -->
                    <div class="col-sm-3 col-xs-12 center-sm">
                        <img src="<?php echo esc_attr($logo['url']); ?>" alt="">
                    </div>
                    <!-- Content -->
                    <div class="col-sm-5 col-xs-12">
                        <div class="footer-desc">
                            <p><?php echo esc_attr($mid_txt); ?></p>

                            <?php if ($copyright) { ?>
                                <p class="m-t"><?php echo wp_kses_post($copyright); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Social Link -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="footer-social social-btn text-center inverse">
                            <?php foreach ($socials as $social): ?>
                                <?php if ($social) { ?>
                                    <a target="_blank" style="background:<?php echo esc_attr($social['social_bg']); ?>" href="<?php echo esc_url($social['link']); ?>" class="social-btn"><i class="<?php echo esc_attr($social['icon']); ?>"></i></a>
                                <?php } ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div><!-- /End Row -->
            </div><!-- /End Container -->
        </footer>
    <?php endif; ?>


<?php } else {
    ?>

    <footer id="footer1-1" class="p-y-md footer f1 bg-edit bg-grey">
        <div class="container">
            <div class="row">
                <!-- Copy -->
                <div class="col-sm-8">
                    <p><?php _e('All rights reserved - Copyright &copy; 2016 GetLeads by Themedept', 'getleads') ?></p>
                </div>
                <!-- Social Links -->
                <div class="col-sm-4">
                    <ul class="footer-social">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div><!-- /End Row -->
        </div><!-- /End Container -->
    </footer>
<?php } ?>


<!-- Back to Top Button -->
<a href="#" class="top">Top</a>

<?php wp_footer(); ?>

</body>
</html>

