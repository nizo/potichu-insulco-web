<?php
if (!defined('FW')) {
    die('Forbidden');

    /**
     * @var array $atts
     */
}

$term_id = (int) $atts['category'];


if ($term_id == 0) {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date'
    );
} else {
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'id',
                'terms' => $term_id
            )
        )
    );
}

$query = new WP_Query($args);
?>

<div class="content-block c3 blog">
    <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
            <div class="col-sm-4">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('getleads_recent_post', array( 'class' => 'img-responsive img-rounded' )); ?>
                </a>
                <div class="post-info">
                    <div class="date text-edit">
                        <span class="day"><?php the_time('j'); ?></span>
                        <?php the_time('M'); 
                        
                        ?>
                    </div>

                    <a href="<?php the_permalink(); ?>"><h5><?php echo substr(get_the_title(), 0, 25); ?></h5></a>
                    <h6 class="p-opacity">Posted by <?php the_author(); ?> in <strong><?php $categories = get_the_category(); echo esc_html($categories[0]->name);?></strong></h6>
                </div>
                <p class="p-opacity"><?php echo substr(get_the_excerpt(), 0, 150);?></p>
                <a href="<?php the_permalink(); ?>" class="more-link edit"><?php _e('Continue Reading..', 'getleads') ?></a>
            </div>
            <?php
        endwhile;

    else :
        // If no content, include the "No posts found" template.
        get_template_part('content', 'none');

    endif;
    ?>
</div>

<?php wp_reset_query(); ?>