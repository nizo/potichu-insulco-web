<?php
if (!defined('FW')) {
    die('Forbidden');
}

$id = uniqid('tab-cont-');

$timeline_style = $atts['timelines']['timeline_style'];

$timeline_item1 = $atts['timelines']['timeline-1']['timeline_item'];
$timeline_item2 = $atts['timelines']['timeline-2']['tabs'];

//$color = $atts['txt_color'];
?>

<?php if ($timeline_style == 'timeline-1'): ?>

    <div class="col-md-6 col-md-offset-3">
        <ul class="timeline">
            <?php
            foreach ($timeline_item1 as $timeline):
                if ($timeline):
                    ?>

                    <li class="event" data-date="<?php echo $timeline['event_date']; ?>">

                        <?php if (!empty($timeline['title'])) { ?>
                            <h5 class="f-w-900"><?php echo wp_kses_post($timeline['title']); ?></h5>
                        <?php } ?>

                        <?php if (!empty($timeline['message'])) { ?>
                            <p><?php echo wp_kses_post($timeline['message']); ?></p>
                        <?php } ?>
                    </li>

                    <?php
                endif;
            endforeach;
            ?>
        </ul>
    </div>

<?php endif; ?>


<?php if ($timeline_style == 'timeline-2'): ?>

    <div class="timeline-tabs">
        <ul class="nav nav-tabs m-b-md" role="tablist">
            <?php
            $counter = 1;
            foreach ($timeline_item2 as $tab) :
                ?>
                <li role="presentation" <?php echo ($counter == 1) ? 'class="active"' : ''; ?>><a href="#<?php echo $id . '-' . $counter; ?>" role="tab" data-toggle="tab" class="text-edit"><?php echo esc_attr($tab['tab_title']); ?></a></li>
                <?php
                $counter++;
            endforeach;
            ?>
        </ul>
    </div>

    <div class="tab-content">
        <?php
        $cnt = 1;
        foreach ($timeline_item2 as $item) :
            ?>

            <?php
            $inner_item = $item['content_item'];
            ?>
            <div role="tabpanel" class="tab-pane fade in <?php echo ($cnt == 1) ? 'active' : ''; ?>" id="<?php echo $id . '-' . $cnt; ?>">
                <div class="col-md-6 col-md-offset-3">
                    <ul class="timeline">
                        <?php foreach ($inner_item as $items) : ?>
                            <?php if ($items): ?>
                                <li class="event" data-date="<?php echo esc_attr($items['event_date']); ?>">
                                    <?php if ($items['content_title']): ?>
                                        <h5 class="f-w-900"><?php echo esc_attr($items['content_title']); ?></h5>
                                    <?php endif; ?>

                                    <?php if ($items['content_message']): ?>
                                        <p><?php echo esc_attr($items['content_message']); ?></p>
                                    <?php endif; ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div><!-- /End Conl -->
            </div><!-- /End Tab-Panel 1 -->
            <?php
            $cnt++;
        endforeach;
        ?>
    </div><!-- /End Tab-Content -->
    <?php
 endif;





