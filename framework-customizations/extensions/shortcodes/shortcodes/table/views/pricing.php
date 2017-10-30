<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var array $atts
 */
$class_width = 'fw-col-sm-' . ceil(12 / count($atts['table']['cols']));
?>
<div class="pricing-3po">
    <?php
    foreach ($atts['table']['cols'] as $col_key => $col):
        //fw_print($col['name']);
        $colx = $col['name'];
        if ($colx == 'highlight-col') {
            $colm = 'bg-green text-white';
        } else {
            $colm = $colx;
        }
        ?>
        <div class="<?php echo $class_width . ' ' . $col['name']; ?> ">
            <div class="info <?php echo $colm; ?>">
                <?php foreach ($atts['table']['rows'] as $row_key => $row): ?>
                    <?php if ($col['name'] == 'desc-col') : ?>
                        <div class="fw-default-row">
                            <?php $value = $atts['table']['content'][$row_key][$col_key]['textarea']; ?>
                            <?php echo esc_attr($value) ?>
                        </div>
                        <?php
                        continue;
                    endif;
                    ?>
                    <?php if ($row['name'] === 'heading-row'): ?>
                        <div class="heading-row category">
                            <?php $value = $atts['table']['content'][$row_key][$col_key]['textarea']; ?>

                            <?php echo (empty($value) && $col['name'] === 'desc-col') ? '&nbps;' : $value; ?>

                        </div>
                    <?php elseif ($row['name'] === 'pricing-row'): ?>
                        <div class="fw-pricing-row price">
                            <?php $amount = $atts['table']['content'][$row_key][$col_key]['amount'] ?>
                            <?php $desc = $atts['table']['content'][$row_key][$col_key]['description']; ?>
                            <span>
                                <?php echo (empty($value) && $col['name'] === 'desc-col') ? '&nbps;' : $amount; ?>
                                <small>
                                    <?php echo (empty($value) && $col['name'] === 'desc-col') ? '&nbps;' : $desc; ?>
                                </small>
                            </span>

                        </div>
                    <?php elseif ($row['name'] == 'button-row') : ?>
                        <?php $button = fw_ext('shortcodes')->get_shortcode('button'); ?>
                        <div class="fw-button-row">
                            <?php if (false === empty($atts['table']['content'][$row_key][$col_key]['button']) and false === empty($button)) : ?>
                                <?php echo $button->render($atts['table']['content'][$row_key][$col_key]['button']); ?>
                            <?php else : ?>
                                <span>&nbsp;</span>
                            <?php endif; ?>
                        </div>
                    <?php elseif ($row['name'] === 'switch-row') : ?>
                        <div class="fw-switch-row">
                            <?php $value = $atts['table']['content'][$row_key][$col_key]['switch']; ?>
                            <span>
                                <i class="fa fw-price-icon-<?php echo $value ?>"></i>
                            </span>
                        </div>
                    <?php elseif ($row['name'] === 'default-row') : ?>
                        <div class="fw-default-row pricing-details">
                            <?php $value = $atts['table']['content'][$row_key][$col_key]['textarea']; ?>
                            <?php echo esc_attr($value) ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>