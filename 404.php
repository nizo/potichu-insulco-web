<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();
?>




<?php
/**
 * 404.php
 *
 * The template for displaying 404 pages (Not Found).
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php getleads_blog_hero_heading() ?>
    <div class="main-content blog-wrap error-page">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="error404">404</div>
                </div>
                <div class="col-md-5 col-md-offset-1 error-search">
                    <?php get_template_part('content', 'none'); ?>
                </div>
            </div> 
        </div> 
    </div> <!-- end main-content -->
    <?php get_footer(); ?>