<?php
/**
 * Theme Configuration File
 * 
 * This file contains the initial content for the WordPress site to replicate the original HTML site.
 * It can be used during theme activation or via WordPress import tools.
 */

// Define the content structure for the WordPress site to match the original HTML site

$theme_content = array(
    'home_page' => array(
        'title' => 'О нас',
        'content' => 'Главная страница контента будет взята из оригинального index.html',
        'template' => 'index.php'
    ),
    'services_page' => array(
        'title' => 'Услуги',
        'content' => 'Страница с услугами будет использоваться шаблон page-services.php',
        'template' => 'page-services.php',
        'slug' => 'uslugi'
    ),
    'documents_page' => array(
        'title' => 'Документы',
        'content' => 'Страница с документами будет использоваться шаблон page-documents.php',
        'template' => 'page-documents.php',
        'slug' => 'dokumenty'
    ),
    'contacts_page' => array(
        'title' => 'Контакты',
        'content' => 'Страница с контактами будет использоваться шаблон page-contacts.php',
        'template' => 'page-contacts.php',
        'slug' => 'kontakty'
    )
);

// Navigation menu items
$menu_items = array(
    array(
        'title' => 'О компании',
        'url' => '/',
        'position' => 1
    ),
    array(
        'title' => 'Услуги',
        'url' => '/uslugi',
        'position' => 2
    ),
    array(
        'title' => 'Документы',
        'url' => '/dokumenty',
        'position' => 3
    ),
    array(
        'title' => 'Контакты',
        'url' => '/kontakty',
        'position' => 4
    ),
    array(
        'title' => 'Отзывы',
        'url' => 'https://novosibirsk.flamp.ru/firm/pervoe_ehkspertnoe_byuro_uchrezhdenie_nezavisimojj_ehkspertizy-70000001042868398',
        'position' => 5
    ),
    array(
        'title' => 'Карьера',
        'url' => '/uslugi#career',
        'position' => 6
    )
);

// Contact information
$contact_info = array(
    'phone_number' => '+73832079585',
    'whatsapp_number' => '+79538959015',
    'contact_email' => '1expertnsk@bk.ru'
);

return array(
    'content' => $theme_content,
    'menu' => $menu_items,
    'contact_info' => $contact_info
);