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
  </nav>

  <!-- Логотип -->
  <div id="main_div_logo">
    <?php if ( has_custom_logo() ) : ?>
      <?php the_custom_logo(); ?>
    <?php else : ?>
      <img class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/page_main/01_logo_peb_my.png" alt="<?php bloginfo( 'name' ); ?>">
    <?php endif; ?>
  </div>