<?php
// Theme setup
function expert_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}
add_action('after_setup_theme', 'expert_theme_setup');

// Enqueue scripts and styles
function expert_theme_scripts() {
    wp_enqueue_style('expert-theme-style', get_stylesheet_uri());
    
    // Enqueue the main script
    wp_enqueue_script('expert-theme-script', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX calls if needed
    wp_localize_script('expert-theme-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'expert_theme_scripts');

// Customizer settings for contact information
function expert_theme_customizer($wp_customize) {
    // Add section for contact info
    $wp_customize->add_section('contact_info_section', array(
        'title' => 'Contact Information',
        'priority' => 30,
    ));
    
    // Phone number setting
    $wp_customize->add_setting('phone_number', array(
        'default' => '+73832079585',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('phone_number', array(
        'label' => 'Phone Number',
        'section' => 'contact_info_section',
        'type' => 'text',
    ));
    
    // WhatsApp number setting
    $wp_customize->add_setting('whatsapp_number', array(
        'default' => '+79538959015',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('whatsapp_number', array(
        'label' => 'WhatsApp Number',
        'section' => 'contact_info_section',
        'type' => 'text',
    ));
    
    // Contact email setting
    $wp_customize->add_setting('contact_email', array(
        'default' => '1expertnsk@bk.ru',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => 'Contact Email',
        'section' => 'contact_info_section',
        'type' => 'email',
    ));
}
add_action('customize_register', 'expert_theme_customizer');

// Create custom post types for services
function create_services_post_type() {
    register_post_type('services',
        array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'rewrite' => array('slug' => 'uslugi'),
        )
    );
}
add_action('init', 'create_services_post_type');

// Create custom post type for documents
function create_documents_post_type() {
    register_post_type('documents',
        array(
            'labels' => array(
                'name' => 'Documents',
                'singular_name' => 'Document'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'dokumenty'),
        )
    );
}
add_action('init', 'create_documents_post_type');

// Create custom post type for contacts
function create_contacts_post_type() {
    register_post_type('contacts',
        array(
            'labels' => array(
                'name' => 'Contacts',
                'singular_name' => 'Contact'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'kontakty'),
        )
    );
}
add_action('init', 'create_contacts_post_type');

// Hook into theme activation
function expert_theme_activation() {
    include_once(get_template_directory() . '/setup-theme.php');
}
add_action('after_switch_theme', 'expert_theme_activation');