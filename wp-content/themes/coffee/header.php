<!DOCTYPE html>
<html <? language_attributes(); ?> class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="<? bloginfo( 'template_url' ); ?>/assets/img/favicon.png"/>
    <meta name="author" content="codepixer"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta charset="<? bloginfo( 'charset' ); ?>>"/>
    <title><? bloginfo('name') ?> - <?= is_home() ? 'Главная' : the_title() ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<? wp_head() ?>
</head>
<body>
<header id="header" id="home">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-sm-4 col-8 header-top-right no-padding">
                    <ul>
                        <li><?= carbon_get_theme_option( 'coffee_hours_1' ); ?></li>
                        <li><?= carbon_get_theme_option( 'coffee_hours_2' ); ?></li>
                        <li>
                            <a href="tel:<?= carbon_get_theme_option( 'coffee_hours_2' ); ?>">
								<?= carbon_get_theme_option( 'coffee_phone' ); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="/">
                    <img src="<?= wp_get_attachment_image_url( carbon_get_theme_option('coffee_logo'), 'full' ); ?>" alt="" title=""/>
                </a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active">
                        <a href="/#home"><?= carbon_get_theme_option( 'coffee_menu_home' ); ?></a>
                    </li>
                    <li>
                        <a href="/#about"><?= carbon_get_theme_option( 'coffee_menu_about' ); ?></a>
                    </li>
                    <li>
                        <a href="/#coffee"><?= carbon_get_theme_option( 'coffee_menu_coffee' ); ?></a>
                    </li>
                    <li>
                        <a href="/#gallery"><?= carbon_get_theme_option( 'coffee_menu_gallery' ); ?></a>
                    </li>
                    <li>
                        <a href="/#review"><?= carbon_get_theme_option( 'coffee_menu_review' ); ?></a>
                    </li>
                    <li>
                        <a href="/#blog"><?= carbon_get_theme_option( 'coffee_menu_blog' ); ?></a>
                    </li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </div>
</header>