<?php if (!defined('FW')) die('Forbidden'); ?>




<div class="twiiter-post">
    <div class="twitter-icon"><i class="fa fa-twitter"></i></div>
    <div id="tweet"></div>
</div>

<script type="text/javascript">
    //569000074533814272
    jQuery(document).ready(function ($) {
        var xs_tweet = {
            "id": '<?php echo esc_attr($atts['twitterid']); ?>',
            "domId": 'tweet',
            "maxTweets": <?php echo esc_attr($atts['twitterpost']); ?>,
            "enableLinks": true,
            "showUser": true,
            "showTime": true,
            "dateFunction": '',
            "showRetweet": false,
            "customCallback": handleTweets,
            "showInteraction": false
        };

        function handleTweets(tweets) {
            var x = tweets.length;
            var n = 0;
            var element = document.getElementById('tweet');
            var html = '<div class="slides">';
            while (n < x) {
                html += '<div>' + tweets[n] + '</div>';
                n++;
            }
            html += '</div>';
            element.innerHTML = html;
            /* Twits attached to owl-carousel */
            $("#tweet .slides").owlCarousel({
                responsiveClass: true,
                autoplay: true,
                items: 1,
                autoplayHoverPause: true,
                loop: true
            });
        }

        twitterFetcher.fetch(xs_tweet);
    });
</script>