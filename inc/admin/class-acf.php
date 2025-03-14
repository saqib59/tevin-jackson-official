<?php


class TJ_Options {
    public function __construct() {
        add_action('acf/init', [$this, 'add_options_pages']);
    }

    public function add_options_pages() {
        if (function_exists('acf_add_options_page')) {
            // General Theme Options
            acf_add_options_page(array(
                'page_title' => 'Theme Options',
                'menu_title' => 'Theme Options',
                'menu_slug'  => 'theme-options',
                'capability' => 'manage_options',
                'redirect'   => false
            ));
        }
    }
}

// Initialize the class
new TJ_Options();