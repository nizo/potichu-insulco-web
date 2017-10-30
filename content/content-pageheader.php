<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$heading = '';
if (defined('FW')) {
    $page_option = fw_get_db_post_option(get_the_ID(), 'page_sections');
    $hero_heading = fw_get_db_settings_option('general_page_header');
    if ($page_option['xs_page_section'] == 'no' && isset($page_option['no']['page_header'])) {
        $heading = $page_option['no']['page_header'];
    } else {
        $heading = $hero_heading['header_title'];
    }
}
?>
<div class="page-hero-bg">
    <div class="blog-hero page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1 class="text-center  white-text"><?php echo esc_attr($heading); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>