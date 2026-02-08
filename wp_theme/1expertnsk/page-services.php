<?php
/**
 * Шаблон для страницы услуг
 *
 * @package 1expertnsk
 */

get_header(); ?>

<main class="main-content">
  <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header>

      <div class="entry-content">
        <?php the_content(); ?>
        
        <!-- Секция услуг -->
        <section class="services-section">
          <h2 class="services-title">Наши услуги</h2>
          <div class="services-grid">
            <!-- Пример карточки услуги -->
            <div class="service-card">
              <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_services/service_sample.jpg" alt="Услуга">
              <h3 class="service-name">Название услуги</h3>
              <p class="service-description">
                Описание услуги. Здесь должно быть краткое описание предоставляемой услуги.
              </p>
              <hr class="service-separator">
              <a class="service-button" href="#">Заказать</a>
            </div>
            
            <!-- Повторяем для других услуг -->
            <div class="service-card">
              <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_services/service_sample.jpg" alt="Услуга">
              <h3 class="service-name">Название услуги</h3>
              <p class="service-description">
                Описание услуги. Здесь должно быть краткое описание предоставляемой услуги.
              </p>
              <hr class="service-separator">
              <a class="service-button" href="#">Заказать</a>
            </div>
            
            <div class="service-card">
              <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_services/service_sample.jpg" alt="Услуга">
              <h3 class="service-name">Название услуги</h3>
              <p class="service-description">
                Описание услуги. Здесь должно быть краткое описание предоставляемой услуги.
              </p>
              <hr class="service-separator">
              <a class="service-button" href="#">Заказать</a>
            </div>
            
            <div class="service-card">
              <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_services/service_sample.jpg" alt="Услуга">
              <h3 class="service-name">Название услуги</h3>
              <p class="service-description">
                Описание услуги. Здесь должно быть краткое описание предоставляемой услуги.
              </p>
              <hr class="service-separator">
              <a class="service-button" href="#">Заказать</a>
            </div>
          </div>
        </section>
      </div>
    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>