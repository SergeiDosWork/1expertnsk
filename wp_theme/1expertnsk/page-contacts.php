<?php
/*
Template Name: Contacts
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <section class="contacts-section">
            <h1 class="documents-title">КОНТАКТЫ</h1>
            <div class="contacts-container">
                <div class="map-container">
                    <!-- Заглушка для карты. Здесь можно вставить iframe с Google Maps или другой картографический сервис -->
                    <p>Здесь будет карта</p>
                </div>
                <div class="contact-details">
                    <p class="contact-item">
                        <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon_pointer.png' ); ?>" alt="Адрес"> 630000, г. Новосибирск, ул. Кошурникова, 8
                    </p>
                    <p class="contact-item">
                        <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon_phone.png' ); ?>" alt="Телефон"> <a class="contact-link" href="tel:+7 (383) 222-22-22">+7 (383) 222-22-22</a>
                    </p>
                    <p class="contact-item">
                        <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon_email.png' ); ?>" alt="Email"> <span class="contact-link">info@1expertnsk.ru</span>
                    </p>
                    <p class="contact-item">
                        <!-- Здесь использован icon_auto, но в верстке это элемент для времени ответа, объединю это -->
                        <img class="contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/images/icons/icon_auto.png' ); ?>" alt="Время работы"> Время работы: Пн-Пт: с 9:00 до 18:00
                    </p>
                    <p class="contact-item">
                        Наш эксперт ответит в течение: <span class="timeline-response">10 минут</span> (в рабочее время)
                    </p>
                </div>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>