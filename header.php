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

        <?php wp_head(); ?>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108933630-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-108933630-1');
		</script>

    </head>
    <body <?php body_class(); ?>  data-spy="scroll" data-target="#main-navbar">

        <?php
        getleads_prerloader();

        //Navigation
        get_template_part('content', 'nav');

        