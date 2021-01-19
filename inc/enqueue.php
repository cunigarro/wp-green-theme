<?php
    function scripts_enqueue() {
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', 'all');
    }

    add_action('wp_enqueue_scripts', 'scripts_enqueue');
?>
