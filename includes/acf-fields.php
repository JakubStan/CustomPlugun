<?php
// Register ACF fields
function register_book_fields() {
    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_books',
        'title' => 'Book Fields',
        'fields' => array (
            array (
                'key' => 'field_author',
                'label' => 'Author',
                'name' => 'author',
                'type' => 'text',
            ),
            array (
                'key' => 'field_year',
                'label' => 'Year',
                'name' => 'year',
                'type' => 'number',
            ),
            array (
                'key' => 'field_genre',
                'label' => 'Genre',
                'name' => 'genre',
                'type' => 'text',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'books',
                ),
            ),
        ),
    ));

    endif;
}

add_action('acf/init', 'register_book_fields');
