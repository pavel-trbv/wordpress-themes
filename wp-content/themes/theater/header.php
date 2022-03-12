<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>>"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Большой театр</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<?php wp_head() ?>

</head>
<body>
<section class="greeting" id="greeting">
    <div class="greeting__layer"></div>
    <div class="mobile-menu">
        <div class="mobile-menu__close"></div>
        <nav class="mobile-menu__nav">
            <a href="/" class="mobile-menu__item"><?= carbon_get_theme_option( 'link_title_greeting' ); ?></a>
            <a href="#about" class="mobile-menu__item"><?= carbon_get_theme_option( 'link_title_about' ); ?></a>
            <a href="#products" class="mobile-menu__item"><?= carbon_get_theme_option( 'link_title_products' ); ?></a>
            <a href="#partners" class="mobile-menu__item"><?= carbon_get_theme_option( 'link_title_partners' ); ?></a>
            <a href="#join" class="mobile-menu__item"><?= carbon_get_theme_option( 'link_title_join' ); ?></a>
        </nav>

        <div class="mobile-menu__social">
	        <? if ( carbon_get_theme_option( 'link_fb' ) ) { ?>
                <a href="<?= carbon_get_theme_option( 'link_fb' ) ?>" class="mobile-menu__link">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/facebook.svg" alt=""/>
                </a>
	        <? } ?>

	        <? if ( carbon_get_theme_option( 'link_inst' ) ) { ?>
                <a href="<?= carbon_get_theme_option( 'link_inst' ) ?>" class="mobile-menu__link">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/instagram.svg" alt=""/>
                </a>
	        <? } ?>

	        <? if ( carbon_get_theme_option( 'link_yt' ) ) { ?>
                <a href="<?= carbon_get_theme_option( 'link_yt' ) ?>" class="mobile-menu__link">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/youtube.svg" alt=""/>
                </a>
	        <? } ?>

	        <? if ( carbon_get_theme_option( 'link_vk' ) ) { ?>
                <a href="<?= carbon_get_theme_option( 'link_vk' ) ?>" class="mobile-menu__link">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/vk.svg" alt=""/>
                </a>
	        <? } ?>
<!--            <a href="#" class="mobile-menu__link">-->
            <!--                <img src="-->
	        <?php //bloginfo( 'template_url' ); ?><!--/assets/icons/social/facebook.svg" alt=""/>-->
            <!--            </a>-->
            <!--            <a href="#" class="mobile-menu__link">-->
            <!--                <img src="-->
	        <?php //bloginfo( 'template_url' ); ?><!--/assets/icons/social/instagram.svg" alt=""/>-->
            <!--            </a>-->
            <!--            <a href="#" class="mobile-menu__link">-->
            <!--                <img src="-->
	        <?php //bloginfo( 'template_url' ); ?><!--/assets/icons/social/youtube.svg" alt=""/>-->
            <!--            </a>-->
            <!--            <a href="#" class="mobile-menu__link">-->
            <!--                <img src="-->
	        <?php //bloginfo( 'template_url' ); ?><!--/assets/icons/social/vk.svg" alt=""/>-->
            <!--            </a>-->
        </div>
    </div>

    <div class="container">
        <header class="header">
            <div class="header__burger"></div>
            <nav class="menu">
                <a href="/" class="menu__item"><?= carbon_get_theme_option( 'link_title_greeting' ); ?></a>
                <a href="#about" class="menu__item"><?= carbon_get_theme_option( 'link_title_about' ); ?></a>
                <a href="#products" class="menu__item"><?= carbon_get_theme_option( 'link_title_products' ); ?></a>
                <a href="#partners" class="menu__item"><?= carbon_get_theme_option( 'link_title_partners' ); ?></a>
                <a href="#join" class="menu__item"><?= carbon_get_theme_option( 'link_title_join' ); ?></a>
            </nav>
            <a href="tel:<?= carbon_get_theme_option( 'phone' ); ?>" class="header__phone"><?= carbon_get_theme_option( 'phone' ); ?></a>
        </header>
    </div>

    <div class="container greeting__content">
        <h1 class="greeting__title"><?= carbon_get_theme_option( 'greeting_title' ); ?></h1>
        <p class="greeting__info">
			<?= carbon_get_theme_option( 'greeting_text' ); ?>
        </p>
        <a class="button greeting__button" href="#">АФИША</a>

        <div class="poster">
			<?php
			$posters = carbon_get_theme_option( 'greeting_posters' );
			foreach ( $posters as $poster ) { ?>
                <img class="poster__image" src="<?= wp_get_attachment_image_url( $poster, 'full' ) ?>" alt=""/>
			<? } ?>

            <div id="posterPrev" class="poster__button poster__button--prev">
                <svg width="41" height="16" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            class="poster__arrow"
                            d="M0.292892 7.2929C-0.0976296 7.68342 -0.0976295 8.31659 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41422 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928935C7.68054 0.538411 7.04738 0.538411 6.65685 0.928935L0.292892 7.2929ZM41 7L1 7L1 9L41 9L41 7Z"
                    />
                </svg>
                <span class="poster__button-text">пред</span>
            </div>

            <div id="posterNext" class="poster__button poster__button--next">
                <svg width="41" height="16" viewBox="0 0 41 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                            class="poster__arrow"
                            d="M40.7071 8.70711C41.0976 8.31659 41.0976 7.68342 40.7071 7.2929L34.3431 0.928938C33.9526 0.538414 33.3195 0.538414 32.9289 0.928938C32.5384 1.31946 32.5384 1.95263 32.9289 2.34315L38.5858 8.00001L32.9289 13.6569C32.5384 14.0474 32.5384 14.6805 32.9289 15.0711C33.3195 15.4616 33.9526 15.4616 34.3431 15.0711L40.7071 8.70711ZM-1.74846e-07 9L40 9.00001L40 7.00001L1.74846e-07 7L-1.74846e-07 9Z"
                    />
                </svg>
                <span class="poster__button-text">след</span>
            </div>
        </div>
    </div>

    <aside class="social">
        <span class="social__text">Социальные сети</span>
        <div class="social__separator"></div>

		<? if ( carbon_get_theme_option( 'link_fb' ) ) { ?>
            <a href="<?= carbon_get_theme_option( 'link_fb' ) ?>" class="social__icon">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/facebook.svg" alt=""/>
            </a>
		<? } ?>

		<? if ( carbon_get_theme_option( 'link_inst' ) ) { ?>
            <a href="<?= carbon_get_theme_option( 'link_inst' ) ?>" class="social__icon">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/instagram.svg" alt=""/>
            </a>
		<? } ?>

		<? if ( carbon_get_theme_option( 'link_yt' ) ) { ?>
            <a href="<?= carbon_get_theme_option( 'link_yt' ) ?>" class="social__icon">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/youtube.svg" alt=""/>
            </a>
		<? } ?>

		<? if ( carbon_get_theme_option( 'link_vk' ) ) { ?>
            <a href="<?= carbon_get_theme_option( 'link_vk' ) ?>" class="social__icon">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/social/vk.svg" alt=""/>
            </a>
		<? } ?>
    </aside>
</section>