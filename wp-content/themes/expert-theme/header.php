<header>
  <div class="main_div_menu">
    <a id="phone" href="tel:<?php echo get_option('phone_number', '+73832079585'); ?>"><?php echo get_option('phone_number', '+73832079585'); ?></a>
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'fallback_cb' => 'default_header_menu',
        'menu_class' => 'header-menu',
        'echo' => true,
        'depth' => 0,
    ));
    ?>
  </div>
  <div id="main_div_logo">
    <a href="<?php echo home_url('/'); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/page_main/01_logo_peb_my.png"></a>
  </div>
</header>

<?php
// Fallback function for header menu
function default_header_menu() {
    echo '<nav class="header-navigation">';
    echo '<a class="buttons_main_menu" href="' . home_url('/') . '">О компании</a>';
    echo '<a class="buttons_main_menu" href="' . home_url('/uslugi') . '">Услуги</a>';
    echo '<a class="buttons_main_menu" href="' . home_url('/dokumenty') . '">Документы</a>';
    echo '<a class="buttons_main_menu" href="' . home_url('/kontakty') . '">Контакты</a>';
    echo '<a class="buttons_main_menu" href="https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398" target="_blank">Отзывы</a>';
    echo '<a class="buttons_main_menu" href="' . home_url('/uslugi') . '#career">Карьера</a>';
    echo '</nav>';
}
?>