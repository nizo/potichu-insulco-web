<?php

if (!defined('FW'))
    die('Forbidden');

$options = array(
    'homepage_style_settings' => array(
        'type' => 'multi-picker',
        'label' => false,
        'desc' => false,
        'picker' => array(
            'homepage_style' => array(
                'label' => __('Homepage Style', 'getleads'),
                'type' => 'image-picker',
                'value' => 'home-1',
                'desc' => __('Select Home page style.', 'getleads'),
                'choices' => array(
                    'home-1' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style1.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style1.jpg'
                        ),
                    ),
                    'home-2' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style2.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style2.jpg'
                        ),
                    ),
                    'home-3' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style3.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style3.jpg'
                        ),
                    ),
                    'home-4' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style4.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style4.jpg'
                        ),
                    ),
                    'home-5' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style5.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style5.jpg'
                        ),
                    ),
                    'home-6' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style6.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style6.jpg'
                        ),
                    ),
                    'home-7' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style7.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style7.jpg'
                        ),
                    ),
                    'home-8' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style8.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style8.jpg'
                        ),
                    ),
                    'home-9' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style9.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style9.jpg'
                        ),
                    ),
                    'home-10' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style10.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style10.jpg'
                        ),
                    ),
                    'home-11' => array(
                        'small' => array(
                            'height' => 70,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style11.jpg'
                        ),
                        'large' => array(
                            'height' => 214,
                            'src' => GETLEADS_IMAGES . '/image-picker/home-style11.jpg'
                        ),
                    ),
                ),
            ),
        ),
        'choices' => array(
            'home-1' => array(
                'home_button' => array(
                    'label' => __('Button', 'getleads'),
                    'type' => 'addable-popup',
                    'limit' => '2',
                    'desc' => __('Add Homepage button', 'getleads'),
                    'template' => 'Button : {{- btn_label }}',
                    'popup-options' => array(
                        'btn_style' => array(
                            'label' => __('Style', 'getleads'),
                            'desc' => __('Choose button style', 'getleads'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                ),
                            ),
                        ),
                        'btn_label' => array(
                            'label' => __('Button Label', 'getleads'),
                            'desc' => __('This is the text that appears on your button', 'getleads'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'btn_link' => array(
                            'label' => __('Button Link', 'getleads'),
                            'desc' => __('Where should your button link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'btn_shadow' => array(
                            'type' => 'switch',
                            'label' => __('Button Shadow', 'getleads'),
                            'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                            'right-choice' => array(
                                'value' => 'shadow',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'new-icon',
                                    'label' => __('Icon', 'getleads')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'getleads'),
                                    'desc' => __('Choose the icon position', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'getleads'),
                                    ),
                                ),
                            )
                        ),
                        'btn_target' => array(
                            'type' => 'switch',
                            'label' => __('Open Link in New Window', 'getleads'),
                            'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'size' => array(
                            'label' => __('Button Size', 'getleads'),
                            'desc' => __('Choose a Size for your button', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'lg' => __('Large', 'getleads'),
                                'md' => __('Medium', 'getleads'),
                                'sm' => __('Small', 'getleads'),
                            )
                        ),
                        'letter_case' => array(
                            'label' => __('Letter Case', 'getleads'),
                            'desc' => __('Choose a lettercase for your button text', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'getleads'),
                                'capitalize' => __('Capitalize', 'getleads'),
                                'lowercase' => __('Lowercase', 'getleads'),
                            )
                        ),
                    ),
                ),
            ),
            'home-2' => array(
                'mailchimp' => array(
                    'type' => 'text',
                    'label' => __('Mailchimp URL', 'getleads'),
                    'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'getleads'),
                    'value' => 'http://themedept.us9.list-manage.com/subscribe/post?u=a8cd4fa72585379e205821fa2&amp;id=c4132664bd',
                ),
                'button_text' => array(
                    'type' => 'text',
                    'label' => __('Button Text', 'getleads'),
                    'value' => __('Lets Try Free', 'getleads'),
                ),
                'copyright_text' => array(
                    'type' => 'textarea',
                    'label' => __('Copyright Text', 'getleads'),
                    'value' => __('*Get my insights on being an SEO and Growth expert, my free ebook and curated articles on marketing and growth hacking weekly', 'getleads'),
                ),
                'side_image' => array(
                    'type' => 'upload',
                    'label' => __('Right side Image', 'getleads'),
                    'desc' => __('Upload any image mobile or whatever.  which will display in right side.  you can use it blank. so only left side text will show in home page', 'getleads'),
                )
            ),
            'home-3' => array(
                'apps_title' => array(
                    'type' => 'text',
                    'label' => __('Apps Title', 'getleads'),
                    'desc' => __('Type your apps title', 'getleads'),
                ),
                'apps_image' => array(
                    'label' => __('Apps Image', 'getleads'),
                    'limit' => '2',
                    'type' => 'addable-popup',
                    'desc' => __('Add apps image', 'getleads'),
                    'template' => 'Apps : {{- alt }}',
                    'popup-options' => array(
                        'image' => array(
                            'type' => 'upload',
                            'label' => __('Apps Image', 'getleads'),
                            'desc' => __('Upload your apps image', 'getleads'),
                        ),
                        'alt' => array(
                            'type' => 'text',
                            'label' => __('Image Alt', 'getleads'),
                            'desc' => __('Type image alt tag', 'getleads'),
                        ),
                        'link' => array(
                            'type' => 'text',
                            'label' => __('Image Link', 'getleads'),
                            'desc' => __('Input image link where should place it', 'getleads'),
                        ),
                    ),
                ),
                'right_image' => array(
                    'type' => 'upload',
                    'label' => __('Right Image', 'getleads'),
                    'desc' => __('Upload any image mobile or whatever.  which will display in right side.  you can use it blank. so only left side text will show in home page', 'getleads'),
                )
            ),
            'home-4' => array(
                'large_image' => array(
                    'type' => 'upload',
                    'label' => __('Right Large Image', 'getleads'),
                    'desc' => __('Upload your right large image', 'getleads'),
                ),
                'home_button' => array(
                    'label' => __('Button', 'getleads'),
                    'type' => 'addable-popup',
                    'limit' => '2',
                    'desc' => __('Add Homepage button', 'getleads'),
                    'template' => 'Button : {{- btn_label }}',
                    'popup-options' => array(
                        'btn_style' => array(
                            'label' => __('Style', 'getleads'),
                            'desc' => __('Choose button style', 'getleads'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                ),
                            ),
                        ),
                        'btn_label' => array(
                            'label' => __('Button Label', 'getleads'),
                            'desc' => __('This is the text that appears on your button', 'getleads'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'btn_link' => array(
                            'label' => __('Button Link', 'getleads'),
                            'desc' => __('Where should your button link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'btn_shadow' => array(
                            'type' => 'switch',
                            'label' => __('Button Shadow', 'getleads'),
                            'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                            'right-choice' => array(
                                'value' => 'shadow',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'new-icon',
                                    'label' => __('Icon', 'getleads')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'getleads'),
                                    'desc' => __('Choose the icon position', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'getleads'),
                                    ),
                                ),
                            )
                        ),
                        'btn_target' => array(
                            'type' => 'switch',
                            'label' => __('Open Link in New Window', 'getleads'),
                            'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'size' => array(
                            'label' => __('Button Size', 'getleads'),
                            'desc' => __('Choose a Size for your button', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'lg' => __('Large', 'getleads'),
                                'md' => __('Medium', 'getleads'),
                                'sm' => __('Small', 'getleads'),
                            )
                        ),
                        'letter_case' => array(
                            'label' => __('Letter Case', 'getleads'),
                            'desc' => __('Choose a lettercase for your button text', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'getleads'),
                                'capitalize' => __('Capitalize', 'getleads'),
                                'lowercase' => __('Lowercase', 'getleads'),
                            )
                        ),
                    ),
                ),
            ),
            'home-5' => array(
                'form_shortcode' => array(
                    'type' => 'text',
                    'label' => __('Form shortcode', 'getleads'),
                    'desc' => __('Genarate a shortcode from calerda form. ', 'getleads'),
                    'value' => '[caldera_form id="CF572710a7cd494"]',
                ),
            ),
            'home-6' => array(
                'form_shortcode' => array(
                    'type' => 'text',
                    'label' => __('Form shortcode', 'getleads'),
                    'desc' => __('Genarate a shortcode from calerda form. ', 'getleads'),
                    'value' => '[caldera_form id="CF572710a7cd494"]',
                ),
                'main_content' => array(
                    'type' => 'textarea',
                    'label' => __('Main Content', 'getleads'),
                    'desc' => __('Type your main content text', 'getleads'),
                )
            ),
            'home-7' => array(
                'video_url' => array(
                    'type' => 'text',
                    'label' => __('Video URL', 'getleads'),
                    'value' => __('https://www.youtube.com/watch?v=nrJtHemSPW4', 'getleads'),
                ),
                'sb_title' => array(
                    'type' => 'text',
                    'label' => __('Subscribe Title', 'getleads'),
                    'value' => __('Over 350 hours of lessons on how to code.', 'getleads'),
                ),
                'sb_btn_txt' => array(
                    'type' => 'text',
                    'label' => __('Subscribe Button Text', 'getleads'),
                    'value' => __('Get Started', 'getleads'),
                ),
                'mailchimp' => array(
                    'type' => 'text',
                    'label' => __('Mailchimp URL', 'getleads'),
                    'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'getleads'),
                    'value' => __('http://themedept.us9.list-manage.com/subscribe/post?u=a8cd4fa72585379e205821fa2&amp;id=c4132664bd', 'getleads'),
                )
            ),
            'home-8' => array(
                'video_url' => array(
                    'type' => 'text',
                    'label' => __('Video URL', 'getleads'),
                    'value' => __('https://www.youtube.com/watch?v=nrJtHemSPW4', 'getleads'),
                ),
                'image' => array(
                    'type' => 'upload',
                    'label' => __('Home Image', 'getleads'),
                    'desc' => __('Upload your home image.', 'getleads'),
                ),
                'sb_title' => array(
                    'type' => 'text',
                    'label' => __('Subscribe Title', 'getleads'),
                    'value' => __('Over 350 hours of lessons on how to code.', 'getleads'),
                ),
                'sb_btn_txt' => array(
                    'type' => 'text',
                    'label' => __('Subscribe Button Text', 'getleads'),
                    'value' => __('Get Started', 'getleads'),
                ),
                'mailchimp' => array(
                    'type' => 'text',
                    'label' => __('Mailchimp URL', 'getleads'),
                    'desc' => __('Add mailchimp OptIn URL. you can check this how to get optin Mailchimp OptIn URL <b>http://goo.gl/vjnzZm</b>', 'getleads'),
                    'value' => __('http://themedept.us9.list-manage.com/subscribe/post?u=a8cd4fa72585379e205821fa2&amp;id=c4132664bd', 'getleads'),
                )
            ),
            'home-9' => array(
                'date_place' => array(
                    'type' => 'text',
                    'label' => __('Date & Place', 'getleads'),
                    'desc' => __('Input Date & Place Here', 'getleads'),
                    'value' => __('16 - 18 December 2016. Melbourne, Australia.', 'getleads'),
                ),
                'event' => array(
                    'type' => 'date-picker',
                    'label' => __('Events Countdown', 'getleads'),
                    'desc' => __('Add event date from here', 'getleads'),
                    'min-date' => null,
                    'value' => '',
                ),
                'event_button' => array(
                    'label' => __('Event Button', 'getleads'),
                    'type' => 'addable-popup',
                    'limit' => '2',
                    'desc' => __('Add button', 'getleads'),
                    'template' => 'Button : {{- btn_label }}',
                    'popup-options' => array(
                        'btn_style' => array(
                            'label' => __('Style', 'getleads'),
                            'desc' => __('Choose button style', 'getleads'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                ),
                            ),
                        ),
                        'btn_label' => array(
                            'label' => __('Button Label', 'getleads'),
                            'desc' => __('This is the text that appears on your button', 'getleads'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'btn_link' => array(
                            'label' => __('Button Link', 'getleads'),
                            'desc' => __('Where should your button link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'btn_target' => array(
                            'type' => 'switch',
                            'label' => __('Open Link in New Window', 'getleads'),
                            'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_shadow' => array(
                            'type' => 'switch',
                            'label' => __('Button Shadow', 'getleads'),
                            'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                            'right-choice' => array(
                                'value' => 'shadow',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'new-icon',
                                    'label' => __('Icon', 'getleads')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'getleads'),
                                    'desc' => __('Choose the icon position', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'getleads'),
                                    ),
                                ),
                            )
                        ),
                        'size' => array(
                            'label' => __('Button Size', 'getleads'),
                            'desc' => __('Choose a Size for your button', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'lg' => __('Large', 'getleads'),
                                'md' => __('Medium', 'getleads'),
                                'sm' => __('Small', 'getleads'),
                            )
                        ),
                        'letter_case' => array(
                            'label' => __('Letter Case', 'getleads'),
                            'desc' => __('Choose a lettercase for your button text', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'getleads'),
                                'capitalize' => __('Capitalize', 'getleads'),
                                'lowercase' => __('Lowercase', 'getleads'),
                            )
                        ),
                    )
                ),
//                'sbs_btn_lnk' => array(
//                    'type' => 'text',
//                    'label' => __('Subscription Button Link', 'getleads'),
//                    'desc' => __('Input Subscription Button Link', 'getleads'),
//                ),
                'sbs_msg' => array(
                    'type' => 'textarea',
                    'label' => __('Event Message', 'getleads'),
                    'desc' => __('Type event message', 'getleads'),
                )
            ),
            'home-10' => array(
                'slider_button' => array(
                    'label' => __('Button', 'getleads'),
                    'type' => 'addable-popup',
                    'limit' => '2',
                    'desc' => __('Add Slider button button', 'getleads'),
                    'template' => 'Button : {{- btn_label }}',
                    'popup-options' => array(
                        'btn_style' => array(
                            'label' => __('Style', 'getleads'),
                            'desc' => __('Choose button style', 'getleads'),
                            'type' => 'image-picker',
                            'value' => '',
                            'choices' => array(
                                'default' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                    ),
                                ),
                                'primary' => array(
                                    'small' => array(
                                        'height' => 70,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                    'large' => array(
                                        'height' => 208,
                                        'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                    ),
                                ),
                            ),
                        ),
                        'btn_label' => array(
                            'label' => __('Button Label', 'getleads'),
                            'desc' => __('This is the text that appears on your button', 'getleads'),
                            'type' => 'text',
                            'value' => 'Read More'
                        ),
                        'btn_link' => array(
                            'label' => __('Button Link', 'getleads'),
                            'desc' => __('Where should your button link to', 'getleads'),
                            'type' => 'text',
                            'value' => '#'
                        ),
                        'btn_target' => array(
                            'type' => 'switch',
                            'label' => __('Open Link in New Window', 'getleads'),
                            'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                            'right-choice' => array(
                                'value' => '_blank',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => '_self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_shadow' => array(
                            'type' => 'switch',
                            'label' => __('Button Shadow', 'getleads'),
                            'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                            'right-choice' => array(
                                'value' => 'shadow',
                                'label' => __('Yes', 'getleads'),
                            ),
                            'left-choice' => array(
                                'value' => 'self',
                                'label' => __('No', 'getleads'),
                            ),
                        ),
                        'btn_icon_group' => array(
                            'type' => 'group',
                            'options' => array(
                                'icon' => array(
                                    'type' => 'new-icon',
                                    'label' => __('Icon', 'getleads')
                                ),
                                'icon_position' => array(
                                    'type' => 'switch',
                                    'label' => __('', 'getleads'),
                                    'desc' => __('Choose the icon position', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'pull-right',
                                        'label' => __('Right', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '',
                                        'label' => __('Left', 'getleads'),
                                    ),
                                ),
                            )
                        ),
                        'size' => array(
                            'label' => __('Button Size', 'getleads'),
                            'desc' => __('Choose a Size for your button', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'lg' => __('Large', 'getleads'),
                                'md' => __('Medium', 'getleads'),
                                'sm' => __('Small', 'getleads'),
                            )
                        ),
                        'letter_case' => array(
                            'label' => __('Letter Case', 'getleads'),
                            'desc' => __('Choose a lettercase for your button text', 'getleads'),
                            'type' => 'select',
                            'choices' => array(
                                'uppercase' => __('Uppercase', 'getleads'),
                                'capitalize' => __('Capitalize', 'getleads'),
                                'lowercase' => __('Lowercase', 'getleads'),
                            )
                        ),
                    )
                ),
                'slider_style' => array(
                    'label' => __('Slider', 'getleads'),
                    'type' => 'addable-popup',
                    'limit' => '4',
                    'desc' => __('Add Slider Image And and Text.', 'getleads'),
                    'template' => '{{- image_alt }}',
                    'popup-options' => array(
                        'slider_image' => array(
                            'label' => __('Slider Image', 'getleads'),
                            'desc' => __('Upload Slider Image.', 'getleads'),
                            'type' => 'upload',
                        ),
                        'image_alt' => array(
                            'label' => __('Image Alt', 'getleads'),
                            'type' => 'text',
                            'desc' => __('Add Slider Image Alt Tag', 'getleads'),
                        ),
                    ),
                ),
            ),
            'home-11' => array(
                'home-slider' => array(
                    'label' => __('Apps Image', 'getleads'),
                    'size' => 'large',
                    'type' => 'addable-popup',
                    'add-button-text' => __('Add Slider', 'getleads'),
                    'desc' => __('Add apps image', 'getleads'),
                    'template' => 'Slider : {{- title }}',
                    'popup-options' => array(
                        'image' => array(
                            'type' => 'upload',
                            'label' => __('Background Image', 'getleads'),
                            'desc' => __('Upload slider background image', 'getleads'),
                        ),
                        'title' => array(
                            'type' => 'text',
                            'label' => __('Title', 'getleads'),
                            'desc' => __('add slider title', 'getleads'),
                        ),
                        'subtitle' => array(
                            'type' => 'textarea',
                            'label' => __('Subtitle', 'getleads'),
                            'desc' => __('add slider subtitle', 'getleads'),
                        ),
                        'home_button' => array(
                            'label' => __('Button', 'getleads'),
                            'type' => 'addable-popup',
                            'limit' => '2',
                            'add-button-text' => __('Add Button', 'getleads'),
                            'desc' => __('Add into slider button', 'getleads'),
                            'template' => 'Button : {{- btn_label }}',
                            'popup-options' => array(
                                'btn_style' => array(
                                    'label' => __('Style', 'getleads'),
                                    'desc' => __('Choose button style', 'getleads'),
                                    'type' => 'image-picker',
                                    'value' => '',
                                    'choices' => array(
                                        'default' => array(
                                            'small' => array(
                                                'height' => 70,
                                                'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                            ),
                                            'large' => array(
                                                'height' => 208,
                                                'src' => GETLEADS_IMAGES . '/image-picker/button-style1.jpg'
                                            ),
                                        ),
                                        'primary' => array(
                                            'small' => array(
                                                'height' => 70,
                                                'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                            ),
                                            'large' => array(
                                                'height' => 208,
                                                'src' => GETLEADS_IMAGES . '/image-picker/button-style2.jpg'
                                            ),
                                        ),
                                    ),
                                ),
                                'btn_label' => array(
                                    'label' => __('Button Label', 'getleads'),
                                    'desc' => __('This is the text that appears on your button', 'getleads'),
                                    'type' => 'text',
                                    'value' => 'Read More'
                                ),
                                'btn_link' => array(
                                    'label' => __('Button Link', 'getleads'),
                                    'desc' => __('Where should your button link to', 'getleads'),
                                    'type' => 'text',
                                    'value' => '#'
                                ),
                                'btn_shadow' => array(
                                    'type' => 'switch',
                                    'label' => __('Button Shadow', 'getleads'),
                                    'desc' => __('Select here if you want to use button shadow effect', 'getleads'),
                                    'right-choice' => array(
                                        'value' => 'shadow',
                                        'label' => __('Yes', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => 'self',
                                        'label' => __('No', 'getleads'),
                                    ),
                                ),
                                'btn_icon_group' => array(
                                    'type' => 'group',
                                    'options' => array(
                                        'icon' => array(
                                            'type' => 'icon',
                                            'label' => __('Icon', 'getleads')
                                        ),
                                        'icon_position' => array(
                                            'type' => 'switch',
                                            'label' => __('', 'getleads'),
                                            'desc' => __('Choose the icon position', 'getleads'),
                                            'right-choice' => array(
                                                'value' => 'pull-right',
                                                'label' => __('Right', 'getleads'),
                                            ),
                                            'left-choice' => array(
                                                'value' => '',
                                                'label' => __('Left', 'getleads'),
                                            ),
                                        ),
                                    )
                                ),
                                'btn_target' => array(
                                    'type' => 'switch',
                                    'label' => __('Open Link in New Window', 'getleads'),
                                    'desc' => __('Select here if you want to open the linked page in a new window', 'getleads'),
                                    'right-choice' => array(
                                        'value' => '_blank',
                                        'label' => __('Yes', 'getleads'),
                                    ),
                                    'left-choice' => array(
                                        'value' => '_self',
                                        'label' => __('No', 'getleads'),
                                    ),
                                ),
                                'size' => array(
                                    'label' => __('Button Size', 'getleads'),
                                    'desc' => __('Choose a Size for your button', 'getleads'),
                                    'type' => 'select',
                                    'choices' => array(
                                        'lg' => __('Large', 'getleads'),
                                        'md' => __('Medium', 'getleads'),
                                        'sm' => __('Small', 'getleads'),
                                    )
                                ),
                                'letter_case' => array(
                                    'label' => __('Letter Case', 'getleads'),
                                    'desc' => __('Choose a lettercase for your button text', 'getleads'),
                                    'type' => 'select',
                                    'choices' => array(
                                        'uppercase' => __('Uppercase', 'getleads'),
                                        'capitalize' => __('Capitalize', 'getleads'),
                                        'lowercase' => __('Lowercase', 'getleads'),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
            )
        ),
        'show_borders' => false,
    ),
    'home_title' => array(
        'label' => __('Title', 'getleads'),
        'type' => 'text',
        'value' => 'Launce your startup with Get Leads Theme',
        'desc' => __('Type your homepage title.', 'getleads'),
    ),
    'home_subtitle' => array(
        'label' => __('Sub Title', 'getleads'),
        'type' => 'textarea',
        'value' => 'We have been collaborating with brands and agencies to build meaningful digital interactions since 2007.',
        'desc' => __('Type your homepage title.', 'getleads'),
    ),
);
