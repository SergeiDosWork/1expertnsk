<?php
/**
 * Template Name: Services Catalog
 *
 * Шаблон страницы каталога услуг (плитки)
 *
 * @package 1expertnsk
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <div class="container-page documents-section">
            <p class="services-title">УСЛУГИ И ЦЕНЫ</p>
            <div class="services-grid">
                <?php
                // Запрос услуг
                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1,
                    'post_status'    => 'publish',
                    'orderby'        => 'date',
                    'order'          => 'ASC',
                );

                $services_query = new WP_Query( $args );

                if ( $services_query->have_posts() ) :
                    while ( $services_query->have_posts() ) :
                        $services_query->the_post();
                        ?>
                        <div class="service-card">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'service-thumbnail', array( 'class' => 'service-image' ) );
                            } else {
                                echo '<div class="service-image-placeholder"></div>';
                            }
                            ?>
                            <p class="service-name">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <hr class="service-separator">
                            <p class="service-description">
                                <?php
                                $excerpt = get_the_excerpt();
                                if ( $excerpt ) {
                                    echo wp_kses_post( $excerpt );
                                } else {
                                    echo wp_trim_words( get_the_content(), 25, '...' );
                                }
                                ?>
                            </p>
                            <?php
                            // Получаем цену из метаполя, если есть
                            $price = get_post_meta( get_the_ID(), '_service_price', true );
                            if ( $price ) :
                            ?>
                                <p class="text_price">
                                    <?php echo esc_html( $price ); ?>
                                </p>
                            <?php endif; ?>
                            <a class="service-button" href="<?php echo esc_url( get_theme_mod( 'expertnsk_whatsapp', 'https://wa.me/79538959015' ) ); ?>" target="_blank">
                                ЗАКАЗАТЬ
                            </a>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    ?>
                    <div class="no-services" style="text-align: center; padding: 60px 20px; color: #999; width: 100%;">
                        <p><?php esc_html_e( 'Услуги не найдены.', '1expertnsk' ); ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
