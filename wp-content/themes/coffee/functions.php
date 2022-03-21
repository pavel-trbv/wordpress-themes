<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'linearicons', get_template_directory_uri() . '/assets/css/linearicons.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), null );

	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/vendor/jquery-2.2.4.min.js', array(), null, true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.min.js', array(), null, true );
	wp_enqueue_script( 'hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.js', array(), null, true );
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), null, true );
	wp_enqueue_script( 'query.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), null, true );
	wp_enqueue_script( 'jquery.nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array(), null, true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array(), null, true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), null, true );
	wp_enqueue_script( 'mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array(), null, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
} );

add_filter( 'show_admin_bar', '__return_false' );

add_action( 'admin_menu', 'remove_menu_items' );
function remove_menu_items() {
//	remove_menu_page( 'edit.php' );
	remove_menu_page( 'upload.php' );
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'users.php' );
}

add_theme_support( 'post-thumbnails' );

add_filter('excerpt_more', function($more) {
	return '...';
});

add_filter( 'excerpt_length', function(){
	return 40;
} );

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_tab( __( 'Шапка' ), array(
		         Field::make( 'image', 'coffee_logo', '' )->set_help_text( 'Логотип сайта' ),
		         Field::make( 'text', 'coffee_menu_home', '' )->set_default_value( 'Главная' ),
		         Field::make( 'text', 'coffee_menu_about', '' )->set_default_value( 'О нас' ),
		         Field::make( 'text', 'coffee_menu_coffee', '' )->set_default_value( 'Наш кофе' ),
		         Field::make( 'text', 'coffee_menu_gallery', '' )->set_default_value( 'Галерея' ),
		         Field::make( 'text', 'coffee_menu_review', '' )->set_default_value( 'Достижения' ),
		         Field::make( 'text', 'coffee_menu_blog', '' )->set_default_value( 'Блог' ),
	         ) )
	         ->add_tab( __( 'Контакты' ), array(
		         Field::make( 'text', 'coffee_hours_1', 'Часы работы 1' )->set_default_value( 'Пн-Пт 8:00-22:00' ),
		         Field::make( 'text', 'coffee_hours_2', 'Часы работы 2' )->set_default_value( 'Сб-Вс 10:00-20:00' ),
		         Field::make( 'text', 'coffee_phone', 'Номер телефона' )->set_default_value( '+7 (999) 123-45-67' ),
	         ) )
	         ->add_tab( __( 'Главная' ), array(
		         Field::make( 'text', 'coffee_home_title', 'Заголовок' )->set_default_value( 'Начни свой день с чёрного кофе' ),
		         Field::make( 'text', 'coffee_home_subtitle', 'Подзаголовок' )->set_default_value( 'Почувствуй энергию' ),
		         Field::make( 'text', 'coffee_home_button', 'Текст на кнопке' )->set_default_value( 'Заказать' ),
	         ) )
	         ->add_tab( __( 'О нас' ), array(
		         Field::make( 'text', 'coffee_about_title', 'Заголовок' )->set_default_value( 'Показываем в прямом эфире' ),
		         Field::make( 'text', 'coffee_about_subtitle', 'Подзаголовок' )->set_default_value( 'Процесс приготовления настоящего кофе' ),
		         Field::make( 'text', 'coffee_about_p1', 'Абзац 1' )->set_default_value( 'Мы готовы услышать все ваши пожелания' ),
		         Field::make( 'text', 'coffee_about_p2', 'Абзац 2' )->set_default_value( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.' ),
		         Field::make( 'text', 'coffee_about_video', 'Ссылка на видео' )->set_default_value( 'https://www.youtube.com/watch?v=ARA0AxrnHdM' ),
		         Field::make( 'image', 'coffee_about_preview', 'Превью' )
		              ->set_help_text( 'Картинки в разрешении 555х350' )
	         ) )
	         ->add_tab( __( 'Продукция' ), array(
		         Field::make( 'text', 'coffee_coffee_title', 'Заголовок' )->set_default_value( 'Какие виды кофе мы предлагаем' ),
		         Field::make( 'text', 'coffee_coffee_subtitle', 'Подзаголовок' )->set_default_value( 'Мы используем только экологически чистые компоненты' ),
		         Field::make( 'complex', 'coffee_coffee_list', 'Список продукции' )
		              ->add_fields( array(
			              Field::make( 'text', 'coffee_product_title', 'Название' ),
			              Field::make( 'text', 'coffee_product_desc', 'Описание' ),
			              Field::make( 'text', 'coffee_product_price', 'Цена' ),
		              ) ),
	         ) )
	         ->add_tab( __( 'Галерея' ), array(
		         Field::make( 'text', 'coffee_gallery_title', 'Заголовок' )->set_default_value( 'Наша галерея' ),
		         Field::make( 'text', 'coffee_gallery_subtitle', 'Подзаголовок' )->set_default_value( 'Прекрасные фотографии нашего кофе' ),
		         Field::make( 'media_gallery', 'coffee_gallery_list', 'Фотографии' )
		              ->set_type( array( 'image' ) )
	         ) )
	         ->add_tab( __( 'Достижения' ), array(
		         Field::make( 'text', 'coffee_review_title', 'Заголовок' )->set_default_value( 'Наши достижения' ),
		         Field::make( 'text', 'coffee_review_subtitle', 'Подзаголовок' )->set_default_value( 'Что о нас думают люди' ),
		         Field::make( 'complex', 'coffee_review_list', 'Обзоры' )
		              ->add_fields( array(
			              Field::make( 'text', 'coffee_review_item_title', 'Название' ),
			              Field::make( 'text', 'coffee_review_item_desc', 'Описание' ),
			              Field::make( 'image', 'coffee_review_item_image', 'Логотип' ),
			              Field::make( 'select', 'coffee_review_item_rating', 'Рейтинг' )
			                   ->set_options( array(
				                   '1' => 1,
				                   '2' => 2,
				                   '3' => 3,
				                   '4' => 4,
				                   '5' => 5,
			                   ) )
		              ) ),
		         Field::make( 'complex', 'coffee_review_count', 'Цифры' )
		              ->add_fields( array(
			              Field::make( 'text', 'coffee_review_count_title', 'Название' ),
			              Field::make( 'text', 'coffee_review_count_value', 'Значение' ),
		              ) ),
	         ) )
	         ->add_tab( __( 'Блог' ), array(
		         Field::make( 'text', 'coffee_blog_title', 'Заголовок' )->set_default_value( 'Наши статьи' ),
		         Field::make( 'text', 'coffee_blog_subtitle', 'Подзаголовок' )->set_default_value( 'Пишем для вас' ),
	         ) )
	         ->add_tab( __( 'Футер' ), array(
		         Field::make( 'text', 'coffee_footer_about', 'Описание' )->set_default_value( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.' ),
		         Field::make( 'text', 'coffee_footer_fb', 'Ссылка Facebook' ),
		         Field::make( 'text', 'coffee_footer_tw', 'Ссылка Twitter' ),
		         Field::make( 'text', 'coffee_footer_dr', 'Ссылка Dribbble' ),
		         Field::make( 'text', 'coffee_footer_bh', 'Ссылка Behance' )
	         ) );
}