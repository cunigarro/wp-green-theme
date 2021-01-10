<?php
    function add_admin_page() {
        add_menu_page('Menu Page', 'Settings', 'manage_options', 'clac', 'theme_create_page');
        add_submenu_page('clac', 'Menu Page', 'Settings', 'manage_options', 'clac', 'theme_create_page');
        add_submenu_page('clac', 'CustomCSS', 'CustomCSS', 'manage_options', 'clac-custom-css', 'theme_create_subpage');
    }

    add_action('admin_menu', 'add_admin_page');

    function theme_create_page() {
        require_once(get_template_directory() . '/inc/templates/admin-settings.php');
    }

    function theme_create_subpage() {
        echo '<h1>Subpage</h1>';
    }
?>
