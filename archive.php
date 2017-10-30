<?php
/**
 * archive.php
 *
 * The template for displaying archive pages.
 */
?>

<?php get_header(); ?>
<div class="blog" role="main">
    <?php getleads_blog_hero_heading() ?>
    <div class="main-content blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <?php if (have_posts()) : ?>
                        <header class="page-header">
                            <?php
                            the_archive_title('<h1>', '</h1>');
                            ?>
                        </header>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <?php getleads_paging_nav(); ?>
                    <?php else : ?>
                        <?php get_template_part('content', 'none'); ?>
                    <?php endif; ?>
                </div> <!-- end main-content -->

                <?php get_sidebar(); ?>
            </div>
        </div> 
    </div> 
</div> <!-- end main-content -->
<?php get_footer(); ?>