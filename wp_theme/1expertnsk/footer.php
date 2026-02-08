<?php
/**
 * Шаблон подвала сайта
 *
 * @package 1expertnsk
 */

?>

<footer class="site-footer">
  <div class="footer-container">
    <div class="footer-column">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <?php dynamic_sidebar( 'footer-1' ); ?>
      <?php else : ?>
        <h3 class="footer-title">ПЕРВОЕ<br>ЭКСПЕРТНОЕ БЮРО</h3>
        <span class="footer-subtitle">независимая судебная экспертиза</span>
        <div class="footer-text">
          <?php 
          $address = get_theme_mod( 'expertnsk_address', 'г. Новосибирск, ул. Фрунзе, 14, офис 302' );
          echo nl2br( esc_html( $address ) );
          ?>
        </div>
        <hr class="red_line">
        <div class="footer-text">
          ООО "Первое Экспертное Бюро"<br>
          <?php echo esc_html( get_theme_mod( 'expertnsk_inn', 'ИНН 5404141038' ) ); ?>
        </div>
      <?php endif; ?>
    </div>
    
    <div class="footer-column">
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <?php dynamic_sidebar( 'footer-2' ); ?>
      <?php else : ?>
        <h3 class="footer-title">РЕЖИМ РАБОТЫ</h3>
        <div class="footer-text">
          <?php echo nl2br( esc_html( get_theme_mod( 'expertnsk_work_hours', 'Пн-Чт с 9-00 до 18-00, Пт с 9-00 до 17-00' ) ) ); ?>
        </div>
      <?php endif; ?>
    </div>
    
    <div class="footer-column footer-contacts">
      <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
        <?php dynamic_sidebar( 'footer-3' ); ?>
      <?php else : ?>
        <h3 class="footer-title">КОНТАКТЫ</h3>
        <div class="contact-item">
          <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_phone_white.png" alt="Телефон">
          <?php if ( get_theme_mod( 'expertnsk_phone_1' ) ) : ?>
            <a class="contact-link" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_1' ) ) ); ?>">
              <?php echo esc_html( get_theme_mod( 'expertnsk_phone_1' ) ); ?>
            </a>
          <?php endif; ?>
        </div>
        
        <div class="contact-item">
          <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_phone_white.png" alt="Телефон">
          <?php if ( get_theme_mod( 'expertnsk_phone_2' ) ) : ?>
            <a class="contact-link" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_2' ) ) ); ?>">
              <?php echo esc_html( get_theme_mod( 'expertnsk_phone_2' ) ); ?>
            </a>
          <?php endif; ?>
        </div>
        
        <div class="contact-item">
          <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_letter_white.png" alt="Email">
          <?php if ( get_theme_mod( 'expertnsk_email' ) ) : ?>
            <a class="contact-link" href="<?php echo esc_url( expertnsk_format_email_link( get_theme_mod( 'expertnsk_email' ) ) ); ?>">
              <?php echo esc_html( get_theme_mod( 'expertnsk_email' ) ); ?>
            </a>
          <?php endif; ?>
        </div>
        
        <div class="contact-item">
          <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_whatsapp_white.png" alt="WhatsApp">
          <?php if ( get_theme_mod( 'expertnsk_whatsapp' ) ) : ?>
            <a class="contact-link" href="<?php echo esc_url( get_theme_mod( 'expertnsk_whatsapp' ) ); ?>" target="_blank">
              WhatsApp
            </a>
          <?php endif; ?>
        </div>
        
        <div class="contact-item">
          <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_telegram_white.png" alt="Telegram">
          <?php if ( get_theme_mod( 'expertnsk_telegram' ) ) : ?>
            <a class="contact-link" href="<?php echo esc_url( get_theme_mod( 'expertnsk_telegram' ) ); ?>" target="_blank">
              Telegram
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
  
  <?php
  // Получаем ссылку на отзывы из настроек темы
  $reviews_link = get_theme_mod( 'expertnsk_reviews', 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398' );
  ?>
  <a class="footer-button" href="<?php echo esc_url( $reviews_link ); ?>" target="_blank">
    ВЫБРАТЬ ТИП ЭКСПЕРТИЗЫ
  </a>
</footer>

<?php wp_footer(); ?>
</body>
</html>