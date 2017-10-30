<?php
/**
 * Template Name: HomePage Template
 * The template used for displaying page content in page.php
 *
 */
$frontpage_id = getleads_main(get_option('page_on_front'), false);
$self_id = getleads_main(get_the_ID(), false);
get_header();
?>
<?php while (have_posts()) : the_post(); ?>

    <!-- Intro Content begns -->
    <div id="<?php echo esc_attr(getleads_sectionID(getleads_main($post->ID, false))); ?>" class="onepage-home teaser-slider text-center">
        <?php the_content(); ?>
    </div>
    <div class="teaser-slider-ph"></div>
    <div class="content-after-slider">
        <!-- Intro Content ends -->

    <?php endwhile; // end of the loop. ?>

    <?php
    $menu_locations = get_nav_menu_locations();

    if (isset($menu_locations['primary'])) :

        $menu = wp_get_nav_menu_object($menu_locations['primary']);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        $menu_items_include = array();
        foreach ($menu_items as $item) {
            if (($item->object == 'page') && (getleads_get_post_meta(getleads_main($item->object_id, false), 'xs_page_section') == "on") && ($item->object_id != $self_id))
                $menu_items_include[] = $item->object_id;
        }

        $query = new WP_Query(array('post_type' => 'page', 'post__in' => $menu_items_include, 'posts_per_page' => count($menu_items_include), 'orderby' => 'post__in'));

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                ?>
                <div id="<?php echo esc_attr(getleads_sectionID(getleads_main($post->ID, false))); ?>" class="section-wraper">
                    <?php the_content(); ?>


                    <?php getleads_edit_section(); ?>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
    endif;
    ?>
</div>
<?php get_footer(); ?>