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
  
  <header class="site-header">
    <nav class="main-nav">
      <?php if ( get_theme_mod( 'expertnsk_phone_1' ) ) : ?>
        <a class="phone-header" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_1' ) ) ); ?>">
          <?php echo esc_html( get_theme_mod( 'expertnsk_phone_1' ) ); ?>
        </a>
      <?php endif; ?>
      
      <?php
      wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'main-menu',
        'container'      => false,
        'fallback_cb'    => false,
      ) );
      ?>
    </nav>
    
    <div class="logo-section">
      <?php if ( has_custom_logo() ) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_main/01_logo_peb_my.png" alt="<?php bloginfo( 'name' ); ?>">
      <?php endif; ?>
    </div>
  </header>