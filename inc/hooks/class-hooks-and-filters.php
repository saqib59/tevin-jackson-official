<?php
// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Fd_Hooks_And_Filters {

    // Constructor to initialize hooks and filters
    public function __construct() {
        // Example: Add custom body class to the body tag
        add_filter('body_class', array($this, 'add_custom_body_class'));
    }

    // Add custom class to body tag
    public function add_custom_body_class($classes) {
        // Add 'fd-body' class to the body tag
        $classes[] = 'fd-body';
        return $classes;
    }

    // You can add more hooks and filters here in future
}

// Initialize the class
$fd_hooks_and_filters = new Fd_Hooks_And_Filters();
