<?php
/**
 * Шаблон для отображения отдельной услуги
 *
 * @package 1expertnsk
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <div class="container-page documents-section">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'service-single' ); ?>>
                    <!-- Заголовок услуги с изображением -->
                    <header class="service-header">
                        <div class="service-header-inner">
                            <div class="service-image-wrapper">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'large', array( 'class' => 'service-header-image' ) );
                                } else {
                                    echo '<div class="service-header-image-placeholder"></div>';
                                }
                                ?>
                            </div>
                            <div class="service-info-wrapper">
                                <h1 class="service-title"><?php the_title(); ?></h1>
                                <?php if ( get_the_excerpt() ) : ?>
                                    <div class="service-excerpt">
                                        <?php echo wp_kses_post( get_the_excerpt() ); ?>
                                    </div>
                                <?php endif; ?>
                                <a class="service-order-button" href="<?php echo esc_url( get_theme_mod( 'expertnsk_whatsapp', 'https://wa.me/79538959015' ) ); ?>" target="_blank">
                                    Заказать
                                </a>
                            </div>
                        </div>
                    </header>

                    <!-- Основной контент услуги -->
                    <div class="service-content">
                        <?php
                        the_content();

                        wp_link_pages(
                            array(
                                'before' => '<div class="page-links">' . esc_html__( 'Страницы:', '1expertnsk' ),
                                'after'  => '</div>',
                            )
                        );
                        ?>
                    </div>

                    <?php if ( get_edit_post_link() ) : ?>
                        <footer class="service-footer">
                            <?php
                            edit_post_link(
                                sprintf(
                                    /* translators: %s: Name of current post */
                                    esc_html__( 'Редактировать %s', '1expertnsk' ),
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

                // Если комментарии включены
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // Конец цикла
            ?>
        </div>
    </div>
</main>

<?php get_footer();
