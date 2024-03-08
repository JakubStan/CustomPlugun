<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="single-book">
            <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php 
                            
                                $author = get_field('author');
                                if ($author) {
                                    echo '<div><p style="font-weight: bold;">Autor: </p> '. '<p class="data">' . $author . '</p></div>';
                                }

                         
                                $year = get_field('year');
                                if ($year) {
                                    echo '<div><p style="font-weight: bold;">Rok wydania:</p> '.'<p class="data">' . $year . '</p></div>';
                                }

                      
                                $genre = get_field('genre');
                                if ($genre) {
                                    echo '<div><p style="font-weight: bold;">Gatunek: </p> '.'<p class="data">'. $genre . '</p></div>';
                                }

                       
                                the_content(); 
                            ?>
                        </div><!-- .entry-content -->
                    </article><!-- #post-<?php the_ID(); ?> -->

                    <a class="link" href="<?php echo get_post_type_archive_link( 'books' ); ?>">Wszystkie ksiażki</a>

            <?php endwhile; ?>
        </div>   

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
