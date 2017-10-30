<?php

if (!defined('ABSPATH')) die ('Direct access forbidden.');
/**
 * Register theme menus
 */






class getleads_navwalker extends Walker_Nav_Menu {

    /**
     * @see Walker::start_lvl()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int $depth Depth of page. Used for padding.
     */
    public function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul role=\"menu\" class=\"dropdown-menu\">\n";
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item Menu item data object.
     * @param int $depth Depth of menu item. Used for padding.
     * @param int $current_page Menu item ID.
     * @param object $args
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';
        /**
         * Dividers, Headers or Disabled
         * =============================
         * Determine whether the item is a Divider, Header, Disabled or regular
         * menu item. To prevent errors we use the strcasecmp() function to so a
         * comparison that is not case sensitive. The strcasecmp() function returns
         * a 0 if the strings are equal.
         */
        if (strcasecmp($item->attr_title, 'divider') == 0 && $depth === 1) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if (strcasecmp($item->title, 'divider') == 0 && $depth === 1) {
            $output .= $indent . '<li role="presentation" class="divider">';
        } else if (strcasecmp($item->attr_title, 'dropdown-header') == 0 && $depth === 1) {
            $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_html($item->title);
        } else if (strcasecmp($item->attr_title, 'disabled') == 0) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_html($item->title) . '</a>';
        } else {
            $frontpage_ID = getleads_main(get_option('page_on_front'), false);
            $home = (getleads_main(get_the_ID(), false) == $frontpage_ID) ? true : false;
            if (getleads_get_post_meta(getleads_main($item->object_id, false), 'hide_title_from_menu') != 'yes') {

                $section = getleads_get_post_meta(getleads_main($item->object_id, false), 'xs_page_section');
                $prefx = ($home != true) ? esc_url(home_url('/#')) : '#';

                $class_names = $value = '';

                $classes = empty($item->classes) ? array() : (array) $item->classes;
                $classes[] = 'menu-item-' . $section;

                $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

                if ($args->has_children) {
                    $class_names .= ' dropdown';
                }

                if (in_array('current-menu-item', $classes)) {
                    $class_names .= ' active';
                }

                $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

                $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
                $id = $id ? ' id="' . esc_attr($id) . '"' : '';

                $output .= $indent . '<li' . $id . $value . $class_names . '>';

                $atts = array();
                $atts['title'] = !empty($item->title) ? $item->title : '';
                $atts['target'] = !empty($item->target) ? $item->target : '';
                $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';

                // If item has_children add atts to a.
                if ($args->has_children && $depth === 0) {

                    //attr
                    $atts['href'] = '#';

                    $atts['data-toggle'] = 'dropdown';
                    $atts['class'] = 'dropdown-toggle';
                    $atts['aria-haspopup'] = 'true';
                } else {
                    //attr
                    if (!empty($item->url)) {
                        if ($section == 'on') {
                            $atts['href'] = esc_url($prefx . getleads_sectionID(getleads_main($item->object_id, false)));
                        } else {
                            $atts['href'] = esc_url($item->url);
                        }
                    } else {
                        $atts['href'] = '';
                    }
                }

                $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

                $attributes = '';
                foreach ($atts as $attr => $value) {
                    if (!empty($value)) {
                        $value = ( 'href' === $attr ) ? esc_attr($value) : esc_attr($value);
                        $attributes .= ' ' . $attr . '="' . $value . '"';
                    }
                }

                $item_output = $args->before;

                /*
                 * Glyphicons
                 * ===========
                 * Since the the menu item is NOT a Divider or Header we check the see
                 * if there is a value in the attr_title property. If the attr_title
                 * property is NOT null we apply it as the class name for the glyphicon.
                 */
                if (!empty($item->attr_title)) {
                    $item_output .= '<a' . $attributes . '><span class="glyphicon ' . esc_attr($item->attr_title) . '"></span>&nbsp;';
                } else {
                    $item_output .= '<a' . $attributes . '>';
                }

                $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
                $item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
                $item_output .= $args->after;

                $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
            }
        }
    }

    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Page data object. Not used.
     * @param int    $depth  Depth of page. Not Used.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_el(&$output, $item, $depth = 0, $args = array()) {
        if (getleads_get_post_meta(getleads_main($item->object_id, false), 'hide_title_from_menu') != 'yes') {
            $output .= "</li>\n";
        }
    }

    /**
     * Traverse elements to create list from elements.
     *
     * Display one element if the element doesn't have any children otherwise,
     * display the element and its children. Will only traverse up to the max
     * depth and no ignore elements under that depth.
     *
     * This method shouldn't be called directly, use the walk() method instead.
     *
     * @see Walker::start_el()
     * @since 2.5.0
     *
     * @param object $element Data object
     * @param array $children_elements List of elements to continue traversing.
     * @param int $max_depth Max depth to traverse.
     * @param int $depth Depth of current element.
     * @param array $args
     * @param string $output Passed by reference. Used to append additional content.
     * @return null Null on failure with no changes to parameters.
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
        if (!$element) {
            return;
        }

        $id_field = $this->db_fields['id'];

        // Display this element.
        if (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }

        parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    /**
     * Menu Fallback
     * =============
     * If this function is assigned to the wp_nav_menu's fallback_cb variable
     * and a manu has not been assigned to the theme location in the WordPress
     * menu manager the function with display nothing to a non-logged in user,
     * and will add a link to the WordPress menu manager if logged in as an admin.
     *
     * @param array $args passed from the wp_nav_menu function.
     *
     */
    public static function fallback($args) {
        if (current_user_can('manage_options')) {

            extract($args);

            $fb_output = null;

            if ($container) {
                $fb_output = '<' . $container;

                if ($container_id) {
                    $fb_output .= ' id="' . $container_id . '"';
                }

                if ($container_class) {
                    $fb_output .= ' class="' . $container_class . '"';
                }

                $fb_output .= '>';
            }

            $fb_output .= '<ul';

            if ($menu_id) {
                $fb_output .= ' id="' . $menu_id . '"';
            }

            if ($menu_class) {
                $fb_output .= ' class="' . $menu_class . '"';
            }

            $fb_output .= '>';
            $fb_output .= '<li><a href="' . admin_url('nav-menus.php') . '">Add a menu</a></li>';
            $fb_output .= '</ul>';

            if ($container) {
                $fb_output .= '</' . $container . '>';
            }

            echo getleads_return($fb_output);
        }
    }

}


function _filter_mega_menu_wp_nav_menu_objects($sorted_menu_items, $args) {
    $frontpage_ID = getleads_main(get_option('page_on_front'), false);
    $home = (getleads_main(get_the_ID(), false) == $frontpage_ID) ? true : false;
    $mega_menu = array();
    $prefx = ($home != true) ? esc_url(home_url('/#')) : '#';

    foreach ($sorted_menu_items as $item) {
        if (getleads_get_post_meta(getleads_main($item->object_id, false), 'hide_title_from_menu') == 'yes') {
            $item->classes[] = 'hidden cross-fire';
        }

        $section = getleads_get_post_meta(getleads_main($item->object_id, false), 'xs_page_section');

        if (in_array('menu-item-has-children', $item->classes)) {

            $item->url = '#';
        } else {
            if ($section == 'on') {
                $item->url = esc_url($prefx . getleads_sectionID(getleads_main($item->object_id, false)));
            }
        }
    }


    return $sorted_menu_items;
}

add_filter('wp_nav_menu_objects', '_filter_mega_menu_wp_nav_menu_objects', 10, 2);