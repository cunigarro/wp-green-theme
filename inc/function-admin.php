<?php
    function add_admin_page() {
        add_menu_page('Menu Page', 'Settings', 'manage_options', 'clac', 'theme_create_page');
        add_submenu_page('clac', 'Menu Page', 'Settings', 'manage_options', 'clac', 'theme_create_page');
        add_submenu_page('clac', 'CustomCSS', 'CustomCSS', 'manage_options', 'clac-custom-css', 'theme_create_subpage');

        add_action('admin_init', 'custom_settings');
    }

    add_action('admin_menu', 'add_admin_page');

    function custom_settings() {
        register_setting('settings-group', 'first_name');
        register_setting('settings-group', 'last_name');

        add_settings_section('sidebar-options', 'Sidebar options', 'sidebar_options', 'clac');

        add_settings_field('sidebar-name', 'Full Name', 'sidebar_name', 'clac', 'sidebar-options');
    }

    function sidebar_options() {
        echo 'Your sidebar information';
    }

    function sidebar_name() {
        $firstName = esc_attr(get_option('first_name'));
        $lastName = esc_attr(get_option('last_name'));
        echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
    }

    function theme_create_page() {
        require_once(get_template_directory() . '/inc/templates/admin-settings.php');
    }

    function theme_create_subpage() {
        echo '<h1>Subpage</h1>';
    }
?>
