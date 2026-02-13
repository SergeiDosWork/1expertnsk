<?php
/**
 * Шаблон шапки сайта
 *
 * @package 1expertnsk
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <!-- Главное меню -->
  <nav class="main_div_menu">
    <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Открыть меню">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

    <div class="mobile-menu-content" id="mobileMenuContent">
      <?php if ( get_theme_mod( 'expertnsk_phone_1' ) ) : ?>
        <a id="phone" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_1' ) ) ); ?>">
          <?php echo esc_html( get_theme_mod( 'expertnsk_phone_1' ) ); ?>
        </a>
      <?php endif; ?>
      <?php
      $locations = get_nav_menu_locations();
      if ( isset( $locations['primary'] ) ) {
          $menu_items = wp_get_nav_menu_items( $locations['primary'] );
          if ( $menu_items ) {
              $walker = new ExpertnsK_Menu_Walker();
              echo $walker->walk( $menu_items );
          }
      }
      ?>
    </div>
  </nav>

  <!-- Inline скрипт для мобильного меню (выполняется немедленно) -->
  <script>
  (function() {
    var toggle = document.getElementById('mobileMenuToggle');
    var content = document.getElementById('mobileMenuContent');
    var overlay = document.getElementById('mobileMenuOverlay');

    console.log('Inline script loaded:', {
      toggle: !!toggle,
      content: !!content,
      overlay: !!overlay
    });

    if (toggle && content && overlay) {
      toggle.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('Inline toggle clicked');
        toggle.classList.toggle('active');
        content.classList.toggle('active');
        overlay.classList.toggle('active');

        if (content.classList.contains('active')) {
          document.body.style.overflow = 'hidden';
        } else {
          document.body.style.overflow = '';
        }
      });

      overlay.addEventListener('click', function() {
        toggle.classList.remove('active');
        content.classList.remove('active');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
      });

      var menuLinks = content.querySelectorAll('.buttons_main_menu');
      menuLinks.forEach(function(link) {
        link.addEventListener('click', function() {
          toggle.classList.remove('active');
          content.classList.remove('active');
          overlay.classList.remove('active');
          document.body.style.overflow = '';
        });
      });

      window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
          toggle.classList.remove('active');
          content.classList.remove('active');
          overlay.classList.remove('active');
          document.body.style.overflow = '';
        }
      });

      console.log('Inline script initialized successfully');
    } else {
      console.error('Inline script: elements not found');
    }
  })();
  </script>

  <!-- Логотип -->
  <div id="main_div_logo">
    <?php if ( has_custom_logo() ) : ?>
      <?php the_custom_logo(); ?>
    <?php else : ?>
      <a href="/">
      <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_main/01_logo_peb_my.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    <?php endif; ?>
  </div>