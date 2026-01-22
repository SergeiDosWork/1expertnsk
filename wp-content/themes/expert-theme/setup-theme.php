<?php
/**
 * Theme Setup Script
 *
 * This script handles the initial setup of the Expert Bureau WordPress theme
 * to replicate the original HTML site structure and content.
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Run initial theme setup
 */
function run_expert_theme_setup() {
    // Create initial pages if they don't exist
    create_initial_pages();
    
    // Set up navigation menu
    setup_navigation_menu();
    
    // Set contact options
    set_contact_options();
    
    // Flush rewrite rules to ensure custom post types work
    flush_rewrite_rules();
}

/**
 * Create initial pages based on the original HTML structure
 */
function create_initial_pages() {
    $pages = array(
        array(
            'post_title' => 'О компании',
            'post_name' => 'o-kompanii',
            'post_content' => 'Добро пожаловать на сайт ПервоеЭкспертное Бюро. Мы предоставляем независимые экспертные услуги в различных областях.',
            'post_status' => 'publish',
            'post_type' => 'page'
        ),
        array(
            'post_title' => 'Услуги',
            'post_name' => 'uslugi',
            'post_content' => 'На этой странице представлены все наши услуги по независимой экспертизе.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-services.php'
        ),
        array(
            'post_title' => 'Документы',
            'post_name' => 'dokumenty',
            'post_content' => 'В этом разделе вы можете ознакомиться с документами нашей организации.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-documents.php'
        ),
        array(
            'post_title' => 'Контакты',
            'post_name' => 'kontakty',
            'post_content' => 'Контактная информация для связи с нашей организацией.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'page_template' => 'page-contacts.php'
        )
    );

    foreach ($pages as $page_data) {
        // Check if page already exists
        $existing_page = get_page_by_path($page_data['post_name']);
        
        if (!$existing_page) {
            $page_id = wp_insert_post($page_data);
            
            // If a specific template is defined, save it as page meta
            if (isset($page_data['page_template'])) {
                update_post_meta($page_id, '_wp_page_template', $page_data['page_template']);
            }
        }
    }
}

/**
 * Set up the main navigation menu
 */
function setup_navigation_menu() {
    // Check if menu exists, if not create it
    $menu_name = 'Main Menu';
    $menu_exists = wp_get_nav_menu_object($menu_name);
    
    if (!$menu_exists) {
        $menu_id = wp_create_nav_menu($menu_name);
        
        // Add menu items
        $menu_items = array(
            array(
                'menu-item-title' => 'О компании',
                'menu-item-object' => 'page',
                'menu-item-object-id' => get_page_by_path('o-kompanii')->ID,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ),
            array(
                'menu-item-title' => 'Услуги',
                'menu-item-object' => 'page',
                'menu-item-object-id' => get_page_by_path('uslugi')->ID,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ),
            array(
                'menu-item-title' => 'Документы',
                'menu-item-object' => 'page',
                'menu-item-object-id' => get_page_by_path('dokumenty')->ID,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ),
            array(
                'menu-item-title' => 'Контакты',
                'menu-item-object' => 'page',
                'menu-item-object-id' => get_page_by_path('kontakty')->ID,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish'
            ),
            array(
                'menu-item-title' => 'Отзывы',
                'menu-item-url' => 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398',
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish'
            ),
            array(
                'menu-item-title' => 'Карьера',
                'menu-item-object' => 'page',
                'menu-item-object-id' => get_page_by_path('uslugi')->ID,
                'menu-item-type' => 'post_type',
                'menu-item-status' => 'publish',
                'menu-item-attr-title' => 'career'
            )
        );
        
        foreach ($menu_items as $item) {
            if (isset($item['menu-item-object-id']) && $item['menu-item-object-id']) {
                wp_update_nav_menu_item($menu_id, 0, $item);
            } else {
                // Handle external links
                wp_update_nav_menu_item($menu_id, 0, $item);
            }
        }
        
        // Assign menu to primary location
        $locations = get_theme_mod('nav_menu_locations');
        $locations['primary'] = $menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }
}

/**
 * Set default contact options
 */
function set_contact_options() {
    if (!get_option('phone_number')) {
        update_option('phone_number', '+73832079585');
    }
    
    if (!get_option('whatsapp_number')) {
        update_option('whatsapp_number', '+79538959015');
    }
    
    if (!get_option('contact_email')) {
        update_option('contact_email', '1expertnsk@bk.ru');
    }
}

// Hook into theme activation
if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
    add_action('after_switch_theme', 'run_expert_theme_setup');
}