<?php
    function add_admin_page() {
        // CLAC Settings
        add_menu_page('CLAC Settings', 'CLAC Settings', 'manage_options', 'clac', 'theme_create_page', get_template_directory_uri() . '/dist/img/icono-clac-admin.png');

        // Social networks
        add_submenu_page('clac', 'Social Networks', 'Social Networks', 'manage_options', 'clac', 'theme_create_page');

        // Contact form options
        add_submenu_page('clac', 'Contact Form', 'Contact Form', 'manage_options', 'clac_contact_section', 'create_contact_form_page');

        // Home slider options
        add_submenu_page('clac', 'Home Slider', 'Home Slider', 'manage_options', 'clac_home_slider', 'create_home_slider');

        // Activate custom settings
        add_action('admin_init', 'custom_settings');
    }

    add_action('admin_menu', 'add_admin_page');

    function custom_settings() {
        // Social networks
        register_setting('settings-group', 'facebook');
        register_setting('settings-group', 'instagram');
        register_setting('settings-group', 'youtube');
        register_setting('settings-group', 'twitter');

        add_settings_section('sidebar-options', 'Social Networks', 'sidebar_options', 'clac');

        add_settings_field('facebook-url', 'Facebook', 'facebook_url', 'clac', 'sidebar-options');
        add_settings_field('instagram-url', 'Instagram', 'instagram_url', 'clac', 'sidebar-options');
        add_settings_field('youtube-url', 'Youtube', 'youtube_url', 'clac', 'sidebar-options');
        add_settings_field('twitter-url', 'Twitter', 'twitter_url', 'clac', 'sidebar-options');

        // Contact form options
        register_setting('contact-options', 'activate_contact');

        add_settings_section('contact-section', 'Contact Form', 'contact_options', 'clac_contact_section');

        add_settings_field('activate-contact', 'Activate Contact Form', 'activate_contact_callback', 'clac_contact_section', 'contact-section');

        // Home slider
        register_setting('home-slider-group', 'home_slider_image_1');
        register_setting('home-slider-group', 'home_slider_image_2');
        register_setting('home-slider-group', 'home_slider_image_3');

        add_settings_section('home-slider-section', 'Home Slider', 'home_slider_options', 'clac_home_slider');

        add_settings_field('home-slider-image-1', '<p>Image No. 1</p>', 'home_slider_image_1_callback', 'clac_home_slider', 'home-slider-section');
        add_settings_field('home-slider-image-2', '<p>Image No. 2</p>', 'home_slider_image_2_callback', 'clac_home_slider', 'home-slider-section');
        add_settings_field('home-slider-image-3', '<p>Image No. 3</p>', 'home_slider_image_3_callback', 'clac_home_slider', 'home-slider-section');
    }

    function sidebar_options() {
        echo 'Enter your social network url according to your service subscription.';
    }

    function facebook_url() {
        $facebookUrl = esc_attr(get_option('facebook'));
        echo '<input type="text" name="facebook" value="'.$facebookUrl.'" placeholder="Facebook Url" />';
    }

    function instagram_url() {
        $instagramUrl = esc_attr(get_option('instagram'));
        echo '<input type="text" name="instagram" value="'.$instagramUrl.'" placeholder="Instagram Url" />';
    }

    function youtube_url() {
        $youtubeUrl = esc_attr(get_option('youtube'));
        echo '<input type="text" name="youtube" value="'.$youtubeUrl.'" placeholder="Youtube Url" />';
    }

    function twitter_url() {
        $twitterUrl = esc_attr(get_option('twitter'));
        echo '<input type="text" name="twitter" value="'.$twitterUrl.'" placeholder="Twitter Url" />';
    }

    function theme_create_page() {
        require_once(get_template_directory() . '/inc/templates/admin-settings.php');
    }

    // Activate contact form
    function create_contact_form_page() {
        require_once(get_template_directory() . '/inc/templates/admin-contact-form.php');
    }

    // Slider
    function create_home_slider() {
        require_once(get_template_directory() . '/inc/templates/admin-home-slider.php');
    }

    function contact_options() {
        echo 'Activate and deactivate the built-in contact form.';
    }

    function home_slider_options() {
        echo 'Chose images for home slider.';
    }

    function activate_contact_callback() {
        $options = get_option('activate_contact');
        $checked = ( @$options == 1 ? 'checked' : '' );
        echo '<label><input type="checkbox" id="activate_contact" name="activate_contact" value="1" '.$checked.'></label>';
    }

    function home_slider_image_1_callback() {
        $image = get_option('home_slider_image_1');
        echo '<div style="display: flex; align-items:center;">';
        echo '<input type="button" value="Upload Image" id="home_slider_image_btn"><input type="hidden" id="home_slider_image" name="home_slider_image_1" value="'.$image.'">';

        echo '<img id="home_slider_image_img" style="width: auto; height: 47px; margin-left: 20px; border: thin solid black; padding: 3px; border-radius: 3px;" src="'.$image.'">';
        echo '</div>';
    }

    function home_slider_image_2_callback() {
        $image = get_option('home_slider_image_2');
        echo '<div style="display: flex; align-items:center;">';
        echo '<input type="button" value="Upload Image" id="home_slider_image_btn"><input type="hidden" id="home_slider_image" name="home_slider_image_2" value="'.$image.'">';

        echo '<img id="home_slider_image_img" style="width: auto; height: 47px; margin-left: 20px; border: thin solid black; padding: 3px; border-radius: 3px;" src="'.$image.'">';
        echo '</div>';
    }

    function home_slider_image_3_callback() {
        $image = get_option('home_slider_image_3');
        echo '<div style="display: flex; align-items:center;">';
        echo '<input type="button" value="Upload Image" id="home_slider_image_btn"><input type="hidden" id="home_slider_image" name="home_slider_image_3" value="'.$image.'">';

        echo '<img id="home_slider_image_img" style="width: auto; height: 47px; margin-left: 20px; border: thin solid black; padding: 3px; border-radius: 3px;" src="'.$image.'">';
        echo '</div>';
    }
?>
