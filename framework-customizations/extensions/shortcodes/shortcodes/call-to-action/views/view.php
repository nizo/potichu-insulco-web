<?php
if (!defined('FW')) {
    die('Forbidden');
}

$btn = $atts['general_page_header'];
?>

<?php
$action_style = $atts['action_style'];
if ($action_style == 'action_one') :
    ?>


    <div class="col-md-8 col-md-offset-2 wow fadeIn">
        <div class="text-center">
            <?php if (!empty($atts['title'])): ?>
                <h4 class="m-t f-w-900"><?php echo esc_attr($atts['title']); ?></h4>
            <?php endif; ?>
            <p class="p-opacity m-b-md"><?php echo esc_textarea($atts['message']); ?></p>
            <a target="<?php echo esc_attr($btn['target']); ?>" href="<?php echo esc_url($btn['button_link']); ?>" class="btn  btn-<?php echo esc_attr($btn['shadow']); ?> btn-<?php getleads_theme_button_class($btn['style']); ?> btn-<?php echo esc_attr($btn['size']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo esc_attr($btn['button_label']); ?></a>
        </div>
    </div>
    <?php
endif;
if ($action_style == 'action_two') :
    ?>

    <div class="col-md-10 col-md-offset-1 outline no-border y-middle">
        <div class="col-md-7">
            <?php if (!empty($atts['title'])): ?>
                <h4><?php echo esc_attr($atts['title']); ?></h4>
            <?php endif; ?>
            <p class="m-b-0"><?php echo esc_textarea($atts['message']); ?></p>
        </div>
        <div class="col-md-5 text-center">
            <a target="<?php echo esc_attr($btn['target']); ?>" href="<?php echo esc_url($btn['button_link']); ?>" class="btn btn-<?php echo esc_attr($btn['shadow']); ?> btn-<?php getleads_theme_button_class($btn['style']); ?> btn-<?php echo esc_attr($btn['size']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo esc_attr($btn['button_label']); ?></a>
        </div>                            
    </div>
<?php endif; ?>