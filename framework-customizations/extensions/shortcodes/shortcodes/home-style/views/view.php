<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$icon = '';

$homepage_styles = $atts['homepage_style_settings'];


$title = $atts['home_title'];
$subtitle = $atts['home_subtitle'];






if ($homepage_styles['homepage_style'] == 'home-1'):
    ?>
    <?php $home1 = $homepage_styles['home-1']; ?>


    <div class="hero">        
        <div class="container vertical-center-rel">
            <div class="row">
                <div class="col-md-7 text-left">
                    <?php if (!empty($title)): ?>
                        <h1 class="text-white p-t-md"><strong><?php echo wp_kses_post($title); ?></strong></h1>
                        <?php
                    endif;


                    if (!empty($subtitle)):
                        ?>
                        <p class="lead text-white m-b-md "><?php echo wp_kses_post($subtitle); ?></p>
                        <?php
                    endif;


                    if (!empty($home1['home_button'])):
                        foreach ($home1['home_button'] as $btn) :
                            if ($btn['icon'] != '') {
                                $icon_position = $btn['icon_position'];
                                $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                            }
                            ?>
                            <a target="<?php echo $btn['btn_target']; ?>" href="<?php echo esc_url($btn['btn_link']); ?>" class="btn btn-<?php echo $btn['btn_shadow']; ?> btn-<?php getleads_theme_button_class($btn['btn_style']); ?> text-<?php echo $btn['letter_case']; ?> btn-<?php echo $btn['size']; ?>"><?php echo $icon; ?><?php echo wp_kses_post($btn['btn_label']); ?></a>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div><!-- /End Row -->
        </div><!-- /End Container -->

    </div>


<?php elseif ($homepage_styles['homepage_style'] == 'home-2'): ?>

    <?php $home2 = $homepage_styles['home-2']; ?>


    <div class="hero height-800-fix">
        <div class="container vertical-center-rel">
            <div class="row text-left">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-0">
                    <?php if (!empty($title)): ?>
                        <h1 class="text-white m-b-md p-t-md"><?php echo wp_kses_post($title) ?></h1>
                    <?php endif; ?>

                    <?php if (!empty($subtitle)): ?>
                        <p class="lead text-white m-b-md"><?php echo wp_kses_post($subtitle); ?></p>
                    <?php endif; ?>

                    <!-- Mailchimp Form with Double Input -->
                    <form class="form-inline double-input form-white m-b" id="mailchimpForm" action="<?php echo $home2['mailchimp']; ?>">
                        <div class="form-group ">
                            <input type="text" class="form-control" id="m2Name" placeholder="<?php _e('Your Name', 'getleads') ?>" name="MERGE1" required>
                            <input type="email" class="form-control" id="m2Email" placeholder="<?php _e('Your Email', 'getleads') ?>" name="MERGE0" required> 
                        </div>
                        <button type="submit" class="btn btn-shadow btn-green"><?php echo $home2['button_text'] ?></button>
                    </form>

                    <p class="text-white small"><?php echo $home2['copyright_text']; ?></p>
                </div><!-- /End Col -->

            </div><!-- /End Row -->
        </div><!-- /End Container -->

        <!-- Closeup Image on Left -->
        <div class="closeup-box closeup-right">
            <?php if (!empty($home2['side_image'])): ?>
                <img src="<?php echo $home2['side_image']['url']; ?>" alt="<?php echo $title; ?>">
            <?php endif; ?>
        </div>

    </div>


<?php elseif ($homepage_styles['homepage_style'] == 'home-3'): ?>
    <?php $home3 = $homepage_styles['home-3']; ?>


    <div class="hero hero-devices y-middle">
        <div class="col-sm-6 text-left">
            <!-- Intro Text -->
            <?php if (!empty($title)): ?>
                <h1 class="text-white m-b-md"><?php echo wp_kses_post($title); ?></h1>
                <?php
            endif;
            if (!empty($subtitle)):
                ?>
				
				<a href="#konkurencia" class="btn btn-sm text-capitalize">  <?php echo wp_kses_post($subtitle); ?></a>
                <!--<p class="lead text-white m-b-md"><?php echo wp_kses_post($subtitle); ?></p>-->

            <?php endif;
            ?>
            <!--<p class="lead text-white"><?php echo wp_kses_post($home3['apps_title']); ?></p>-->
            <?php foreach ($home3['apps_image'] as $apps_img): ?>
                <a target="_blank" href="<?php echo $apps_img['link']; ?>"><img src="<?php echo esc_url($apps_img['image']['url']); ?>" class="app-image" alt="<?php echo $apps_img['alt']; ?>"></a>
            <?php endforeach; ?>
        </div>
        <!-- Image Devices -->
        <div class="col-sm-6">
            <?php if (!empty($home3['right_image'])): ?>
                <img src="<?php echo $home3['right_image']['url']; ?>" class="img-responsive m-x-auto" alt="">
            <?php endif; ?>
        </div>
    </div>



<?php elseif ($homepage_styles['homepage_style'] == 'home-4'): ?>
    <?php $home4 = $homepage_styles['home-4']; ?>

    <div class="hero">
        <div class="container vertical-center-rel text-left">
            <div class="row">
                <div class="col-sm-6">
                    <?php if (!empty($title)): ?>
                        <h1 class="text-white m-b-md p-t-md"><?php echo wp_kses_post($title) ?></h1>
                        <?php
                    endif;
                    if (!empty($subtitle)):
                        ?>
                        <p class="lead text-white m-b-md f-w-700"><?php echo wp_kses_post($subtitle); ?></p>

                    <?php endif;
                    ?>
                    <?php
                    foreach ($home4['home_button'] as $btn) :
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                        }
                        ?>

                        <a target="<?php echo $btn['btn_target']; ?>" href="<?php echo esc_url($btn['btn_link']); ?>" class="btn btn-<?php echo $btn['btn_shadow']; ?> btn-<?php getleads_theme_button_class($btn['btn_style']); ?> text-<?php echo $btn['letter_case']; ?> btn-<?php echo $btn['size']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></a>
                    <?php endforeach; ?>
                </div>
            </div><!-- /End Row -->
        </div><!-- /End Container -->
        <!-- Dashboard Image on Right -->
        <div class="dashboard-box dashboard-right">
            <?php if (!empty($home4['large_image'])): ?>
                <img src="<?php echo $home4['large_image']['url']; ?>" alt="<?php echo esc_attr($title); ?>">
            <?php endif; ?>
        </div>

    </div>


<?php elseif ($homepage_styles['homepage_style'] == 'home-5'): ?>
    <?php $home5 = $homepage_styles['home-5']; ?>

    <div class="hero-leadbox content-align-md">
        <div class="y-middle">
            <!-- Intro Text -->
            <div class="col-sm-12 col-md-7 center-md text-white text-left">
                <?php if (!empty($title)): ?>
                    <h1><?php echo wp_kses_post($title) ?></h1>
                    <?php
                endif;
                if (!empty($subtitle)):
                    ?>
                    <p class="lead m-b-md"><?php echo wp_kses_post($subtitle); ?></p>             
                <?php endif;
                ?>
            </div>
            <div class="col-sm-12 col-md-5 form-horizontal form-white text-white text-left">



                <?php
                $quote = $home5['form_shortcode'];
                echo do_shortcode($quote);
                ?>


                <!-- Quote Form -->



            </div><!--/End Quote Form -->

        </div><!-- /End Row -->
    </div>



<?php elseif ($homepage_styles['homepage_style'] == 'home-6'): ?>
    <?php $home6 = $homepage_styles['home-6']; ?>

    <div class="hero-leadbox content-align-md">
        <div class="row">
            <div class="col-md-12 y-middle c2">
                <!-- Intro Text -->
                <div class="col-md-6 center-md text-white text-left">

                    <?php if (!empty($title)): ?>
                        <h1><?php echo wp_kses_post($title) ?></h1>
                        <?php
                    endif;
                    if (!empty($subtitle)):
                        ?>
                        <p class="lead f-w-700"><?php echo wp_kses_post($subtitle); ?></p>
                    <?php endif;
                    ?>
                    <p class="m-t-md"><?php echo wp_kses_post($home6['main_content']); ?></p>
                </div>
                <!-- Booking Form -->
                <div class="col-md-6">
                    <div class="form-horizontal form-white form-2col text-white">
                        <?php
                        $qappientment = $home6['form_shortcode'];
                        echo do_shortcode($qappientment);
                        ?>

                    </div>

                </div><!-- /End Booking Form -->
            </div><!-- /End Col -->
        </div>

    </div>


<?php elseif ($homepage_styles['homepage_style'] == 'home-7'): ?> 
    <?php $home7 = $homepage_styles['home-7']; ?>

    <div class="hero hero-countdown">
        <div class="row">
            <div class="col-md-12 text-center">

                <?php if (!empty($title)): ?>
                    <h1 class="text-white"><?php echo wp_kses_post($title) ?></h1>
                    <?php
                endif;
                if (!empty($subtitle)):
                    ?>
                    <p class="lead text-white m-b-0 f-w-700"><?php echo wp_kses_post($subtitle); ?></p>

                <?php endif;
                ?>
            </div>
        </div> 
        <!-- Play Popup Button -->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
                <div class="big-popup p-y-md">
                    <a class="mp-iframe" href="<?php echo esc_attr($home7['video_url']); ?>"><i class="fa fa-play-circle"></i></a>
                </div>
            </div>
        </div>     
        <!-- Subscription Form -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p class="text-white text-uppercase f-w-700"><small><?php echo wp_kses_post($home7['sb_title']); ?></small></p>
                <form class="form-inline form-white" id="mailchimpForm" action="<?php echo esc_url($home7['video_url']); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="m2Name" placeholder="<?php _e('Your Name', 'getleads') ?>" name="MERGE1" required>
                        <input type="email" class="form-control" id="m2Email" placeholder="<?php _e('Your Email', 'getleads') ?>" name="MERGE0" required>
                    </div>
                    <button type="submit" class="btn btn-shadow btn-green"><?php echo wp_kses_post($home7['sb_btn_txt']); ?></button>
                </form>
            </div>
        </div><!-- /End Row -->
    </div><!-- /End Container -->


<?php elseif ($homepage_styles['homepage_style'] == 'home-8'): ?> 
    <?php $home8 = $homepage_styles['home-8']; ?>

    <div class="p-y-md">
        <div class="row p-t-md">
            <div class="col-md-12 text-center">
                <?php if (!empty($title)): ?>
                    <h1 class="text-white"><?php echo wp_kses_post($title) ?></h1>
                    <?php
                endif;
                if (!empty($subtitle)):
                    ?>
                    <p class="lead text-white m-b-lg m-b-0 f-w-700"><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif;
                ?>
            </div>
        </div> 
        <!-- Video Popup with Image -->
        <div class="row">
            <div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
                <div class="popup-box m-b-lg">
                    <?php if (!empty($home8['image'])): ?>
                        <img src="<?php echo esc_url($home8['image']['url']); ?>" class="img-responsive" alt="<?php echo wp_kses_post($title); ?>" />
                    <?php endif; ?>
                    <div class="popup-button">
                        <a class="mp-iframe" href="<?php echo esc_attr($home8['video_url']); ?>"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscription Form -->
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <p class="text-white text-uppercase f-w-700"><small><?php echo wp_kses_post($home8['sb_title']); ?></small></p>
                <form class="form-inline form-white" id="mailchimpForm" action="<?php echo esc_url($home8['video_url']); ?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="m2Name" placeholder="<?php _e('Your Name', 'getleads') ?>" name="MERGE1" required>
                        <input type="email" class="form-control" id="m2Email" placeholder="<?php _e('Your Email', 'getleads') ?>" name="MERGE0" required>
                    </div>
                    <button type="submit" class="btn btn-shadow btn-green"><?php echo wp_kses_post($home8['sb_btn_txt']); ?></button>
                </form>
            </div>
        </div><!-- /End Row -->
    </div><!-- /End Container -->


<?php elseif ($homepage_styles['homepage_style'] == 'home-9'): ?> 
    <?php $home9 = $homepage_styles['home-9']; ?>

    <div class="hero hero-countdown">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <?php if (!empty($title)): ?>
                    <h1 class="text-white"><?php echo wp_kses_post($title) ?></h1>
                    <?php
                endif;
                if (!empty($subtitle)):
                    ?>
                    <p class="lead text-white m-b-md"><?php echo wp_kses_post($subtitle); ?></p>
                <?php endif;
                ?>
                <h5 class="f-w-900 text-white text-uppercase"><?php echo esc_attr($home9['date_place']); ?></h5>
                <!-- Countdown Timer -->
                <div class="countdown text-white p-y-md">
                    <div class="timer">
                        <div class="days">00</div>
                        <em class="textDays">days</em> 
                    </div>
                    <div class="timer">
                        <div class="hours">00</div>
                        <em class="textHours">hours</em> 
                    </div>
                    <div class="timer">
                        <div class="minutes">00</div>
                        <em class="textMinutes">minutes</em> 
                    </div>
                    <div class="timer">
                        <div class="seconds">00</div>
                        <em class="textSeconds">seconds</em> 
                    </div>
                </div>
                <?php
                $event_button = $homepage_styles['home-9']['event_button'];
                if (!empty($event_button)):

                    foreach ($event_button as $btn):
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                        }
                        ?>
                        <a target="<?php echo $btn['btn_target']; ?>" href="<?php echo esc_url($btn['btn_link']); ?>" class="btn btn-<?php echo $btn['size']; ?> btn-<?php echo $btn['btn_shadow']; ?> btn-<?php getleads_theme_button_class($btn['btn_style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
            <div class="col-md-6 col-md-offset-3 text-white text-center">
                <p><?php echo esc_attr($home9['sbs_msg']); ?></p>
            </div>
        </div><!-- /End Row -->
    </div>


    <?php
    $date = $home9['event'];
    $timestamp = strtotime($date);
    $event_date = date('d F Y', $timestamp);
    ?>
    <script>
        jQuery(document).ready(function () {
            if (jQuery('.countdown').length) {
                jQuery(".countdown").jCounter({
                    date: "<?php echo $event_date; ?> 12:00:00", // Deadline date
                    timezone: "Europe/London",
                    format: "dd:hh:mm:ss",
                    twoDigits: 'on',
                    serverDateSource: "<?php echo GETLEADS_PHPSCRIPTS ?>/dateandtime.php",
                    fallback: function () {
                        console.log("Count finished!");
                    }
                });
            }
        });
    </script>
<?php elseif ($homepage_styles['homepage_style'] == 'home-10') :
    ?>

    <div class="p-t-lg">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <?php if (!empty($title)): ?>
                    <h1 class="text-white m-b-md p-t-md"><?php echo wp_kses_post($title); ?></h1>
                    <?php
                endif;
                if (!empty($subtitle)):
                    ?>
                    <p class="lead text-white m-b-md f-w-700"><?php echo wp_kses_post($subtitle); ?></p>
                    <?php
                endif;

                $slider_button = $homepage_styles['home-10']['slider_button'];
                if (!empty($slider_button)):

                    foreach ($slider_button as $btn):
                        if ($btn['icon'] != '') {
                            $icon_position = $btn['icon_position'];
                            $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                        }
                        ?>
                        <a target="<?php echo $btn['btn_target']; ?>" href="<?php echo esc_url($btn['btn_link']); ?>" class="btn btn-<?php echo $btn['size']; ?> btn-<?php echo $btn['btn_shadow']; ?> btn-<?php getleads_theme_button_class($btn['btn_style']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo $icon; ?> <?php echo wp_kses_post($btn['btn_label']); ?></a>
                        <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div><!-- /End Row -->
    </div><!-- /End Container -->

    <div class="p-t-md">
        <div class="row">
            <div class="col-sm-12">
                <!-- Dashboard Carousel -->
                <div id="owl-carousel-dashboard" class="owl-carousel owl-theme owl-dashboard text-center inverse">
                    <?php
                    $slides = $homepage_styles['home-10']['slider_style'];


                    foreach ($slides as $slider) :
                        if ($slider['slider_image'] != '') {
                            ?>

                            <div class="item"><img src="<?php echo esc_url($slider['slider_image']['url']) ?>" class="img-responsive m-x-auto" alt=""></div>
                            <?php
                        }
                        ?>
                        <!-- Dashboard Item -->

                    <?php endforeach; ?>
                </div>
            </div><!-- /End Col -->
        </div><!-- /End Row -->
    </div><!-- /End Container -->


<?php elseif ($homepage_styles['homepage_style'] == 'home-11') :
    $sliders = $homepage_styles['home-11']['home-slider'];
    ?>
    <div id="hero-slider" class="hero swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($sliders as $slider) : ?>
                <div class="swiper-slide bg-img" style="background-image:url('<?php echo $slider['image'] ? $slider['image']['url'] : '' ?>')">
                    <div class="overlay"></div>             
                    <div class="container vertical-center-rel">
                        <div class="row">


                            <div class="col-md-8 text-left">
                                <h1 class="text-white p-t-md animate-two"><?php echo $slider['title'] ? $slider['title'] : '' ?></h1>
                                <p class="lead text-white m-b-md animate-three"><?php echo $slider['subtitle'] ? $slider['subtitle'] : '' ?></p>

                                <?php
                                if (!empty($slider['home_button'])):
                                    foreach ($slider['home_button'] as $btn) :
                                        if (!empty($btn['icon'])) {

                                            $icon_position = $btn['icon_position'];
                                            $icon = '<i class="' . $icon_position . ' ' . $btn['icon'] . '"></i>';
                                        } else {
                                            $icon = '';
                                        }
                                        ?>
                                        <a target="<?php echo $btn['btn_target']; ?>" href="<?php echo esc_url($btn['btn_link']); ?>" class="btn btn-<?php echo $btn['btn_shadow']; ?> btn-<?php getleads_theme_button_class($btn['btn_style']); ?> text-<?php echo $btn['letter_case']; ?> btn-<?php echo $btn['size']; ?> animate-four"><?php echo $icon; ?><?php echo wp_kses_post($btn['btn_label']); ?></a>
                                        <?php
                                    endforeach;
                                endif;
                                ?>


                            </div>

                        </div><!-- /End Row -->
                    </div><!-- /End Container -->
                </div>
            <?php endforeach; ?>

        </div>  
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>

    </div>


    <?php






endif;


