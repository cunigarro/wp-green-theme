<h1>
    CLAC Web Configurations
</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('settings-group'); ?>
    <?php do_settings_sections('clac'); ?>
    <?php submit_button(); ?>
</form>