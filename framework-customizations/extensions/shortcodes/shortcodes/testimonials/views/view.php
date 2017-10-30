<?php
if (!defined('FW')) {
    die('Forbidden');
}

$default_style_settings = $atts['testimonial_style_settings'];
$testimonial = $default_style_settings['default'];
$default_style = $testimonial['default_style_settings'];

$default_item = $default_style['default-1'];
$default_popup_item = $default_item['popup-1'];

$default_item2 = $default_style['default-2'];
$default_popup2 = $default_item2['popup-2'];


$slider = $default_style_settings['slider'];
$slider_style = $slider['slider_style_settings'];

$slider_item = $slider_style['slider-1'];
$slider_popup_item = $slider_item['popup-1'];

$slider_item2 = $slider_style['slider-2'];
$slider_popup2 = $slider_item2['popup-2'];


$slider_item3 = $slider_style['slider-3'];
$slider_popup3 = $slider_item3['popup-3'];
?>

<?php if ($default_style['default_style'] == 'default-1'): ?>

    <?php foreach ($default_popup_item as $default_item): ?>
        <div class="col-md-4 testimonials p-t-md <?php echo esc_attr($atts['center']); ?>">
            <blockquote class="quote-border">
                <figure>
                    <?php if ($default_item['image']) { ?>
                        <img src="<?php echo esc_url($default_item['image']['url']); ?>" class="img-circle" alt="<?php echo wp_kses_post($default_item['title']); ?>" width="90" height="90"> 
                    <?php } ?>
                </figure>
                <p><?php echo $default_item['description']; ?></p>
                <div class="cite text-edit"> 
                    <?php if (!empty($default_item['title'])) { ?>
                        <?php echo wp_kses_post($default_item['title']); ?> 
                    <?php } ?>
                    <span class="cite-info p-opacity "><?php echo esc_attr($default_item['position']); ?></span> 
                </div>
            </blockquote>
        </div>

    <?php endforeach; ?>

<?php endif; ?>


<div class="c3 testimonials">
   <?php if ($default_style['default_style'] == 'default-2'): ?>

        <?php foreach ($default_popup2 as $default_item2):  ?>
            <!-- Twitter Testimonials -->
            <div class="col-md-4 clearfix">
                <div class="embed-tweet-item">
                    <blockquote class="twitter-tweet" lang="en" data-link-color="#439FE0" data-align="<?php echo esc_attr($atts['center']); ?>">
                        <?php if (!empty($default_item2)) { ?>
                            <a href="<?php echo esc_url($default_item2); ?>"></a>
                        <?php } ?>
                    </blockquote>
                </div>
            </div>
        <?php endforeach; ?>

    <?php endif; ?>
</div>


<?php if ($slider_style['slider_style'] == 'slider-1'): ?>
    <div class="row y-middle">
        <!-- Text on the left -->
        <div class="col-md-5 col-sm-6 m-b center-sm">
            <h3 class="f-w-900 m-b">
                <?php
                if ($slider_item['left_title']) {
                    echo wp_kses_post($slider_item['left_title']);
                }
                ?>
            </h3>
            <h5>
                <?php
                if ($slider_item['left_subtitle']) {
                    echo wp_kses_post($slider_item['left_subtitle']);
                }
                ?>
            </h5>
            <p class="m-b-md"><?php echo wp_kses_post($slider_item['left_content']); ?></p>
        </div>

        <!-- Testimonials Carousel -->
        <div class="col-md-5 col-sm-6 testimonials-right <?php echo esc_attr($atts['center']); ?>"> 
            <div id="owl-testimonial-single" class="owl-carousel owl-theme">     
                <!-- Testimonial Item -->
                <?php
                foreach ($slider_popup_item as $item):
                    if ($item):
                        ?>
                        <div class="item">
                            <blockquote>
                                <p class="p-opacity m-b-md f-w-700"><i class="fa fa-quote-left m-r p-opacity" style="font-size:15px"></i><?php echo wp_kses_post($item['description']); ?><i class="fa fa-quote-right m-l p-opacity" style="font-size:15px"></i> </p>
                                <figure>
                                    <img src="<?php
                                    if ($item['image']) {
                                        echo esc_url($item['image']['url']);
                                    }
                                    ?>" alt="" class="img-circle m-b" width="120" height="120"> 
                                </figure>
                                <cite class="p-opacity text-edit">
                                    <strong>
                                        <?php
                                        if ($item['title']) {
                                            echo wp_kses_post($item['title']);
                                        }
                                        ?>
                                    </strong>, <?php echo esc_attr($item['position']); ?>
                                </cite>
                            </blockquote>
                        </div>
                        <?php
                    endif;
                endforeach;
                ?>

            </div>
        </div><!-- /End Col -->
    </div>
<?php endif; ?>




<?php if ($slider_style['slider_style'] == 'slider-2'): ?>
    <div class="testimonials">
        <div class="col-md-8 col-md-offset-2 big-img-left">
            <div id="owl-testimonial-single2" class="owl-carousel owl-theme"> 

                <?php foreach ($slider_popup2 as $item2): ?>
                    <!-- Testimonial Item -->
                    <div class="item">
                        <div class="col-md-3 col-md-offset-1 <?php echo esc_attr($atts['center']); ?>">
                            <figure>
                                <img src="<?php
                                if ($item2['image']) {
                                    echo esc_url($item2['image']['url']);
                                }
                                ?>" class="img-circle m-x-auto" width="130" height="130" alt="<?php echo esc_attr($item2['title']); ?>"> 
                            </figure>
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <p class="m-b-md p-opacity f-w-700">"<?php echo wp_kses_post($item2['description']); ?>" </p>
                                <div class="cite text-edit"> 
                                    <?php
                                    if ($item2['title']) {
                                        echo wp_kses_post($item2['title']);
                                    }
                                    ?>
                                    <span class="cite-info"><?php echo esc_attr($item2['position']); ?></span>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div><!-- /End Carousel -->
        </div><!-- /End Col-md-8 -->
    </div><!-- /End Row -->
<?php endif; ?>

<?php if ($slider_style['slider_style'] == 'slider-3'): ?>   
    <div class="testimonials">
        <div class="col-md-8 col-md-offset-2 <?php echo esc_attr($atts['center']); ?>">
            <!-- Testimonial Carousel -->
            <div id="owl-testimonial-single3" class="owl-carousel owl-theme"> 
                <?php foreach ($slider_popup3 as $item3): ?>
                    <!-- Testimonial Item -->
                    <div class="item big-quote">
                        <!-- Big Quote -->
                        <div class="m-b-md">
                            <i class="fa fa-quote-right"></i>
                        </div>
                        <blockquote>
                            <p class="m-b-md f-w-900"><?php echo wp_kses_post($item3['description']); ?></p>
                            <div class="cite p-opacity text-edit">
                                <?php
                                if ($item3['title']) {
                                    echo wp_kses_post($item3['title']);
                                }
                                ?>
                                <span class="cite-info"><?php echo esc_attr($item3['position']); ?></span>
                            </div>
                        </blockquote>
                    </div>
                <?php endforeach; ?>

            </div><!-- /End Carousel -->
        </div><!-- /End Col-md-8 -->
    </div><!-- /End Row -->
    <?php














 endif; 