<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@400;700&display=swap' );
	wp_enqueue_style( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css' );

	wp_deregister_script( 'jquery-core' );

	wp_enqueue_script( 'imask', 'https://unpkg.com/imask', array(), null, true );
	wp_enqueue_script( 'flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/main.js', array(), null, true );
} );


add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_tab( __( 'Меню' ), array(
		         Field::make( 'text', 'link_title_greeting', '' )->set_default_value( 'Главная' ),
		         Field::make( 'text', 'link_title_about', '' )->set_default_value( 'О театре' ),
		         Field::make( 'text', 'link_title_products', '' )->set_default_value( 'Наши постановки' ),
		         Field::make( 'text', 'link_title_partners', '' )->set_default_value( 'Партнеры театра' ),
		         Field::make( 'text', 'link_title_join', '' )->set_default_value( 'Контакты' ),
	         ) )
	         ->add_tab( __( 'Контакты' ), array(
		         Field::make( 'text', 'phone', 'Телефон' ),
		         Field::make( 'text', 'email', 'Почта' ),
		         Field::make( 'text', 'address', 'Адрес' ),
		         Field::make( 'text', 'link_vk', 'Ссылка VK' ),
		         Field::make( 'text', 'link_fb', 'Ссылка Facebook' ),
		         Field::make( 'text', 'link_inst', 'Ссылка Instagram' ),
		         Field::make( 'text', 'link_yt', 'Ссылка YouTube' )
		              ->set_help_text( 'При отсутствии ссылки, она не будет отображаться' ),
	         ) )
	         ->add_tab( __( 'Главная' ), array(
		         Field::make( 'text', 'greeting_title', 'Заголовок' )->set_default_value( 'Большой театр' ),
		         Field::make( 'textarea', 'greeting_text', 'Текст' )->set_default_value( 'Описание' ),
		         Field::make( 'media_gallery', 'greeting_posters', __( 'Картинки афиши' ) )
		              ->set_help_text( 'Картинки афиши в разрешении 350x490' )
		              ->set_type( array( 'image' ) ),
	         ) )
	         ->add_tab( __( 'О театре' ), array(
		         Field::make( 'text', 'about_title', 'Заголовок' )->set_default_value( 'О театре' ),
		         Field::make( 'text', 'about_subtitle1', 'Подзаголовок 1' )->set_default_value( 'Самый лучший театр' ),
		         Field::make( 'textarea', 'about_text', 'Текст' )->set_default_value( 'Самый лучший театр' ),
		         Field::make( 'text', 'about_subtitle2', 'Подзаголовок 2' )->set_default_value( 'Немного о цифрах' ),
		         Field::make( 'text', 'about_stat1', 'Данные 1' )->set_default_value( '1600 посадочных мест' ),
		         Field::make( 'text', 'about_stat2', 'Данные 2' )->set_default_value( '350 лет истории' ),
		         Field::make( 'image', 'about_image', __( 'Картинка' ) )
		              ->set_help_text( 'Картинки в разрешении 350x292' ),
	         ) )
	         ->add_tab( __( 'Постановки' ), array(
		         Field::make( 'text', 'products_title', 'Заголовок' )->set_default_value( 'Наши постановки' ),
		         Field::make( 'complex', 'products_list', __( 'Постановки' ) )
		              ->add_fields( array(
			              Field::make( 'text', 'products_title', __( 'Название' ) ),
			              Field::make( 'text', 'products_note', __( 'Подпись' ) ),
			              Field::make( 'image', 'products_image', __( 'Фото' ) ),
		              ) ),
	         ) )
	         ->add_tab( __( 'Рейтинг' ), array(
		         Field::make( 'textarea', 'deserts_text', 'Надпись' )
		              ->set_default_value( 'Лучший театр по мнению театральных критиков Парижа' ),
	         ) )
	         ->add_tab( __( 'Партнеры' ), array(
		         Field::make( 'text', 'partners_title', 'Заголовок' )->set_default_value( 'Наши патрнеры' ),
		         Field::make( 'media_gallery', 'partners_list', __( 'Логотипы партнеров' ) )
		              ->set_type( array( 'image' ) ),
	         ) );

}

add_action( 'admin_menu', 'remove_menu_items' );
function remove_menu_items() {
//	remove_menu_page( 'edit.php' );
//	remove_menu_page( 'upload.php' );
//	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'users.php' );
}