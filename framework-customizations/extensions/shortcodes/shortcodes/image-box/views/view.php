<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$btn = $atts['icon_box_btn'];
$img = $atts['image'];
$round = $atts['img_round'];
$name = $atts['name'];
$text = $atts['text'];
$bgcolor = $atts['background_color'];
$text_align = $atts['text_align'];
$padding ='';
if ($bgcolor) {
    $padding = 'style="padding:10px 10px 30px 10px;"';
}
?>


<div class="real-estate wow fadeIn" data-wow-offset="120" data-wow-duration="1.5s" style="background-color: <?php echo  $bgcolor; ?>">
    <?php if (!empty($img)) : ?>
	<img src="<?php echo esc_url($img['url']); ?>" alt=""  class='img-responsive <?php echo esc_attr($round);?>' />
        <?php
    endif;
    
        ?>
	<div class="<?php echo esc_attr($text_align); ?>" <?php echo  $padding; ?>>
		<?php if ($name): ?>
            <h4 class="m-t"><?php echo esc_attr($name); ?></h4>
            <?php
        endif;
        if ($text):
            ?>
            <p><?php echo esc_attr($text); ?></p>
        <?php endif; ?>

        <?php if ($btn['show_bnt'] == 'yes'): ?>
            <?php
            $icon_position = $btn['yes']['icon_position'];
            $icon = '<span class="' . $btn['yes']['icon_position'] . ' ' . $btn['yes']['icon'] . '"></span> ';
            ?>
            <div class="getleads-iconbox-btn <?php echo esc_attr($btn['yes']['btn_alignment']); ?> margin-top-twenty">
                <a href="<?php echo esc_url($btn['yes']['link']); ?>"
                   target="<?php echo esc_attr($btn['yes']['target']); ?>"
                   class=" getleads-btn btn <?php echo esc_attr($btn['yes']['full_width']); ?> btn-<?php getleads_theme_button_class($btn['yes']['style']); ?> <?php echo esc_attr($btn['yes']['size']); ?>">
                    <?php echo  $icon; ?> 
                    <?php echo esc_attr($btn['yes']['label']); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
	<div class="clear"></div>
</div>
