<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap', array(), null );

	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'owl.theme.default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css' );
	wp_enqueue_style( 'ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css' );
	wp_enqueue_style( 'bootstrap-datepicker', get_template_directory_uri() . '/assets/css/bootstrap-datepicker.css' );
	wp_enqueue_style( 'jquery.timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css' );
	wp_enqueue_style( 'icomoon', get_template_directory_uri() . '/assets/css/icomoon.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), null );

	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), null, true );
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-3.0.1.min.js', array(), null, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), null, true );
	wp_enqueue_script( 'jquery.waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.stellar', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', array(), null, true );
	wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true );
	wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), null, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), null, true );
	wp_enqueue_script( 'jquery.animateNumber', get_template_directory_uri() . '/assets/js/jquery.animateNumber.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-datepicker', get_template_directory_uri() . '/assets/js/bootstrap-datepicker.js', array(), null, true );
	wp_enqueue_script( 'jquery.timepicker', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array(), null, true );
	wp_enqueue_script( 'scrollax', get_template_directory_uri() . '/assets/js/scrollax.min.js', array(), null, true );
	wp_enqueue_script( 'google-map', get_template_directory_uri() . '/assets/js/google-map.js', array(), null, true );
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

add_filter( 'excerpt_more', function ( $more ) {
	return '...';
} );

add_filter( 'excerpt_length', function () {
	return 40;
} );

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_tab( __( 'Превью' ), array(
		         Field::make( 'image', 'pretty_preview_image', 'Изображение' ),
		         Field::make( 'text', 'pretty_preview_name', 'Название' )->set_default_value( 'Pretty' ),
		         Field::make( 'text', 'pretty_preview_title', 'Заголовок' )->set_default_value( 'Салон красоты' ),
		         Field::make( 'text', 'pretty_preview_button', 'Текст на кнопке' )->set_default_value( 'Наши услуги' ),
	         ) )
	         ->add_tab( __( 'Шапка' ), array(
		         Field::make( 'text', 'pretty_menu_name', 'Название' )->set_default_value( 'Pretty' ),
		         Field::make( 'text', 'pretty_menu_home', '' )->set_default_value( 'Главная' ),
		         Field::make( 'text', 'pretty_menu_about', '' )->set_default_value( 'О нас' ),
		         Field::make( 'text', 'pretty_menu_services', '' )->set_default_value( 'Наши услуги' ),
		         Field::make( 'text', 'pretty_menu_work', '' )->set_default_value( 'Примеры работ' ),
		         Field::make( 'text', 'pretty_menu_blog', '' )->set_default_value( 'Блог' ),
		         Field::make( 'text', 'pretty_menu_contacts', '' )->set_default_value( 'Контакты' ),
	         ) )
	         ->add_tab( __( 'Наши услуги' ), array(
		         Field::make( 'complex', 'pretty_services_list', 'Список продукции' )
		              ->add_fields( array(
			              Field::make( 'text', 'pretty_services_icon', 'Иконка' )->set_help_text( 'Название иконки с flaticon' ),
			              Field::make( 'text', 'pretty_services_title', 'Название' ),
			              Field::make( 'textarea', 'pretty_services_desc', 'Описание' ),
		              ) )
	         ) )
	         ->add_tab( __( 'Наши мастера' ), array(
		         Field::make( 'text', 'pretty_stuff_title', 'Заголовок' )->set_default_value( 'Наши мастера' ),
		         Field::make( 'textarea', 'pretty_stuff_desc', 'Описание' )->set_default_value( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.' ),
		         Field::make( 'complex', 'pretty_stuff_list', 'Список мастеров' )
		              ->add_fields( array(
			              Field::make( 'image', 'pretty_stuff_photo', 'Фотография' ),
			              Field::make( 'text', 'pretty_stuff_name', 'Имя' ),
			              Field::make( 'text', 'pretty_stuff_position', 'Должность' ),
			              Field::make( 'textarea', 'pretty_stuff_desc', 'Описание' ),
		              ) )
	         ) )
	         ->add_tab( __( 'Акция' ), array(
		         Field::make( 'text', 'pretty_promotion_title', 'Заголовок' )->set_default_value( 'Весенние скидки' ),
		         Field::make( 'text', 'pretty_promotion_subtitle', 'Подзаголовок' )->set_default_value( 'Сэкономьте до 25%' ),
		         Field::make( 'textarea', 'pretty_promotion_text', 'Текст' )->set_default_value( 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.' ),
		         Field::make( 'text', 'pretty_promotion_button', 'Текст на кнопке' )->set_default_value( 'Записаться' ),
		         Field::make( 'image', 'pretty_promotion_image', 'Картинка' ),
	         ) )
	         ->add_tab( __( 'Примеры работ' ), array(
		         Field::make( 'text', 'pretty_work_title', 'Заголовок' )->set_default_value( 'Примеры работ' ),
		         Field::make( 'textarea', 'pretty_work_subtitle', 'Подзаголовок' )->set_default_value( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.' ),
		         Field::make( 'complex', 'pretty_work_list', 'Список' )
		              ->add_fields( array(
			              Field::make( 'image', 'pretty_work_photo', 'Фотография' ),
			              Field::make( 'text', 'pretty_work_caption', 'Подпись' ),
		              ) )
	         ) )
	         ->add_tab( __( 'Партнеры' ), array(
		         Field::make( 'complex', 'pretty_partners_list', 'Список' )
		              ->add_fields( array(
			              Field::make( 'image', 'pretty_partners_image', 'Фотография' ),
		              ) )
	         ) )
	         ->add_tab( __( 'Цены' ), array(
		         Field::make( 'text', 'pretty_price_title', 'Заголовок' )->set_default_value( 'Цены' ),
		         Field::make( 'textarea', 'pretty_price_subtitle', 'Подзаголовок' )->set_default_value( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.' ),
		         Field::make( 'text', 'pretty_price_button', 'Текст кнопки' )->set_default_value( 'Записаться' ),
		         Field::make( 'complex', 'pretty_price_list', 'Список' )
		              ->add_fields( array(
			              Field::make( 'text', 'pretty_price_name', 'Название' ),
			              Field::make( 'text', 'pretty_price_price', 'Цена' ),
			              Field::make( 'text', 'pretty_price_unit', 'Единица измерения' )->set_default_value( 'посещение' ),
			              Field::make( 'checkbox', 'pretty_price_active', 'Подсветка' )->set_option_value( 'yes' ),
			              Field::make( 'complex', 'pretty_price_service_list', 'Список услуг' )
			                   ->add_fields( array(
				                   Field::make( 'text', 'pretty_price_service_name', 'Название' ),
			                   ) )
		              ) )
	         ) )
	         ->add_tab( __( 'Достижения' ), array(
		         Field::make( 'image', 'pretty_count_image', 'Картинка' ),
		         Field::make( 'complex', 'pretty_count_list', 'Список' )
		              ->add_fields( array(
			              Field::make( 'text', 'pretty_count_title', 'Название' ),
			              Field::make( 'text', 'pretty_count_value', 'Значение' ),
		              ) )
	         ) )
	         ->add_tab( __( 'Контакты' ), array(
		         Field::make( 'text', 'pretty_contacts_address', 'Адрес' ),
		         Field::make( 'text', 'pretty_contacts_phone', 'Телефон' ),
		         Field::make( 'text', 'pretty_contacts_email', 'Почта' ),
		         Field::make( 'text', 'pretty_contacts_days', 'Дни работы' ),
		         Field::make( 'text', 'pretty_contacts_hours', 'Часы работы' ),

	         ) )
	         ->add_tab( __( 'Футер' ), array(
		         Field::make( 'textarea', 'pretty_footer_about', 'О нас' ),
		         Field::make( 'text', 'pretty_footer_twitter', 'Ссылка на Twitter' ),
		         Field::make( 'text', 'pretty_footer_facebook', 'Ссылка на Facebook' ),
		         Field::make( 'text', 'pretty_footer_instagram', 'Ссылка на Instagram' ),

	         ) );
}