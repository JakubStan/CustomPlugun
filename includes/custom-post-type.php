<?php
// Register Custom Post Type
function custom_post_type_books() {
    $labels = array(
        'name'               => 'Books',
        'singular_name'      => 'Book',       
    );

    $args = array(
        'label'              => 'Books',
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
        'rewrite'            => array( 'slug' => 'books' ),
        'menu_icon'          => 'dashicons-book',
    );

    register_post_type( 'books', $args );
}

add_action( 'init', 'custom_post_type_books', 0 );
