<?php


// Enqueue styles and scripts
function custom_enqueue_scripts() {
    if (is_singular('books') || is_post_type_archive('books')) {
        wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . '../assets/style.css');
        wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . '../assets/script.js', array(), '1.0', true);
    }
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
