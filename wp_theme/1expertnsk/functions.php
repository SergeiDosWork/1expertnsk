<?php
/**
 * Functions и определения темы Первое Экспертное Бюро
 *
 * @package 1expertnsk
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Запрет прямого доступа
}

/**
 * Настройка темы
 */
function expertnsk_setup() {
	// Включение поддержки заголовка темы
	add_theme_support( 'title-tag' );
	
	// Включение поддержки миниатюр постов
	add_theme_support( 'post-thumbnails' );
	
	// Включение поддержки HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	) );
	
	// Включение поддержки виджетов
	add_theme_support( 'widgets' );
	
	// Регистрация меню
	register_nav_menus( array(
		'primary' => __( 'Главное меню', '1expertnsk' ),
		'footer'  => __( 'Меню в подвале', '1expertnsk' ),
	) );
	
	// Установка максимальной ширины контента
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 1200;
	}
}
add_action( 'after_setup_theme', 'expertnsk_setup' );

/**
 * Регистрация областей виджетов
 */
function expertnsk_widgets_init() {
	// Область виджетов в подвале
	register_sidebar( array(
		'name'          => __( 'Подвал - Колонка 1', '1expertnsk' ),
		'id'            => 'footer-1',
		'description'   => __( 'Первая колонка в подвале', '1expertnsk' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Подвал - Колонка 2', '1expertnsk' ),
		'id'            => 'footer-2',
		'description'   => __( 'Вторая колонка в подвале', '1expertnsk' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Подвал - Колонка 3', '1expertnsk' ),
		'id'            => 'footer-3',
		'description'   => __( 'Третья колонка в подвале (Контакты)', '1expertnsk' ),
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	// Боковая панель для блога (если понадобится)
	register_sidebar( array(
		'name'          => __( 'Боковая панель', '1expertnsk' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Боковая панель для страниц блога', '1expertnsk' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'expertnsk_widgets_init' );

/**
 * Подключение стилей и скриптов
 */
function expertnsk_scripts() {
	// Основной стиль темы
	wp_enqueue_style( 'expertnsk-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	
	// Google Fonts
	wp_enqueue_style( 'expertnsk-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Open+Sans+Condensed:wght@300;700&family=Roboto:wght@400;700&display=swap', array(), null );
	
	// Основной скрипт
	wp_enqueue_script( 'expertnsk-script', get_template_directory_uri() . '/js/main.js', array(), wp_get_theme()->get( 'Version' ), true );
	
	// jQuery (включен по умолчанию в WordPress)
	wp_enqueue_script( 'jquery' );
	
	// Комментарии (если включены)
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'expertnsk_scripts' );

/**
 * Настройка Customizer
 */
function expertnsk_customize_register( $wp_customize ) {
	// Секция контактной информации
	$wp_customize->add_section( 'expertnsk_contacts', array(
		'title'    => __( 'Контактная информация', '1expertnsk' ),
		'priority' => 30,
	) );
	
	// Телефон 1
	$wp_customize->add_setting( 'expertnsk_phone_1', array(
		'default'           => '+7 (383) 207 95 85',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_phone_1', array(
		'label'   => __( 'Основной телефон', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'text',
	) );
	
	// Телефон 2
	$wp_customize->add_setting( 'expertnsk_phone_2', array(
		'default'           => '+7 (953) 895 90 15',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_phone_2', array(
		'label'   => __( 'Дополнительный телефон', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'text',
	) );
	
	// Email
	$wp_customize->add_setting( 'expertnsk_email', array(
		'default'           => '1expertnsk@bk.ru',
		'sanitize_callback' => 'sanitize_email',
	) );
	
	$wp_customize->add_control( 'expertnsk_email', array(
		'label'   => __( 'Email', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'email',
	) );
	
	// Адрес
	$wp_customize->add_setting( 'expertnsk_address', array(
		'default'           => 'г. Новосибирск, ул. Фрунзе, 14, офис 302',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_address', array(
		'label'   => __( 'Адрес', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'textarea',
	) );
	
	// Режим работы
	$wp_customize->add_setting( 'expertnsk_work_hours', array(
		'default'           => 'Пн-Чт с 9-00 до 18-00, Пт с 9-00 до 17-00',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_work_hours', array(
		'label'   => __( 'Режим работы', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'textarea',
	) );
	
	// ИНН
	$wp_customize->add_setting( 'expertnsk_inn', array(
		'default'           => 'ИНН 5404141038',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_inn', array(
		'label'   => __( 'ИНН', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'text',
	) );
	
	// Секция социальных сетей
	$wp_customize->add_section( 'expertnsk_social', array(
		'title'    => __( 'Социальные сети', '1expertnsk' ),
		'priority' => 35,
	) );
	
	// WhatsApp
	$wp_customize->add_setting( 'expertnsk_whatsapp', array(
		'default'           => 'https://wa.me/79538959015',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'expertnsk_whatsapp', array(
		'label'   => __( 'WhatsApp', '1expertnsk' ),
		'section' => 'expertnsk_social',
		'type'    => 'url',
	) );
	
	// Telegram
	$wp_customize->add_setting( 'expertnsk_telegram', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'expertnsk_telegram', array(
		'label'   => __( 'Telegram', '1expertnsk' ),
		'section' => 'expertnsk_social',
		'type'    => 'url',
	) );
	
	// Отзывы
	$wp_customize->add_setting( 'expertnsk_reviews', array(
		'default'           => 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'expertnsk_reviews', array(
		'label'   => __( 'Ссылка на отзывы', '1expertnsk' ),
		'section' => 'expertnsk_social',
		'type'    => 'url',
	) );
}
add_action( 'customize_register', 'expertnsk_customize_register' );

/**
 * Добавление CSS для админки
 */
function expertnsk_admin_css() {
	echo '<style>
		.wp-admin #wpadminbar #wp-admin-bar-site-name > .ab-item:before {
			content: "\f319";
		}
	</style>';
}
add_action( 'admin_head', 'expertnsk_admin_css' );

/**
 * Функция для получения контактной информации
 */
function expertnsk_get_contact_info() {
	return array(
		'phone_1'    => get_theme_mod( 'expertnsk_phone_1', '+7 (383) 207 95 85' ),
		'phone_2'    => get_theme_mod( 'expertnsk_phone_2', '+7 (953) 895 90 15' ),
		'email'      => get_theme_mod( 'expertnsk_email', '1expertnsk@bk.ru' ),
		'address'    => get_theme_mod( 'expertnsk_address', 'г. Новосибирск, ул. Фрунзе, 14, офис 302' ),
		'work_hours' => get_theme_mod( 'expertnsk_work_hours', 'Пн-Чт с 9-00 до 18-00, Пт с 9-00 до 17-00' ),
		'inn'        => get_theme_mod( 'expertnsk_inn', 'ИНН 5404141038' ),
		'whatsapp'   => get_theme_mod( 'expertnsk_whatsapp', 'https://wa.me/79538959015' ),
		'telegram'   => get_theme_mod( 'expertnsk_telegram', '#' ),
		'reviews'    => get_theme_mod( 'expertnsk_reviews', 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398' ),
	);
}

/**
 * Функция для форматирования телефона в ссылку
 */
function expertnsk_format_phone_link( $phone ) {
	$clean_phone = preg_replace( '/[^0-9+]/', '', $phone );
	return 'tel:' . $clean_phone;
}

/**
 * Функция для форматирования email в ссылку
 */
function expertnsk_format_email_link( $email ) {
	return 'mailto:' . $email;
}

/**
 * Добавление классов к пунктам меню
 */
function expertnsk_nav_menu_css_class( $classes, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		$classes[] = 'menu-item';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'expertnsk_nav_menu_css_class', 10, 4 );

/**
 * Добавление классов к ссылкам меню
 */
function expertnsk_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		$atts['class'] = 'menu-item';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'expertnsk_nav_menu_link_attributes', 10, 4 );

/**
 * Добавление поддержки логотипа через Customizer
 */
function expertnsk_custom_logo_setup() {
	$defaults = array(
		'height'               => 172,
		'width'                => 498,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true,
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'expertnsk_custom_logo_setup' );

/**
 * Автоматическое добавление новых страниц в главное меню
 */
function expertnsk_auto_add_pages_to_menu( $post_id ) {
	// Проверяем, что это страница и не автосохранение
	if ( wp_is_post_revision( $post_id ) || get_post_type( $post_id ) != 'page' ) {
		return;
	}
	
	// Получаем главное меню
	$menu_name = 'primary';
	$menu = wp_get_nav_menu_object( $menu_name );
	
	if ( ! $menu ) {
		// Создаем меню, если его нет
		$menu_id = wp_create_nav_menu( $menu_name );
		$menu = wp_get_nav_menu_object( $menu_id );
	}
	
	// Проверяем, есть ли уже эта страница в меню
	$menu_items = wp_get_nav_menu_items( $menu->term_id );
	$page_in_menu = false;
	
	foreach ( $menu_items as $item ) {
		if ( $item->object_id == $post_id ) {
			$page_in_menu = true;
			break;
		}
	}
	
	// Добавляем страницу в меню, если ее там нет
	if ( ! $page_in_menu ) {
		wp_update_nav_menu_item( $menu->term_id, 0, array(
			'menu-item-title'     => get_the_title( $post_id ),
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $post_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
		) );
	}
}
add_action( 'save_post_page', 'expertnsk_auto_add_pages_to_menu' );