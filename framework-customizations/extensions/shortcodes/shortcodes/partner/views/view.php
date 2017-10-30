<?php
if (!defined('FW'))
    die('Forbidden');

$partner_style = $atts['partner_style'];

$headline = $atts['headline'];
$partner_gallery = $atts['partner_gallery'];
?>

<?php if($partner_style == 'partner-1'): ?>
<div class="text-center clients c2 y-middle">
    <div class="col-md-3">
        <?php if(!empty($headline)):?>
        <h6><?php echo esc_attr($headline); ?></h6>
        <?php endif;?>
    </div>

    <div class="col-md-9">
        <!-- Partners/Clients Images -->
        <div id="owl-partners-3" class="owl-carousel owl-theme">

            <?php foreach ($partner_gallery as $image): ?>
            <?php if($image){?>
                <div class="item">
                    <?php if(!empty($image['partner_image'])): ?>
                    <img src="<?php echo esc_url($image['partner_image']['url']); ?>" class="img-responsive" alt="<?php echo esc_attr($image['partner_alt']); ?>">
                    <?php endif;?>
                </div>
            <?php }?>
            <?php endforeach; ?>

        </div> 
    </div>

</div><!-- /End Col-12 -->
<?php endif;?>

<?php if($partner_style == 'partner-2'): ?>
<div class="p-y-md clients">
    <div class="text-center m-b-md">
        <?php if(!empty($headline)):?>
            <h4><?php echo esc_attr($headline); ?></h4>
        <?php endif;?>
    </div>
    <!-- Partners/Clients Images -->
    <div class="text-center">
        <div id="owl-partners-4" class="owl-carousel owl-theme">
            <?php foreach ($partner_gallery as $image): ?>
            <?php if($image){?>
            <div class="item">
                <?php if(!empty($image['partner_image'])): ?>
                    <img src="<?php echo esc_url($image['partner_image']['url']); ?>" class="img-responsive" alt="<?php echo esc_attr($image['partner_alt']); ?>">
                <?php endif;?>
            </div>
            <?php }?>
            <?php endforeach; ?>
        </div>    
    </div>
</div><!-- /End Row -->
<?php endif;?>

