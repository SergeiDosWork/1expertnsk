<?php
/*
Template Name: Documents
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="main-content">
        <section class="documents-section">
            <h1 class="documents-title">НАШИ ДОКУМЕНТЫ</h1>

            <div class="document-carousel">
                <!-- Карусель для документов сотрудников -->
                <div class="carousel-inner">
                    <!-- Заглушка, здесь будет вывод изображений документов, возможно через ACF или кастомный тип записи -->
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/docs/doc_emp_1.jpg' ); ?>" alt="Документ 1">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/docs/doc_emp_2.jpg' ); ?>" alt="Документ 2">
                </div>
                <!-- Стрелки навигации, если реализуется JS карусель -->
            </div>

            <div class="document-carousel">
                <!-- Карусель для организационных документов -->
                <div class="carousel-inner">
                    <!-- Заглушка, здесь будет вывод изображений документов, возможно через ACF или кастомный тип записи -->
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/docs/doc_org_1.jpg' ); ?>" alt="Документ 1">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/docs/doc_org_2.jpg' ); ?>" alt="Документ 2">
                </div>
                <!-- Стрелки навигации, если реализуется JS карусель -->
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>