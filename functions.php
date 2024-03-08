<?php 


function custom_book_templates( $template ) {

    if ( is_singular( 'books' ) ) {
    
        return plugin_dir_path( __FILE__ ) . '../templates/single-book.php';
    }

    elseif ( is_post_type_archive( 'books' ) ) {
      
        return plugin_dir_path( __FILE__ ) . '../templates/archive-book.php';
    }

 blon
    return $template;
}
add_filter( 'template_include', 'custom_book_templates' );



?>