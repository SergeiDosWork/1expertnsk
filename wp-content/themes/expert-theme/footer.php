<footer id="footer_contacts">
    <div id="container_contacts">
      <div>
        <span class="title_contacts">
          ПЕРВОЕ<br>
          ЭКСПЕРТНОЕ БЮРО
        </span><br>
        <span id="title_contacts_condenced">
          независимая судебная экспертиза<br>
        </span><br>
        <span style="font-size: 14px;">
          г. Новосибирск,<br>
          ул. Фрунзе, 14,<br>
          офис 302<br>
        </span><br>
        <hr class="red_line">
        <span style="font-size: 13px;">
          ООО "Первое Экспертное Бюро"<br>
          ИНН 5404141038
        </span>
      </div>
      <div style="margin-left: 30px;">
        <span class="title_contacts">
          <br>РЕЖИМ РАБОТЫ
        </span><br><br><br>
        <span style="font-size: 14px;">
          Пн-Чт с 9-00 до 18-00,<br>
          Пт с 9-00 до 17-00<br>
        </span>
      </div>
      <div style="text-align: right;">
        <span class="title_contacts">
          <br>КОНТАКТЫ
        </span><br><br><br>
        <div style="font-size: 18px; padding-top: 4px;">
          <img class="icon" id="icon_phone_white" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_phone_white.png" alt="icon_phone_white">
          <div class="footer_contacts_right"><a class="contacts_footer_link" href="tel:<?php echo get_option('phone_number', '+73832079585'); ?>"><?php echo get_option('phone_number', '+73832079585'); ?></a></div>
          <img class="icon" id="icon_phone" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_phone_white.png" alt="icon_phone_white">
          <img class="icon" id="icon_telegram" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_telegram_white.png" alt="icon_telegram_white">
          <img class="icon" id="icon_whatsapp" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_whatsapp_white.png" alt="icon_whatsapp_white">
          <div class="footer_contacts_right"><a class="contacts_footer_link" href="tel:<?php echo get_option('whatsapp_number', '+79538959015'); ?>"><?php echo get_option('whatsapp_number', '+79538959015'); ?></a></div>
          <img class="icon" id="icon_letter_white" src="<?php echo get_template_directory_uri(); ?>/images/icons/icon_letter_white.png" alt="icon_letter_white">
          <div class="footer_contacts_right"><a class="contacts_footer_link" href="mailto:<?php echo get_option('contact_email', '1expertnsk@bk.ru'); ?>"><?php echo get_option('contact_email', '1expertnsk@bk.ru'); ?></a></div>
        </div>
      </div>
    </div>
    <a class="link_choice_footer" href="<?php echo home_url('/uslugi'); ?>">
      ВЫБРАТЬ ТИП ЭКСПЕРТИЗЫ
    </a>
  </footer>

<?php wp_footer(); ?>
</body>
</html>