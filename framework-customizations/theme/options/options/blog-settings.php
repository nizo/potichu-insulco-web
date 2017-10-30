<?php

if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'blog_settings' => array(
        'title' => esc_html__('Blog Settings', 'getleads'),
        'type' => 'tab',
        'options' => array(
            'header-posts-box' => array(
                'title' => esc_html__('Posts Header', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'general_posts_header' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'posts_header_group' => array(
                                'type' => 'group',
                                'options' => array(
                                    'header_title' => array(
                                        'type' => 'text',
                                        'label' => 'Blog Title',
                                        'desc' => 'Add your blog hero title',
                                    ),
                                    'header_image' => array(
                                        'label' => esc_html__('Header Image', 'getleads'),
                                        'desc' => esc_html__('Upload a header image', 'getleads'),
                                        'help' => esc_html__("This default header image will be used for all your posts.", "getleads"),
                                        'type' => 'upload'
                                    ),
                                    'header_overlay_color' => array(
                                        'label' => esc_html__('', 'getleads'),
                                        'desc' => esc_html__('Select the image overlay color', 'getleads'),
                                        'help' => esc_html__('', 'getleads'),
                                        'value' => 'rgba(26, 198, 255, 0.55)',
                                        'type' => 'rgba-color-picker'
                                    ),
                                )
                            ),
                        )
                    )
                )
            ),
            'blog' => array(
                'title' => esc_html__('Blog Settings', 'getleads'),
                'type' => 'box',
                'options' => array(
                    'blog_display_settings' => array(
                        'type' => 'multi',
                        'label' => false,
                        'attr' => array(
                            'class' => 'fw-option-type-multi-show-borders',
                        ),
                        'inner-options' => array(
                            'post_date' => array(
                                'label' => esc_html__('Post Date', 'getleads'),
                                'desc' => esc_html__('Show post date?', 'getleads'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'getleads')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'getleads')
                                ),
                                'value' => 'yes',
                            ),
                            'post_author' => array(
                                'label' => esc_html__('Post Author', 'getleads'),
                                'desc' => esc_html__('Show post author?', 'getleads'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'getleads')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'getleads')
                                ),
                                'value' => 'yes',
                            ),
                            'post_categories' => array(
                                'label' => esc_html__('Post Categories', 'getleads'),
                                'desc' => esc_html__('Show post categories?', 'getleads'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'getleads')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'getleads')
                                ),
                                'value' => 'yes',
                            ),
                            'post_comment' => array(
                                'label' => esc_html__('Post Comment', 'getleads'),
                                'desc' => esc_html__('Show post Comment?', 'getleads'),
                                'type' => 'switch',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Yes', 'getleads')
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('No', 'getleads')
                                ),
                                'value' => 'yes',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
