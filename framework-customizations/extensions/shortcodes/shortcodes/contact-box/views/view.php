<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$contact_item = $atts['contact_item'];
$center = $atts['center'];
?>
<div class="center-md m-b-md features-block">
    <div class="c3 contact-divider <?php echo esc_attr($center);?>">
        <?php foreach ($contact_item as $item): ?>
            <?php if ($item): ?>
        
                <?php
                $contact_style = $item['tab_item']['selected_value'];
                $text_item = $item['tab_item']['text'];
                $image_item = $item['tab_item']['image'];
                ?>
        
                <?php if ($contact_style == 'image'): ?>
                    <div class="col-sm-4">
                        <?php if (!empty($image_item['tab_image'])): ?>
                            <img src="<?php echo $image_item['tab_image']['url'] ?>" class="<?php echo $image_item['circle']; ?>" alt="<?php echo $image_item['img_alt']; ?>">
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($contact_style == 'text'): ?>
                    <div class="col-sm-4 wow zoomIn">
                        <?php if (!empty($text_item['icon'])) { ?>
                            <i class="<?php echo esc_attr($text_item['icon']); ?>"></i>
                        <?php } ?>

                        <?php if (!empty($text_item['title'])) { ?>
                            <h5 class="f-w-900"><?php echo wp_kses_post($text_item['title']); ?></h5>
                        <?php } ?>
                            
                        <?php if (!empty($text_item['info'])) { ?>
                            <p><?php echo esc_attr($text_item['info']); ?></p>
                        <?php } ?>
                    </div>
                <?php endif; ?>
        
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div><!-- /End Contact Info -->

