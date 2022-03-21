<?php get_header() ?>

<section class="generic-banner relative">
    <div class="container">
        <div class="row height align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="generic-banner-content">
                    <h2 class="text-white"><? the_title(); ?></h2>
					<? the_excerpt(); ?>
                    <p class="banner-post-date"><?= get_the_date(); ?></p>
	                <? the_tags( '<ul class="banner-post-tags"><li>', '</li><li>', '</li></ul>' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="main-wrapper">
    <!-- Start video-sec Area -->
    <section class="video-sec-area pt-100" id="about">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 video-right justify-content-center align-items-center d-flex"
                     style="background-image: url('<?= wp_get_attachment_image_url( carbon_get_theme_option( 'coffee_about_preview' ), 'full' ) ?>')">
                    <div class="overlay overlay-bg"></div>
                    <a class="play-btn" href="<?= carbon_get_theme_option( 'coffee_about_video' ); ?>">
                        <img class="img-fluid" src="<? bloginfo( 'template_url' ); ?>/assets/img/play-icon.png" alt=""/>
                    </a>
                </div>
                <div class="col-lg-6 video-left">
                    <h6><?= carbon_get_theme_option( 'coffee_about_subtitle' ); ?></h6>
                    <h1>
						<?= carbon_get_theme_option( 'coffee_about_title' ); ?>
                    </h1>
                    <p>
                        <span><?= carbon_get_theme_option( 'coffee_about_p1' ); ?></span>
                    </p>
                    <p>
						<?= carbon_get_theme_option( 'coffee_about_p2' ); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End video-sec Area -->

    <section class="about-generic-area section-gap">
        <div class="container border-top-generic">
            <h3 class="about-title mb-30"><?= the_title() ?></h3>
            <div class="row">
                <div class="col-lg-12">
					<? the_content(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer() ?>
