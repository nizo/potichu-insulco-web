<?php
/**
 * header.php
 *
 * The header for the theme.
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!-- Favicon, Apple Touch Icons -->
        <?php getleads_site_icon(); ?>

        <?php
			wp_head();
			echo get_option('pixel_tracking_code', '');
			echo get_option('google_tag_manager_head', '');
		?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PWWN4JH');</script>
<!-- End Google Tag Manager -->
</head>

    <body <?php body_class(); ?>  data-spy="scroll" data-target="#main-navbar">

		<?php
		echo get_option('google_tag_manager_body', '');
        getleads_prerloader();

        //Navigation
        get_template_part('content', 'nav');