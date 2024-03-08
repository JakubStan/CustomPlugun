<?php
// Custom single book template
function custom_book_single_template($single_template) {
    global $post;

    if ($post->post_type == 'books') {
        $single_template = plugin_dir_path(__FILE__) . '../templates/single-book.php';
    }

    return $single_template;
}

add_filter('single_template', 'custom_book_single_template');

// Custom archive book template
function custom_book_archive_template($archive_template) {
    if (is_post_type_archive('books')) {
        $archive_template = plugin_dir_path(__FILE__) . '../templates/archive-book.php';
    }

    return $archive_template;
}

add_filter('archive_template', 'custom_book_archive_template');
