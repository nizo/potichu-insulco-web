<?php
if (!defined('FW')) {
    die('Forbidden');
}
$id = uniqid('tab-');


$tabs_style = $atts['tabs_position_picker']['tabs_type'];
$tabs_one = $atts['tabs_position_picker']['one']['tabs'];


$tabs_two = $atts['tabs_position_picker']['two']['tabs2'];
?>

<?php if ($tabs_style == 'one'): ?>
    <div class="row features-tab m-y">


        <?php
        $counter = 1;
        foreach ($tabs_one as $tab_item):
            $tabs1_style = $tab_item['tab_item']['selected_value'];
            $tabs_inner_item = $tab_item['tab_item']['text']['tab_content'];

            $tabs_inner_image_item = $tab_item['tab_item']['image'];
            ?>
            <!--Tab Item -->
            <div class="tab-title <?php echo ($counter == 1) ? 'current' : ''; ?>">
                <p class="f-w-900 m-b-0">
                    <?php
                    if ($tab_item['tab_title']) {
                        echo wp_kses_post($tab_item['tab_title']);
                    }
                    ?>
                    <i class="fa fa-caret-right i-right"></i>
                </p> 
            </div>
            <div class="tab-content">
                <div class="row text-center">
                    <div class="col-md-12">
                        <?php if ($tab_item['tab_content_top_title']) { ?>
                            <h4><?php echo wp_kses_post($tab_item['tab_content_top_title']); ?></h4>
                        <?php } ?>

                        <?php if ($tab_item['tab_content_top_subtitle']) { ?>
                            <p class="p-tab m-b-md"><?php echo wp_kses_post($tab_item['tab_content_top_subtitle']); ?></p>
                        <?php } ?>
                    </div>
                </div>

                <div class="row c2">
                    <?php if ($tabs1_style == 'text'): ?>
                        <?php
                        foreach ($tabs_inner_item as $item) :
                            if ($item) :
                                ?>
                                <div class="col-md-6">
                                    <div class="features-block">
                                        <div class="col-sm-12 icon-left m-b-md clearfix"> 
                                            <i class="<?php echo $item['tab_content_icon']; ?>"></i>
                                            <?php if (!empty($item['tab_content_title'])): ?>
                                                <h5 class="m-t f-w-900"><?php echo wp_kses_post($item['tab_content_title']); ?></h5>
                                            <?php endif; ?>
                                            <p><?php echo wp_kses_post($item['tab_main_content']); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endforeach;
                        ?>
                        <?php
                    endif;
                    if ($tabs1_style == 'image'):
                        ?>

                        <div class="col-md-8 col-md-offset-2">
                            <?php
                            $img = $tabs_inner_image_item['tab_image'];
                            if (!empty($img)):
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" class="img-responsive m-x-auto" alt="<?php echo wp_kses_post($tab_item['tab_content_top_title']); ?>">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div><!-- /End Tab Content -->

            <?php
            $counter++;
        endforeach;
        ?>
    </div><!-- /End Features-tab -->
<?php endif; ?>




<?php if ($tabs_style == 'two'): ?>

    <div class="row features-panels">
        <!-- Features Nav-Tabs -->
        <div class="col-md-12 p-b-md">
            <ul class="nav nav-tabs nav-justified m-b-md" role="tablist">

                <?php
                $counter = 1;
                foreach ($tabs_two as $item) :
                    ?>
                    <li role="presentation"  <?php echo ($counter == 1) ? 'class="active"' : ''; ?>>
                        <a href="#<?php echo $id . '-' . $counter; ?>" role="tab" data-toggle="tab">
                            <img src="<?php echo esc_url($item['tab_image']['url']); ?>" alt=""><?php echo wp_kses_post($item['tab_title']); ?></a>
                    </li>
                    <?php
                    $counter++;
                endforeach;
                ?>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content">
            <?php
            $cnt = 1;
            foreach ($tabs_two as $main_item) :
                
                
                $tab_two_inner_item = $main_item['tab_list_item'];
            
            

                $image = '<div class="col-md-6"><img src="' . esc_url(getleads_get_image($main_item['tab_content_image'], '', true)) . '" alt="' . getleads_theme_translate(esc_attr($main_item['tab_content_title'])) . '" class="img-responsive m-x-auto"/> </div>';
                ?>
                <div role="tabpanel" class="tab-pane fade in <?php echo ($cnt == 1) ? 'in active' : ''; ?> wow fadeIn" id="<?php echo $id . '-' . $cnt; ?>">
                    <div class="content-block content-align-md">
                        <div class="col-md-10 c2 col-md-offset-1 y-middle">

                            <?php
                            if ($cnt % 2 != 0) {
                                echo $image;
                            }
                            ?>
                            <div class="col-md-6">
                                <h3 class="f-w-900"><?php echo wp_kses_post($main_item['tab_content_title']); ?></h3>
                                <h5 class="m-t-md m-b-md"><?php echo wp_kses_post($main_item['tab_content_sub_title']); ?></h5>
                                <p class="m-b-md"><?php echo wp_kses_post($main_item['tab_content']); ?></p>
                                <?php foreach ($tab_two_inner_item as $inner_item): 
                                    
                                ?>
                                    <div class="icon-left"> 
                                        <i class="fa fa-check-circle-o" style="color:#439FE0;"></i>
                                        <p class="m-t"><?php echo wp_kses_post($inner_item); ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <?php
                            if ($cnt % 2 == 0) {
                                echo $image;
                            }
                            ?>
                        </div>
                    </div><!-- /End Content Block-->
                </div><!-- /End of Tab-panel 1 -->
                <?php
                $cnt++;
            endforeach;
            ?>
        </div><!-- /End Tab-Content -->
    </div><!-- /End Row -->


        <?php
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     endif; 







