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
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'upload.php' );
	remove_menu_page( 'edit.php?post_type=page' );
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'users.php' );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', __( 'Theme Options' ) )
	         ->add_tab( __( 'Меню' ), array(
		         Field::make( 'text', 'coffee_menu_home', '' )->set_default_value( 'Главная' ),
		         Field::make( 'text', 'coffee_menu_about', '' )->set_default_value( 'О нас' ),
		         Field::make( 'text', 'coffee_menu_coffee', '' )->set_default_value( 'Наш кофе' ),
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
	         ) );

}