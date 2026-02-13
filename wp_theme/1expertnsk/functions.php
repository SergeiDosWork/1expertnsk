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
	
	// Добавление размера изображения для услуг
	add_image_size( 'service-thumbnail', 260, 185, true );
	
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
 * Минимизация CSS
 */
function expertnsk_minify_css( $css ) {
	// Заменяем относительные пути изображений на абсолютные
	$template_uri = get_template_directory_uri();

	// Заменяем url(images/...) на url(ABSPATH_TO_THEME/images/...)
	$css = preg_replace(
		'/url\((["\']?)images\//i',
		'url($1' . $template_uri . '/images/',
		$css
	);

	// Заменяем url(icons/...) на url(ABSPATH_TO_THEME/images/icons/)
	$css = preg_replace(
		'/url\((["\']?)icons\//i',
		'url($1' . $template_uri . '/images/icons/',
		$css
	);

	// Удаляем комментарии
	$css = preg_replace( '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css );

	// Удаляем пробелы, табуляции и переносы строк
	$css = str_replace( array( "\r\n", "\r", "\n", "\t" ), '', $css );

	// Удаляем лишние пробелы
	$css = preg_replace( '/\s+/', ' ', $css );

	// Удаляем пробелы вокруг специальных символов
	$css = preg_replace( '/\s*([{}:;,>+~])\s*/', '$1', $css );

	// Удаляем последний символ ;
	$css = trim( $css, ';' );

	return trim( $css );
}

/**
 * Получение минимизированного CSS с кешированием
 */
function expertnsk_get_minified_css_url() {
	$css_file = get_stylesheet_directory() . '/style.css';
	$cache_dir = get_stylesheet_directory() . '/cache';

	// Создаем директорию кеша, если её нет
	if ( ! file_exists( $cache_dir ) ) {
		wp_mkdir_p( $cache_dir );
	}
	
	// Получаем время модификации исходного файла
	$css_mtime = filemtime( $css_file );

	// Имя кешированного файла с версией
	$cache_file = $cache_dir . '/style-' . $css_mtime . '.min.css';

	// Если кеш существует и актуален, возвращаем его
	if ( file_exists( $cache_file ) && filemtime( $cache_file ) >= $css_mtime ) {
		return get_template_directory_uri() . '/cache/style-' . $css_mtime . '.min.css';
	}

	// Читаем исходный CSS
	$css_content = file_get_contents( $css_file );

	// Минимизируем CSS
	$minified_css = expertnsk_minify_css( $css_content );

	// Сохраняем минимизированный CSS
	file_put_contents( $cache_file, $minified_css );

	// Возвращаем URL кешированного файла
	return get_template_directory_uri() . '/cache/style-' . $css_mtime . '.min.css';
}

/**
 * Подключение стилей и скриптов
 */
function expertnsk_scripts() {
	// Очистка кеша CSS при разработке (раскомментируйте для очистки)
	$cache_dir = get_stylesheet_directory() . '/cache';
	if ( file_exists( $cache_dir ) ) {
		$files = glob( $cache_dir . '/*.css' );
		foreach ( $files as $file ) {
			unlink( $file );
		}
	}

	// Основной стиль темы (минимизированный с уникальным именем)
	$minified_css_url = expertnsk_get_minified_css_url();
	$css_version = filemtime( get_stylesheet_directory() . '/style.css' );

	wp_enqueue_style( 'expertnsk-style', $minified_css_url, array(), $css_version );

	// Google Fonts
	wp_enqueue_style( 'expertnsk-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Open+Sans+Condensed:wght@300;700&family=Roboto:wght@400;700&display=swap', array(), null );

	// Основной скрипт
	wp_enqueue_script( 'expertnsk-script', get_template_directory_uri() . '/js/main.js', array(), time(), true );

	// jQuery (включен по умолчанию в WordPress)
	wp_enqueue_script( 'jquery' );

	// Комментарии (если включены)
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Inline скрипт для гарантированной инициализации мобильного меню
	wp_add_inline_script( 'expertnsk-script', '
		// Инициализация мобильного меню (fallback)
		function initMobileMenuFallback() {
			var toggle = document.getElementById("mobileMenuToggle");
			var content = document.getElementById("mobileMenuContent");
			var overlay = document.getElementById("mobileMenuOverlay");

			if (toggle && content && overlay) {
				toggle.addEventListener("click", function(e) {
					e.preventDefault();
					e.stopPropagation();
					toggle.classList.toggle("active");
					content.classList.toggle("active");
					overlay.classList.toggle("active");

					if (content.classList.contains("active")) {
						document.body.style.overflow = "hidden";
					} else {
						document.body.style.overflow = "";
					}
				});

				overlay.addEventListener("click", function() {
					toggle.classList.remove("active");
					content.classList.remove("active");
					overlay.classList.remove("active");
					document.body.style.overflow = "";
				});

				var menuLinks = content.querySelectorAll(".buttons_main_menu");
				menuLinks.forEach(function(link) {
					link.addEventListener("click", function() {
						toggle.classList.remove("active");
						content.classList.remove("active");
						overlay.classList.remove("active");
						document.body.style.overflow = "";
					});
				});

				window.addEventListener("resize", function() {
					if (window.innerWidth > 768) {
						toggle.classList.remove("active");
						content.classList.remove("active");
						overlay.classList.remove("active");
						document.body.style.overflow = "";
					}
				});
			}
		}

		// Инициализация при загрузке DOM
		if (document.readyState === "loading") {
			document.addEventListener("DOMContentLoaded", initMobileMenuFallback);
		} else {
			initMobileMenuFallback();
		}
	' );
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
	$wp_customize->add_setting( 'expertnsk_contact_email', array(
		'default'           => '1expertnsk@bk.ru',
		'sanitize_callback' => 'sanitize_email',
	) );
	
	$wp_customize->add_control( 'expertnsk_contact_email', array(
		'label'   => __( 'Email', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'email',
	) );
	
	// Адрес
	$wp_customize->add_setting( 'expertnsk_address', array(
		'default'           => "г. Новосибирск, ул. Фрунзе, 14, офис 302\n",
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	
	$wp_customize->add_control( 'expertnsk_address', array(
		'label'   => __( 'Адрес', '1expertnsk' ),
		'section' => 'expertnsk_contacts',
		'type'    => 'textarea',
	) );
	
	// Режим работы
	$wp_customize->add_setting( 'expertnsk_work_hours', array(
		'default'           => "Пн-Чт с 9-00 до 18-00\nПт с 9-00 до 17-00",
		'sanitize_callback' => 'sanitize_textarea_field',
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
		'title'    => __( 'Настройка ссылок', '1expertnsk' ),
		'priority' => 35,
	) );
	
	// WhatsApp
	$wp_customize->add_setting( 'expertnsk_whatsapp', array(
		'default'           => 'https://wa.me/79538959015',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'expertnsk_whatsapp', array(
		'label'   => __( 'Ссылка "Заказать"', '1expertnsk' ),
		'section' => 'expertnsk_social',
		'type'    => 'url',
	) );
	
	// Telegram
	$wp_customize->add_setting( 'expertnsk_telegram', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	
	$wp_customize->add_control( 'expertnsk_telegram', array(
		'label'   => __( 'Ссылка Экспертиза', '1expertnsk' ),
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
		'email'      => get_theme_mod( 'expertnsk_contact_email', '1expertnsk@bk.ru' ),
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
		$classes[] = 'buttons_main_menu';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'expertnsk_nav_menu_css_class', 10, 4 );

/**
 * Добавление классов к ссылкам меню
 */
function expertnsk_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( 'primary' === $args->theme_location ) {
		$atts['class'] = 'buttons_main_menu';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'expertnsk_nav_menu_link_attributes', 10, 4 );

/**
 * Кастомный walker для вывода меню без li обёрток
 */
class ExpertnsK_Menu_Walker {
	private $items = array();
	
	public function walk( $items, $depth = 0 ) {
		$this->items = $items;
		$output = '';
		
		foreach ( $items as $item ) {
			// Добавляем класс напрямую
			$class = 'buttons_main_menu';

			// Пропускаем черновики
			if ( 'draft' === get_post_status( $item->object_id ) ) {
				continue;
			}

			$output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $class ) . '">';
			$output .= $item->title;
			$output .= '</a>';
		}
		
		return $output;
	}
}

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

/**
 * Принудительная установка значений настроек темы (для отладки)
 */
function expertnsk_debug_theme_mods() {
	// Для отладки - принудительно установим значения
	$debug_values = array(
		'expertnsk_contact_email' => 'test@test.com',
		'expertnsk_telegram'      => 'https://t.me/test',
	);

	foreach ( $debug_values as $mod_name => $value ) {
		$current = get_theme_mod( $mod_name );
		if ( $current === false || $current === '' ) {
			set_theme_mod( $mod_name, $value );
		}
	}
}
// add_action( 'init', 'expertnsk_debug_theme_mods' );

/**
 * Принудительная установка значений настроек темы для адреса, ИНН и режима работы
 */
function expertnsk_init_theme_mods() {
	$settings = array(
		'expertnsk_address',
		'expertnsk_inn',
		'expertnsk_work_hours',
	);

	foreach ( $settings as $mod_name ) {
		$current = get_theme_mod( $mod_name );
		if ( $current === false || $current === '' ) {
			// Установим пустую строку вместо значения по умолчанию
			set_theme_mod( $mod_name, '' );
		}
	}
}
add_action( 'init', 'expertnsk_init_theme_mods' );

/**
 * Регистрация кастомного типа постов "Услуги" (Service)
 */
function expertnsk_register_service_post_type() {
	$labels = array(
		'name'                  => _x( 'Услуги', 'Post Type General Name', '1expertnsk' ),
		'singular_name'         => _x( 'Услуга', 'Post Type Singular Name', '1expertnsk' ),
		'menu_name'             => __( 'Услуги', '1expertnsk' ),
		'name_admin_bar'        => __( 'Услуга', '1expertnsk' ),
		'archives'              => __( 'Архив услуг', '1expertnsk' ),
		'attributes'            => __( 'Атрибуты услуги', '1expertnsk' ),
		'parent_item_colon'     => __( 'Родительская услуга:', '1expertnsk' ),
		'all_items'             => __( 'Все услуги', '1expertnsk' ),
		'add_new_item'          => __( 'Добавить новую услугу', '1expertnsk' ),
		'add_new'               => __( 'Добавить новую', '1expertnsk' ),
		'new_item'              => __( 'Новая услуга', '1expertnsk' ),
		'edit_item'             => __( 'Редактировать услугу', '1expertnsk' ),
		'update_item'           => __( 'Обновить услугу', '1expertnsk' ),
		'view_item'             => __( 'Просмотреть услугу', '1expertnsk' ),
		'view_items'            => __( 'Просмотреть услуги', '1expertnsk' ),
		'search_items'          => __( 'Найти услугу', '1expertnsk' ),
		'not_found'             => __( 'Услуги не найдены', '1expertnsk' ),
		'not_found_in_trash'    => __( 'Услуги в корзине не найдены', '1expertnsk' ),
		'featured_image'        => __( 'Изображение услуги', '1expertnsk' ),
		'set_featured_image'    => __( 'Установить изображение услуги', '1expertnsk' ),
		'remove_featured_image' => __( 'Удалить изображение услуги', '1expertnsk' ),
		'use_featured_image'    => __( 'Использовать как изображение услуги', '1expertnsk' ),
	);

	$args = array(
		'label'                 => __( 'Услуга', '1expertnsk' ),
		'description'           => __( 'Услуги экспертизы', '1expertnsk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'expertnsk_register_service_post_type', 0 );