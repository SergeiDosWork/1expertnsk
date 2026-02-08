<?php
/*
Template Name: Services and Prices
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <div class="container-page documents-section"> <!-- Использовал documents-section для стилизации, так как она имеет border-top -->
            <p class="services-title">УСЛУГИ И ЦЕНЫ</p>
            <div class="services-grid">
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/01_stroy_tech.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Строительно-техническая экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Экспертиза включает в себя комплекс мероприятий по проверке соответствия проектно-сметной, нормативной и исполнительной документации, составлению дефектных актов.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/02_pism_govor.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Почерковедческая экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Экспертиза занимается изучением почерка человека. С ее помощью можно определить подлинность подписи, установить пол и возраст написавшего.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/03_tech_document.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Техническая экспертиза документов</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Экспертиза изучает реквизиты и материалы документов с целью установления способа их изготовления, выявления изменений в них, определения первоначального содержания, идентификации оборудования.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/04_ocenka.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Оценочная экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Независимая оценка имущества поможет установить рыночную стоимость объектов, оценить инвестиционные проекты и определить уровень рисков.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/05_zemlya.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Землеустроительная экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Землеустроительная экспертиза проводится с целью определения фактических границ земельного участка, установления площади, прочих характеристик, выявления нарушений.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/06_buhgalter.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Бухгалтерская экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Финансовая экспертиза, проводимая независимыми специалистами, позволяет выявить нарушения отчетности, оценить финансовое состояние предприятия и установить спорные моменты.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/07_auto.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Автотехническая экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Экспертиза автомобиля после ДТП поможет выявить причины неисправностей, определить размер ущерба и оценить стоимость восстановительного ремонта.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/08_tovaroved.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Товароведческая экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Исследование товара, его качества, количества, подлинности, определение дефектов, причин их возникновения и стоимости.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
                <div class="service-card">
                    <img class="service-image" src="<?php echo esc_url( get_template_directory_uri() . '/images/cards/09_pojar_tech.jpg' ); ?>" alt="Экспертиза">
                    <p class="service-name">Пожарно-техническая экспертиза</p>
                    <hr class="service-separator">
                    <p class="service-description">
                        Определение причин и условий возникновения пожара, а также выявление нарушений требований пожарной безопасности.
                    </p>
                    <p class="text_price">
                        5 000 руб.
                    </p>
                    <a class="service-button" href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacts' ) ) ); ?>">ЗАКАЗАТЬ</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>