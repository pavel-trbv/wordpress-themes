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
	         ->add_tab( __( 'Шапка' ), array(
		         Field::make( 'image', 'coffee_logo', '' )->set_help_text( 'Логотип сайта' ),
		         Field::make( 'text', 'coffee_menu_home', '' )->set_default_value( 'Главная' ),
		         Field::make( 'text', 'coffee_menu_about', '' )->set_default_value( 'О нас' ),
		         Field::make( 'text', 'coffee_menu_coffee', '' )->set_default_value( 'Наш кофе' ),
		         Field::make( 'text', 'coffee_menu_gallery', '' )->set_default_value( 'Галерея' ),
		         Field::make( 'text', 'coffee_menu_review', '' )->set_default_value( 'Достижения' ),
		         Field::make( 'text', 'coffee_menu_blog', '' )->set_default_value( 'Блог' ),
	         ) );
}