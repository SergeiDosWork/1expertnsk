<?php
/**
 * Шаблон подвала сайта
 *
 * @package 1expertnsk
 */

?>

<footer id="footer_contacts">
  <div id="container_contacts">
    <div class="footer-column">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-1' ); ?>
      <?php else : ?>
        <span class="title_contacts">
          ПЕРВОЕ ЭКСПЕРТНОЕ БЮРО
        </span><br>
        <span id="title_contacts_condenced">
          независимая судебная экспертиза<br>
        </span><br>
        <span class="footer-text">
          <?php
          $address = get_theme_mod( 'expertnsk_address', "г. Новосибирск, ул. Фрунзе, 14, офис 302" );
          $address = str_replace( "\n", "<br>", $address );
          echo $address;
          ?>
        </span><br>
        <hr class="red_line">
        <span class="footer-text footer-inn">
          ООО "Первое Экспертное Бюро"<br>
          <?php echo esc_html( get_theme_mod( 'expertnsk_inn', 'ИНН 5404141038' ) ); ?>
        </span>
      <?php endif; ?>
    </div>

    <div class="footer-column footer-work-hours">
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>
      <?php else : ?>
        <span class="title_contacts">
          <br>РЕЖИМ РАБОТЫ
        </span><br><br><br>
        <span class="footer-text">
          <?php
          $work_hours = get_theme_mod( 'expertnsk_work_hours', 'Пн-Чт с 9-00 до 18-00, Пт с 9-00 до 17-00' );
          $work_hours = str_replace( "\n", "<br>", $work_hours );
          echo $work_hours;
          ?>
        </span>
      <?php endif; ?>
      <br><br><br>
        <a class="link_choice_footer" href="<?php echo esc_url( get_theme_mod( 'expertnsk_telegram', '/service' ) ); ?>" >
    ВЫБРАТЬ ТИП ЭКСПЕРТИЗЫ
  </a>
    </div>

    <div class="footer-column footer-contacts">
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>
      <?php else : ?>
        <span class="title_contacts">
          <br>КОНТАКТЫ
        </span><br><br><br>
        <div class="footer-contacts-text">
          
          <div class="footer_contacts_right">
            <img class="icon" id="icon_phone_white" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_phone_white.png" alt="Телефон">
            <?php if ( get_theme_mod( 'expertnsk_phone_1' ) ) : ?>
              <a class="contacts_footer_link" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_1' ) ) ); ?>">
                <?php echo esc_html( get_theme_mod( 'expertnsk_phone_1' ) ); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="footer_contacts_right">
            <img class="icon" id="icon_phone" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_phone_white.png" alt="Телефон">
            <img class="icon" id="icon_telegram" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_telegram_white.png" alt="Telegram">
            <img class="icon" id="icon_whatsapp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_whatsapp_white.png" alt="WhatsApp">
            <?php if ( get_theme_mod( 'expertnsk_phone_2' ) ) : ?>
              <a class="contacts_footer_link" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_2' ) ) ); ?>">
                <?php echo esc_html( get_theme_mod( 'expertnsk_phone_2' ) ); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="footer_contacts_right">
            <img class="icon" id="icon_letter_white" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_letter_white.png" alt="Email">
            <?php if ( get_theme_mod( 'expertnsk_contact_email' ) ) : ?>
              <a class="contacts_footer_link" href="<?php echo esc_url( expertnsk_format_email_link( get_theme_mod( 'expertnsk_contact_email' ) ) ); ?>">
                <?php echo esc_html( get_theme_mod( 'expertnsk_contact_email' ) ); ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  
  <?php
  $reviews_link = get_theme_mod( 'expertnsk_reviews', 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398' );
  ?>

</footer>

<?php wp_footer(); ?>
</body>
</html>