<?php
    require get_template_directory() . '/inc/function-admin.php';

    function university_files() {
        wp_enqueue_style( 'university_main_styles', get_stylesheet_uri() );
    }

    function custom_settings() {
        register_setting('settings-group', 'first_name');
    }

    add_action('wp_enqueue_scripts', 'university_files');
    add_action('admin_init', 'custom_settings');

    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    class Walker_Nav_Main_Menu extends Walker_Nav_Menu
    {
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span
            $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            # echo json_encode($item->classes);

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;

            $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
            $classes[] = ($item->current || $item->current_item_ancestor) ? 'text-blue' : '';
            $classes[] = 'menu-item-' . $item->ID;
            if( $depth && $args->walker->has_children ){
                $classes[] = 'dropdown-submenu';
            }

            $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
            $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= ( $item->current || $item->current_item_ancestor ) ? ' class="hover:text-blue text-blue"' : 'class="hover:text-blue text-gray-600"';

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }
?>
