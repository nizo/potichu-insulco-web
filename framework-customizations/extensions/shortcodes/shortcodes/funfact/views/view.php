<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
$funfact_icon = $atts['funfact_icon'];
$funfact_number = $atts['funfact_number'];
$funfact_title = $atts['funfact_title'];
$txt_align = $atts['txt_align'];
//fw_print($tt);
?>


<div class="funfacts wow fadeIn">
    <div class="counter-left">
        <i class="<?php echo esc_attr($funfact_icon); ?>"></i>
        <div class="counter" data-from="0" data-to="<?php
             if ($funfact_number) {
                 echo esc_attr($funfact_number);
             }
             ?>" data-speed="2500"></div>
    </div>
    <div class="<?php echo $txt_align; ?>"><?php
        if ($funfact_title) {
            echo esc_attr($funfact_title);
        }
        ?></div>
</div>


