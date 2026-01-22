<?php get_header(); ?>

<div class="container_page">
  <div id="container_map_and_contacts">

    <div id="google_map">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4572.680181376281!2d82.92880067595591!3d55.037256727175276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x42dfe52f83c65845%3A0x891987e7f57fb5c7!2z0J_QtdGA0LLQvtC1INCt0LrRgdC_0LXRgNGC0L3QvtC1INCR0Y7RgNC-!5e0!3m2!1sru!2sru!4v1689190585408!5m2!1sru!2sru" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <div id="text_contacts">
      <span style="font-size: 20px; color: #4F4F4F;">
        Контакты
      </span>
      <br><br>
      <span style="font-size: 17px; font-weight: bold; color: #696969;">
        ООО "Первое Экспертное Бюро"
      </span>
      <br><br>
      <span style="color: #696969;">
        630099, Россия, г. Новосибирск,<br>
        ул. Фрунзе, 14<br>
        офис 302.<br><br>
        ОГРН: 1205400015402<br>
        ИНН: 5404141038<br>
        КПП: 540401001
      </span>
      <br><br>
      <span style="font-weight: bold; color: #696969;">
        тел.: <?php echo get_option('phone_number', '+7 (383) 207 95 85'); ?><br>
        <span style="margin-left: 38px;">&nbsp;<?php echo get_option('whatsapp_number', '+7 953 895 90 15 (WhatsApp)'); ?></span>
      </span>
    </div>

  </div>
</div>

<?php get_footer(); ?>