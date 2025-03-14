<?php

class TJ_Admin_Notices {
    public function __construct() {
        add_action('admin_notices', [$this, 'acf_admin_notice']);
    }

    public function acf_admin_notice() {
        if (!class_exists('ACF')) {
            echo '<div class="notice notice-warning is-dismissible">
                <p><strong>SCF Plugin Required:</strong> This theme requires the Secure Custom Fields plugin. Please <a href="https://wordpress.org/plugins/secure-custom-fields/" target="_blank">install and activate it</a>.</p>
            </div>';
        }
    }
}

// Initialize the class
new TJ_Admin_Notices();
