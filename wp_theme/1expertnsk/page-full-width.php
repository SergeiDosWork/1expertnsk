<?php
/**
 * Template Name: Full Width Page
 *
 * Шаблон страницы с контентом на всю ширину экрана
 *
 * @package 1expertnsk
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content main-content-full">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header entry-header-full">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content entry-content-full">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', '1expertnsk' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>

                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer entry-footer-full">
                        <?php
                        edit_post_link(
                            sprintf(
                                /* translators: %s: Name of current post */
                                esc_html__( 'Edit %s', '1expertnsk' ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer>
                <?php endif; ?>
            </article>

            <?php
            // Если комментарии включены и есть хотя бы один комментарий, загружаем шаблон комментариев
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // Конец цикла
        ?>
    </div>
</main>

<?php get_footer();
