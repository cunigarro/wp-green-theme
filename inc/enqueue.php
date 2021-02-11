<?php
    function scripts_enqueue() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/dist/js/main.min.js', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'scripts_enqueue');

    function load_admin_scripts($hook) {
        if ('clac-settings_page_clac_home_slider' != $hook) { return; }
        wp_enqueue_script('admin-home-slider-js', get_template_directory_uri() . '/dist/js/admin-home-slider.min.js', array(), '1.0.0', 'all');
    }

    add_action('admin_enqueue_scripts', 'load_admin_scripts');
?>
