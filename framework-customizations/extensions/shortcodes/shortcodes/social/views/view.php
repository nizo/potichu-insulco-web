<?php
if (!defined('FW')) {
    die('Forbidden');
}

//getleads_print($atts);
$social_style = $atts['socials']['social_style'];

$social_item1 = $atts['socials']['social-1']['social_item'];
$social_item2 = $atts['socials']['social-2'];
$social_item3 = $atts['socials']['social-3'];


?>

<?php if($social_style == 'social-1'):?>
<div class="row">
    <div class="col-md-10 col-md-offset-1 text-center share-color"> 
        <?php foreach($social_item1 as $item):?>
        <div class="col-md-4">
            <a target="_blank" href="<?php echo $item['link'];?>" style ="background:<?php echo $item['background-color'];?>" class="share-block"><i class="<?php echo $item['icon'];?>"></i><?php echo $item['title'];?></a>
        </div>
       <?php endforeach;?>
    </div>
</div><!-- /End Row -->
<?php endif;?>

<?php if($social_style == 'social-2'):?>
<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center twitter-header">
        <i class="fa fa-twitter"></i>
        <p>Follow <a  target="_blank" href="<?php echo $social_item2['link'];?>"><?php echo esc_attr($social_item2['twiter_user_name']);?></a> for updates</p>
    </div>
    <div class="col-md-8 col-md-offset-2 twt-single text-center">
        <div id="twitter-feed" data-widget-id="<?php echo $social_item2['twiter_id'];?>" class="twitter-feed"></div>
    </div>
</div>
<?php endif;?>

<?php if($social_style == 'social-3'):?>
<div class="insta-line">

    <div class="instagram-feed" data-user-name="<?php echo $social_item3['instauser_name'];?>" data-access-token="<?php echo $social_item3['access_token'];?>" data-client-id="<?php echo $social_item3['client_id'];?>">
        <ul></ul>
    </div>
    <!-- Instagram Logo -->
    <a href="" class="insta-square text-center bg-green">
        <i class="fa fa-instagram vertical-center-rel inverse"></i> 
    </a>
</div>  
<?php endif;?>

