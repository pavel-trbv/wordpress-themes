<!DOCTYPE html>
<html <? language_attributes(); ?> class="no-js">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="shortcut icon" href="<? bloginfo( 'template_url' ); ?>/assets/images/favicon.png"/>
    <meta name="author" content="codepixer"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta charset="<? bloginfo( 'charset' ); ?>>"/>
    <title>Pretty - <?= is_home() ? 'Главная' : the_title() ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<? wp_head() ?>
</head>
<body>

<? if ( is_home() ): ?>
    <div class="hero-wrap js-fullheight"
         style="background-image: url('<?= wp_get_attachment_image_url( carbon_get_theme_option( 'pretty_preview_image' ), 'full' ) ?>');"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                 data-scrollax-parent="true">
                <div class="col-md-8 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <div class="icon">
                        <a href="/" class="logo">
                            <span class="flaticon-flower"></span>
                            <h1><?= carbon_get_theme_option( 'pretty_preview_name' ); ?></h1>
                        </a>
                    </div>
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
	                    <?= carbon_get_theme_option( 'pretty_preview_title' ); ?>
                    </h1>

                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="https://vimeo.com/45830194" class="btn btn-white btn-outline-white px-4 py-3">
	                        <?= carbon_get_theme_option( 'pretty_preview_button' ); ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
<? endif; ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><?= carbon_get_theme_option( 'pretty_menu_name' ); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span>
            Меню
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a href="index.html" class="nav-link"><?= carbon_get_theme_option( 'pretty_menu_home' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="about.html" class="nav-link"><?= carbon_get_theme_option( 'pretty_menu_about' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="/#services" class="nav-link"><?= carbon_get_theme_option( 'pretty_menu_services' ); ?></a>
                </li>
                <li class="nav-item">
                    <a href="/#work" class="nav-link"><?= carbon_get_theme_option( 'pretty_menu_work' ); ?></a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a href="blog.html" class="nav-link">--><?//= carbon_get_theme_option( 'pretty_menu_blog' ); ?><!--</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a href="/#contacts" class="nav-link"><?= carbon_get_theme_option( 'pretty_menu_contacts' ); ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>