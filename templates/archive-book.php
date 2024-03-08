<?php

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
                        </header><!-- .page-header -->
                        <div class="items">
                            <?php while ( have_posts() ) : the_post(); ?>
                                <div class="item">
                                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                    <header class="entry-header">
                                        <h2 class="entry-title"><a class="book-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    </header><!-- .entry-header -->
                            
                                    <div class="entry-content">
                                        <?php the_excerpt(); ?>
                                    </div><!-- .entry-content -->

                                    </article><!-- #post-<?php the_ID(); ?> -->
                                </div>
                                
                            <?php endwhile; ?>
                        </div>
                    <?php else : ?>

            <p><?php esc_html_e( 'Brak wpisów do wyświetlenia.', 'textdomain' ); ?></p>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
