<?php
/**
 * Основной шаблон сайта
 *
 * @package 1expertnsk
 */

get_header(); ?>

<main class="main-content container_page">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <article>
      <h1>Страница не найдена</h1>
      <p>Запрашиваемая страница не существует.</p>
    </article>
  <?php endif; ?>
</main>

<?php get_footer(); ?>