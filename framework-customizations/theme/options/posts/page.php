<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'main' => array(
        'title' => false,
        'type' => 'box',
        'options' => array(
            'Page' => array(
                'title' => esc_html__('Page Options', 'getleads'),
                'type' => 'tab',
                'options' => array(
                    'page_sections' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'xs_page_section' => array(
                                'label' => esc_html__('This page is a section:', 'getleads'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'on',
                                    'label' => esc_html__('Yes', 'getleads')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'getleads')
                                ),
                                'value' => 'no',
                                'desc' => wp_kses_post('If this a <b>One page Section</b>,  set this field to <b>yes</b>. And if this page is not section, set it to <b>no</b>', 'getleads'),
                                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>", esc_html__('If this page for one page section. set yes ', 'getleads'), esc_html__('For One page always will be <b>yes</b>', 'getleads')
                                ),
                            )
                        ),
                        'choices' => array(
                            'on' => array(
                                'hide_title_from_menu' => array(
                                    'type' => 'switch',
                                    'label' => esc_html__('Hide title from menu ?', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'yes',
                                        'label' => esc_html__('Yes', 'getleads')
                                    ),
                                    'left-choice' => array(
                                        'value' => 'no',
                                        'label' => esc_html__('No', 'getleads')
                                    ),
                                    'value' => 'no',
                                    'desc' => esc_html__('If you dont want to add title(or this page) on menu. you can set yes. if you set yes. this menu will be hide in menu.', 'getleads'),
                                ),
                            ),
                            'no' => array(
                                'page_header' => array(
                                    'type' => 'text',
                                    'label' => __('header text', 'getleads'),
                                    'desc' => __('Add your page header text', 'getleads'),
                                )
                            ),
                        ),
                        'show_borders' => false,
                    ),
                ),
            ),
        ),
    ),
);

