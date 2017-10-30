<?php
if (!defined('FW')) die('Forbidden');

$subscription_style = $atts['subscription_style'];

$policy = $atts['policy'];
$txt_center = $atts['center'];
$mailchimp = $atts['action'];
$btn = $atts['general_page_header'];

?>

<?php if($subscription_style == 'subscription-1'): ?>
<div class="<?php echo esc_attr($txt_center)?>">
    <!-- Mailchimp Form -->
    <form class="form-inline" id="mailchimpForm" action="<?php echo esc_attr($mailchimp); ?>">
        <div class="form-group">
            <input type="email" class="form-control" id="m3Email" placeholder="<?php _e('Enter your Email Address', 'getleads'); ?>" name="MERGE0" required>
        </div>
        <button type="submit" class="btn  btn-<?php echo esc_attr($btn['shadow']); ?> btn-<?php getleads_theme_button_class($btn['style']); ?> btn-<?php echo esc_attr($btn['size']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo esc_attr($btn['button_label']); ?> </button>
    </form>

    <p class="small">
        <?php echo wp_kses_post($policy); ?>
    </p>
</div>
<?php endif;?>


<?php if($subscription_style == 'subscription-2'):?>
<div class="col-md-6 col-md-offset-3 <?php echo esc_attr($txt_center)?>">
    <!-- Mailchimp Form -->
    <form class="form-horizontal form-margin" id="mailchimpForm" action="<?php echo esc_attr($mailchimp); ?>">
        <div class="form-group">
            <input type="text" class="form-control" id="m2Name" placeholder="<?php _e('Your Name', 'getleads'); ?>" name="NAME" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" id="m2Email" placeholder="<?php _e('Your Email Address', 'getleads'); ?>" name="EMAIL" required>
        </div>
        <div class="form-group">
             <button type="submit" class="btn  btn-<?php echo esc_attr($btn['shadow']); ?> btn-<?php getleads_theme_button_class($btn['style']); ?> btn-<?php echo esc_attr($btn['size']); ?> text-<?php echo $btn['letter_case']; ?>"> <?php echo esc_attr($btn['button_label']); ?> </button>
        </div>
        <p class="small">
           <?php echo wp_kses_post($policy); ?>
        </p>
    </form>
</div>

<?php endif;
