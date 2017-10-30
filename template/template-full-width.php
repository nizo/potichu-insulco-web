<?php
/**
 * template-full-width.php
 *
 * Template Name: Full Width Page
 */
?>

<?php get_header(); ?>
<?php get_template_part('content/content', 'pageheader')?>
<div class="main-content full-iwdth-page"  role="main">

    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <!-- Article header -->
            <header class="entry-header"> <?php
                if (has_post_thumbnail() && !post_password_required()) :
                    ?>
                    <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
                <?php endif; ?>

                <h1 class="heading"><?php //the_title();    ?></h1>
            </header> <!-- end entry-header -->

            <!-- Article content -->
            <div class="entry-contents">
                <?php the_content(); ?>

                <?php wp_link_pages(); ?>
            </div> <!-- end entry-content -->

            <!-- Article footer -->
            <footer class="entry-footer">
                <?php
                if (is_user_logged_in()) {
                    echo '<p>';
                    edit_post_link(esc_html__('Edit', 'getleads'), '<span class="meta-edit">', '</span>');
                    echo '</p>';
                }
                ?>
            </footer> <!-- end entry-footer -->
        </article>

        <?php comments_template(); ?>
    <?php endwhile; ?>

</div> 
<?php get_footer(); ?>