<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<main id="primary" class="site-main">
  <div class="main-content">

    <!-- Главный баннер -->
    <div id="main_div_center">
      <span id="span_text_expert">
        НЕЗАВИСИМАЯ ЭКСПЕРТИЗА
      </span>
      <?php
      $services_page = get_page_by_path( 'services-and-prices' );
      $reviews_link = get_theme_mod( 'expertnsk_reviews', 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398' );
      ?>
      <a class="link_choice" href="<?php echo esc_url( get_theme_mod( 'expertnsk_telegram', '/service' ) ); ?>">
        ВЫБРАТЬ ТИП ЭКСПЕРТИЗЫ
      </a>
    </div>

    <!-- О компании -->
    <div id="main_div_about">
      <p id="text_about">
        Наше учреждение оказывает услуги по различным направлениям<br>
        экспертных исследований, работает с физическими, юридическими лицами,<br>
        а так же со всеми Арбитражными судами и судами общей<br>
        юрисдикции субъектов РФ.
      </p>
      <div id="text_free">
        <a style="color: white;text-decoration: none;" href="<?php echo esc_url( get_theme_mod( 'expertnsk_whatsapp', 'https://wa.me/79538959015' ) ); ?>" target="_blank">
          Заказать консультацию эксперта
        </a>
      </div>
    </div>

    <!-- Сотрудничество -->
    <div id="main_div_cooperation">
      <p id="p_economy_with_us">
        <span id="span_coop">Сотрудничая с нами</span><br>
        <span id="span_eco_time">вы экономите время:</span>
      </p>
      <div id="container_eco_time">
        <div class="div_twin">
          <table class="eco-table">
            <tr>
              <td><span class="numbers">&nbsp;1&nbsp;</span></td>
              <td class="span_blue_16">
                мы упростили процедуру обработки обращений,<br>
                оформления документации и подготовки<br>
                к проведению экспертизы;
              </td>
            </tr>
            <tr>
              <td><span class="numbers">&nbsp;2&nbsp;</span></td>
              <td class="span_blue_16">
                мы готовы рассмотреть ваше обращение <b>онлайн</b>,<br>
                без лишних звонков и визитов в офис<br>
                для уточнений;
              </td>
            </tr>
            <tr>
              <td><span class="numbers">&nbsp;3&nbsp;</span></td>
              <td class="span_blue_16">
                вы присылаете нам запрос,<br>
                а мы сразу уточняем сроки и стоимость<br>
                проведения работ.
              </td>
            </tr>
          </table>
        </div>

        <div class="div_twin" style="background-color: #ebf4fc;">
          <div style="margin-top: 20px;">
            <span class="span_blue_bold_21">Позвоните нам</span>
            <span>
              <a class="span_blue_21" id="phone_letter" href="<?php echo esc_url( expertnsk_format_phone_link( get_theme_mod( 'expertnsk_phone_2', '+7 (953) 895 90 15' ) ) ); ?>">
                &ensp;<?php echo esc_html( get_theme_mod( 'expertnsk_phone_2', '+7 (953) 895 90 15' ) ); ?>
              </a>
            </span><br>
          </div>
          <div class="span_red_it_bold_16" id="text_send_quest">или пришлите свой запрос на e-mail:</div>
          <img id="icon_letter" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_letter.png" alt="icon_letter">
          <div class="span_blue_21">
            <a id="mail_letter" href="<?php echo esc_url( expertnsk_format_email_link( get_theme_mod( 'expertnsk_contact_email', '1expertnsk@bk.ru' ) ) ); ?>">
              <?php echo esc_html( get_theme_mod( 'expertnsk_contact_email', '1expertnsk@bk.ru' ) ); ?>
            </a>
          </div>
          <br><br>
          <div id="div_icon_pointer">
            <img class="icon_pointer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_pointer.png" alt="icon_pointer">
          </div>
          <div>
            <span class="span_blue_21">в течение <b>1 дня</b></span><br>
            <div class="span_red_it_bold_20" id="text_answer">мы ответим на ваш запрос</div>
            <span class="span_blue_it_small">
              уточним возможность, сроки и стоимость</span><br>
            <div class="span_blue_it_small" id="text_work">проведения работ</div>
          </div>

          <div id="div_icon_pointer_2">
            <img class="icon_pointer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_pointer.png" alt="icon_pointer">
          </div>
          <div class="span_blue_21" id="text_days">в течение <b>3 дней</b></div>
          <img id="icon_auto" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_auto.png" alt="icon_auto">
          <br>
          <span class="span_red_it_bold_20">наш эксперт готов выехать на объект</span><br>
          <div class="span_blue_it_small">после внесения предоплаты</div>
        </div>
      </div>
    </div>

    <!-- Нижний баннер и сотрудники -->
    <div>
      <div id="main_div_img_bottom">
        <span id="text_free_2">
          Мы всегда защищаем результаты экспертизы в суде!
        </span>
        <a class="link_choice" href="<?php echo esc_url( get_theme_mod( 'expertnsk_telegram', '/service' ) ); ?>">
          ВЫБРАТЬ ТИП ЭКСПЕРТИЗЫ
        </a>
      </div>

      <div id="container_div_staff">
        <img id="icon_star" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/icon_star.png" alt="icon_star">
        <p id="text_staff">
          Все наши сотрудники обладают большим опытом проведения как судебных, так и внесудебных<br>
          экспертиз. Имеют высшее профильное образование и высокий уровень компетенции. Так как качество<br>
          проведения экспертизы во многом зависит от работы эксперта, его квалификации и<br>
          технического оснащения специальным оборудованием.
        </p>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>
