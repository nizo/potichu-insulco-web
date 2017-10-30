<?php
if (!defined('FW')) {
    die('Forbidden');
}


$video = $atts['video'];
$desc = $atts['description'];
$center = $atts['center'];
$icon = $atts['icon'];
$color = $atts['color'];
$class = $atts['class'];

?>
<?php if (!empty($video)): ?>


    <div class="col-md-8 col-md-offset-2 <?php echo esc_attr($class); echo esc_attr($center);?>">
        <div class="bg-popup m-b-md">
            <?php if ($icon) { ?>
                <a class="mp-iframe" href="<?php echo $video; ?>"><i class="<?php echo esc_attr($icon);?>"></i></a>
            <?php } ?>
        </div>

        <?php if ($desc) { ?>
            <h4 class="f-w-400" style="color:<?php echo $color; ?>"><?php echo $desc;?></h4>
        <?php } ?>
    </div>

    <?php


 endif;
