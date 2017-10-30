<?php
if (!defined('FW')) {
    die('Forbidden');
}

/**
 * @var $map_data_attr
 * @var $atts
 * @var $content
 * @var $tag
 */
?>

<section id="locations">
    <div class="container location-select-container wow bounceInDown" data-wow-offset="200">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="location-select">
                    <div class="row">
                        <div class="col-md-6">
                            <h2><?php echo esc_attr($atts['locationtitle']); ?></h2>
                        </div>
                        <div class="col-md-6">
                            <div class="styled-select-location">
                                <select id="location-map-select"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-down-location">&nbsp;</div>
    </div>
    <div class="map wow bounceInUp" data-wow-offset="100"><!-- map by gmap3 --></div>
</section>
<script type="text/javascript">

    var locations = [
<?php foreach ($atts['locations'] as $map): ?>
            {value: "<?php echo esc_attr($map['location']); ?>"},
<?php endforeach; ?>

    ];
    var companyName = "<?php echo esc_attr($atts['markertitle']); ?>"; // Enter your event title



</script>