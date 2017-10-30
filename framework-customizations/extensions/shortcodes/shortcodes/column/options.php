<?php

if (!defined('FW')) {
    die('Forbidden');
}



$options = array(
    'default_padding' => array(
        'type' => 'switch',
        'label' => __('Default Spacing', 'getleads'),
        'desc' => __('Use default left and right spacing?', 'getleads'),
        'help' => __("Default left and right spacings are set to 15px", "getleads"),
        'value' => '',
        'right-choice' => array(
            'value' => '',
            'label' => __('Yes', 'getleads'),
        ),
        'left-choice' => array(
            'value' => 'fw-col-no-padding',
            'label' => __('No', 'getleads'),
        ),
    ),
    'padding_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Inner Spacing', 'getleads'),
                'html' => '',
            ),
            'padding_top' => array(
                'label' => false,
                'desc' => __('top', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_right' => array(
                'label' => false,
                'desc' => __('right', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'padding_left' => array(
                'label' => false,
                'desc' => __('left', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'margin_group' => array(
        'type' => 'group',
        'options' => array(
            'html_label' => array(
                'type' => 'html',
                'value' => '',
                'label' => __('Outer Spacing', 'getleads'),
                'html' => '',
            ),
            'margin_top' => array(
                'label' => false,
                'desc' => __('top', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_right' => array(
                'label' => false,
                'desc' => __('right', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_bottom' => array(
                'label' => false,
                'desc' => __('bottom', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
            'margin_left' => array(
                'label' => false,
                'desc' => __('left', 'getleads'),
                'type' => 'short-text',
                'value' => '0',
            ),
        )
    ),
    'height' => array(
        'label' => __('Height', 'getleads'),
        'type' => 'radio-text',
        'value' => 'auto',
        'choices' => array(
            'auto' => __('auto', 'getleads'),
        ),
        'custom' => 'custom_height',
        'help' => __('This option to use your custom height to like just add 500 (dont include with px)', 'getleads'),
    ),
    'background_options' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'background' => array(
                'label' => __('Background', 'getleads'),
                'desc' => __('Select the background for your column', 'getleads'),
                'attr' => array('class' => 'fw-checkbox-float-left'),
                'type' => 'radio',
                'choices' => array(
                    'none' => __('None', 'getleads'),
                    'image' => __('Image', 'getleads'),
                    'bgcolor' => __('Color', 'getleads'),
                ),
                'value' => 'none'
            ),
        ),
        'choices' => array(
            'none' => array(),
            'color' => array(
                'background_color' => array(
                    'label' => __('', 'getleads'),
                    'help' => __('', 'getleads'),
                    'desc' => __('Select the background color', 'getleads'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            ),
            'image' => array(
                'background_image' => array(
                    'label' => __('', 'getleads'),
                    'type' => 'background-image',
                    'choices' => array(//	in future may will set predefined images
                    )
                ),
                'repeat' => array(
                    'label' => __('', 'getleads'),
                    'desc' => __('Select how will the background repeat', 'getleads'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => 'no-repeat',
                    'choices' => array(
                        'no-repeat' => __('No-Repeat', 'getleads'),
                        'repeat' => __('Repeat', 'getleads'),
                        'repeat-x' => __('Repeat-X', 'getleads'),
                        'repeat-y' => __('Repeat-Y', 'getleads'),
                    )
                ),
                'bg_position_x' => array(
                    'label' => __('Position', 'getleads'),
                    'desc' => __('Select the horizontal background position', 'getleads'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'left' => __('Left', 'getleads'),
                        'center' => __('Center', 'getleads'),
                        'right' => __('Right', 'getleads'),
                    )
                ),
                'bg_position_y' => array(
                    'label' => __('', 'getleads'),
                    'desc' => __('Select the vertical background position', 'getleads'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'top' => __('Top', 'getleads'),
                        'center' => __('Center', 'getleads'),
                        'bottom' => __('Bottom', 'getleads'),
                    )
                ),
                'bg_size' => array(
                    'label' => __('Size', 'getleads'),
                    'desc' => __('Select the background size', 'getleads'),
                    'help' => __('<strong>Auto</strong> - Default value, the background image has the original width and height.<br><br><strong>Cover</strong> - Scale the background image so that the background area is completely covered by the image.<br><br><strong>Contain</strong> - Scale the image to the largest size such that both its width and height can fit inside the content area.', 'getleads'),
                    'type' => 'short-select',
                    'attr' => array('class' => 'fw-checkbox-float-left'),
                    'value' => '',
                    'choices' => array(
                        'auto' => __('Auto', 'getleads'),
                        'cover' => __('Cover', 'getleads'),
                        'contain' => __('Contain', 'getleads'),
                    )
                ),
                'overlay_options' => array(
                    'type' => 'multi-picker',
                    'label' => false,
                    'desc' => false,
                    'picker' => array(
                        'overlay' => array(
                            'type' => 'switch',
                            'label' => __('Overlay Color', 'getleads'),
                            'desc' => __('Enable image overlay color?', 'getleads'),
                            'value' => 'no',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                    ),
                    'choices' => array(
                        'no' => array(),
                        'yes' => array(
                            'background' => array(
                                'label' => __('', 'getleads'),
                                'help' => __('', 'getleads'),
                                'desc' => __('Select the overlay color', 'getleads'),
                                'type' => 'rgba-color-picker',
                                'value' => 'rgba(0,0,0,0.55)'
                            ),
                        ),
                    ),
                ),
            ),
            'bgcolor' => array(
                'background_color' => array(
                    'label' => __('', 'getleads'),
                    'help' => __('', 'getleads'),
                    'desc' => __('Select the background color', 'getleads'),
                    'value' => '',
                    'type' => 'color-picker'
                ),
            )
        ),
        'show_borders' => false,
    ),
    'txtcolor' => array(
        'label' => __('Text Color', 'getleads'),
        'type' => 'color-picker',
        'desc' => 'You can change color also',
    ),
    'txt_align' => array(
        'label' => __('Text Alignment', 'getleads'),
        'desc' => __('Select the alignment for your column', 'getleads'),
        'attr' => array('class' => 'fw-checkbox-float-left'),
        'type' => 'radio',
        'choices' => array(
            'none' => __('None', 'getleads'),
            'text-left' => __('Left', 'getleads'),
            'text-center' => __('Center', 'getleads'),
            'text-right' => __('Right', 'getleads'),
        ),
        'value' => 'none'
    ),
    'animation' => array(
        'label' => __('Animation', 'getleads'),
        'type' => 'select',
        //'value' => 'c',
        'desc' => __('Add animation when your site fast load on browser.', 'getleads'),
        'choices' => array(
            '' => '---',
            array(
                'attr' => array(
                    'label' => __('Attention Effects', 'getleads'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'getleads'),
                    'bounce' => __('bounce', 'getleads'),
                    'flash' => __('flash', 'getleads'),
                    'pulse' => __('pulse', 'getleads'),
                    'rubberBand' => __('rubberBand', 'getleads'),
                    'shake' => __('shake', 'getleads'),
                    'swing' => __('swing', 'getleads'),
                    'tada' => __('tada', 'getleads'),
                    'wobble' => __('wobble', 'getleads'),
                    'jello' => __('jello', 'getleads'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Bouncing Effects', 'getleads'),
                ),
                'choices' => array(
                    'bounceIn' => __('bounceIn', 'getleads'),
                    'bounceInDown' => __('bounceInDown', 'getleads'),
                    'bounceInLeft' => __('bounceInLeft', 'getleads'),
                    'bounceInRight' => __('bounceInRight', 'getleads'),
                    'bounceInUp' => __('bounceInUp', 'getleads'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Fading Effects', 'getleads'),
                ),
                'choices' => array(
                    'fadeIn' => __('fadeIn', 'getleads'),
                    'fadeInDown' => __('fadeInDown', 'getleads'),
                    'fadeInLeft' => __('fadeInLeft', 'getleads'),
                    'fadeInRight' => __('fadeInRight', 'getleads'),
                    'fadeInUp' => __('fadeInUp', 'getleads'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Flippers', 'getleads'),
                ),
                'choices' => array(
                    'flip' => __('flip', 'getleads'),
                    'flipInX' => __('flipInX', 'getleads'),
                    'flipInY' => __('flipInY', 'getleads'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Rotating Effect', 'getleads'),
                ),
                'choices' => array(
                    'rotateIn' => __('rotateIn', 'getleads'),
                    'rotateInDownLeft' => __('rotateInDownLeft', 'getleads'),
                    'rotateInDownRight' => __('rotateInDownRight', 'getleads'),
                    'rotateInUpLeft' => __('rotateInUpLeft', 'getleads'),
                    'rotateInUpRight' => __('rotateInUpRight', 'getleads'),
                ),
            ),
            array(
                'attr' => array(
                    'label' => __('Zoom Effect', 'getleads'),
                ),
                'choices' => array(
                    'zoomIn' => __('zoomIn', 'getleads'),
                    'zoomInDown' => __('zoomInDown', 'getleads'),
                    'zoomInLeft' => __('zoomInLeft', 'getleads'),
                    'zoomInRight' => __('zoomInRight', 'getleads'),
                    'zoomInUp' => __('zoomInUp', 'getleads'),
                    'hinge' => __('hinge', 'getleads'),
                    'rollIn' => __('rollIn', 'getleads'),
                ),
            ),
        ),
    ),
    'tablet' => array(
        'label' => __('Responsive Layout for Tablet', 'getleads'),
        'desc' => __('Choose the responsive tablet display for this column', 'getleads'),
        'help' => __('Use this option in order to control how this column behaves on tablets (and devices with the resoution between 768px - 990px). Note that on phones all the columns are 1/1 by default.', 'getleads'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Automatically inherit default layout', 'getleads'),
            'fw-col-sm-2' => __('Make it a 1/6 column', 'getleads'),
            'fw-col-sm-3' => __('Make it a 1/4 column', 'getleads'),
            'fw-col-sm-4' => __('Make it a 1/3 column', 'getleads'),
            'fw-col-sm-6' => __('Make it a 1/2 column', 'getleads'),
            'fw-col-sm-8' => __('Make it a 2/3 column', 'getleads'),
            'fw-col-sm-9' => __('Make it a 3/4 column', 'getleads'),
            'fw-col-sm-12' => __('Make it a 1/1 column', 'getleads'),
        )
    ),
    'offset' => array(
        'label' => __('Layout Offset', 'getleads'),
        'desc' => __('Move columns to the right using .fw-col-md-offset-* classes ', 'getleads'),
        'help' => __('These classes increase the left margin of a column by * columns. For example, .fw-col-md-offset-4 moves .fw-col-md-4 over four columns.', 'getleads'),
        'type' => 'select',
        'value' => '',
        'choices' => array(
            '' => __('Nothing', 'getleads'),
            'fw-col-sm-offset-1' => __('moves 1 column', 'getleads'),
            'fw-col-sm-offset-2' => __('moves 2 column', 'getleads'),
            'fw-col-sm-offset-3' => __('moves 3 column', 'getleads'),
            'fw-col-sm-offset-4' => __('moves 4 column', 'getleads'),
            'fw-col-sm-offset-5' => __('moves 5 column', 'getleads'),
            'fw-col-sm-offset-6' => __('moves 6 column', 'getleads'),
        )
    ),
    'class' => array(
        'label' => __('Custom Class', 'getleads'),
        'desc' => __('Enter custom CSS class', 'getleads'),
        'help' => __('you can use this options to add a class and further style the shortcode by adding your custom CSS in the style.css file. This file is located on your server in the /wow-child/style.css', 'getleads'),
        'type' => 'text',
        'value' => '',
    ),
);
