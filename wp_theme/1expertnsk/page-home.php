<?php
/*
Template Name: Home Page
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <section class="hero-section">
            <p class="hero-title">ПЕРВОЕ ЭКСПЕРТНОЕ БЮРО</p><br>
            <a class="hero-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'services-and-prices' ) ) ); ?>">ВЫБРАТЬ УСЛУГУ</a>
        </section>

        <section class="about-section">
            <p class="about-text">
                Работаем по всей России и используем самые передовые методы исследований.
                <br>
                Оспариваемые результаты экспертизы - 2% от всех проведенных экспертиз.
            </p>
            <a class="free-consultation" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ</a>
        </section>

        <section class="cooperation-section">
            <p class="cooperation-title">
                <span class="cooperation-subtitle">СОТРУДНИЧАЕМ</span> <span class="cooperation-highlight">С БЮДЖЕТОМ И ЭКОНОМИМ ВАШЕ ВРЕМЯ</span>
            </p>
            <div class="cooperation-grid">
                <div class="cooperation-column cooperation-left">
                    <span class="cooperation-number">1</span>
                    <p class="cooperation-step">Оставляете заявку <br> любым удобным <br>для Вас способом</p><br>
                    <hr>
                    <span class="cooperation-number">2</span>
                    <p class="cooperation-step">Согласовываем <br> стоимость и <br> сроки</p><br>
                    <hr>
                    <span class="cooperation-number">3</span>
                    <p class="cooperation-step">Проводим экспертизу<br> (исследование) и <br> предоставляем<br> заключение</p><br>
                </div>
                <div class="cooperation-column cooperation-right">
                    <div class="contact-info">
                        <span class="contact-phone-title">тел:</span><span class="contact-phone"> +7 (383) 222-22-22</span><br>
                        <span class="contact-email-title">e-mail:</span><span class="contact-email"> info@1expertnsk.ru</span><br>
                    </div>
                    <br>
                    <hr class="red_line">
                    <br>
                    <div class="contact-timeline">
                        <span class="timeline-day">Наш эксперт ответит в течение:</span><br>
                        <span class="timeline-response">10 минут</span><br>
                        <span class="timeline-details"> (в рабочее время)</span><br>
                    </div>
                    <br>
                    <hr class="red_line">
                    <br>
                    <div class="contact-timeline">
                        <span class="timeline-day">Подготовка документов</span><br>
                        <span class="timeline-response">от 1 дня</span><br>
                        <span class="timeline-details"> (в зависимости от вида экспертизы)</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="staff-section">
            <img class="staff-icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/icon_star.png' ); ?>" alt="Звезда">
            <p class="staff-text">
                В штате работают только высококвалифицированные аттестованные специалисты с опытом работы более 5 лет
            </p>
        </section>

        <section class="bottom-banner">
            <a class="bottom-banner-button" href="tel:+7 (383) 222-22-22">БЕСПЛАТНАЯ КОНСУЛЬТАЦИЯ ПО ТЕЛЕФОНУ</a>
        </section>
    </div>
</main>

<?php get_footer(); ?>