<?php get_header() ?>

<!-- start banner Area -->
<section class="banner-area" id="home">
    <div class="container">
        <div
                class="row fullscreen d-flex align-items-center justify-content-start"
        >
            <div class="banner-content col-lg-7">
                <h6 class="text-white text-uppercase">
					<?= carbon_get_theme_option( 'coffee_home_subtitle' ); ?>
                </h6>
                <h1>
					<?= carbon_get_theme_option( 'coffee_home_title' ); ?>
                </h1>
                <a href="/#coffee" class="primary-btn text-uppercase scrollto">
					<?= carbon_get_theme_option( 'coffee_home_button' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start video-sec Area -->
<section class="video-sec-area pb-100 pt-40" id="about">
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

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">
						<?= carbon_get_theme_option( 'coffee_coffee_title' ); ?>
                    </h1>
                    <p>
						<?= carbon_get_theme_option( 'coffee_coffee_subtitle' ); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
			<?php
			$products = carbon_get_theme_option( 'coffee_coffee_list' );
			foreach ( $products as $product ) { ?>
                <div class="col-lg-4">
                    <div class="single-menu">
                        <div class="title-div justify-content-between d-flex">
                            <h4><?= $product['coffee_product_title']; ?></h4>
                            <p class="price float-right"><?= $product['coffee_product_price']; ?> ₽</p>
                        </div>
                        <p>
							<?= $product['coffee_product_desc']; ?>
                        </p>
                    </div>
                </div>
			<? } ?>
        </div>
    </div>
</section>
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">
						<?= carbon_get_theme_option( 'coffee_gallery_title' ); ?>
                    </h1>
                    <p>
						<?= carbon_get_theme_option( 'coffee_gallery_subtitle' ); ?>
                    </p>
                </div>
            </div>
        </div>

		<?php
		$photo = carbon_get_theme_option( 'coffee_gallery_list' );
		for ( $i = 0; $i < ceil( count( $photo ) / 5 ); $i ++ ) {
			$k = $i * 5;
			?>
            <div class="row">
                <div class="col-lg-4">
                    <a href="<?= wp_get_attachment_image_url( $photo[ $k + 0 ], 'full' ) ?>" class="img-pop-home">
                        <img class="img-fluid" src="<?= wp_get_attachment_image_url( $photo[ $k + 0 ], 'full' ) ?>"
                             alt=""/>
                    </a>
                    <a href="<?= wp_get_attachment_image_url( $photo[ $k + 1 ], 'full' ) ?>" class="img-pop-home">
                        <img class="img-fluid" src="<?= wp_get_attachment_image_url( $photo[ $k + 1 ], 'full' ) ?>"
                             alt=""/>
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="<?= wp_get_attachment_image_url( $photo[ $k + 2 ], 'full' ) ?>" class="img-pop-home">
                        <img class="img-fluid" src="<?= wp_get_attachment_image_url( $photo[ $k + 2 ], 'full' ) ?>"
                             alt=""/>
                    </a>
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="<?= wp_get_attachment_image_url( $photo[ $k + 3 ], 'full' ) ?>"
                               class="img-pop-home">
                                <img class="img-fluid"
                                     src="<?= wp_get_attachment_image_url( $photo[ $k + 3 ], 'full' ) ?>"
                                     alt=""/>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <a href="<?= wp_get_attachment_image_url( $photo[ $k + 4 ], 'full' ) ?>"
                               class="img-pop-home">
                                <img class="img-fluid"
                                     src="<?= wp_get_attachment_image_url( $photo[ $k + 4 ], 'full' ) ?>"
                                     alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
		<? } ?>
    </div>
</section>
<!-- End gallery Area -->

<!-- Start review Area -->
<section class="review-area section-gap" id="review">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">
						<?= carbon_get_theme_option( 'coffee_review_title' ); ?>
                    </h1>
                    <p>
						<?= carbon_get_theme_option( 'coffee_review_subtitle' ); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
			<?php
			$reviews = carbon_get_theme_option( 'coffee_review_list' );
			foreach ( $reviews as $review ) { ?>
                <div class="col-lg-6 col-md-6 single-review">
                    <img src="<?= wp_get_attachment_image_url( $review['coffee_review_item_image'], 'full' ); ?>"
                         alt=""/>
                    <div class="title d-flex flex-row">
                        <h4><?= $review['coffee_review_item_title']; ?></h4>
                        <div class="star">
							<? for ( $i = 0; $i < $review['coffee_review_item_rating']; $i ++ ): ?>
                                <span class="fa fa-star checked"></span>
							<? endfor; ?>
							<? for ( $i = 0; $i < 5 - $review['coffee_review_item_rating']; $i ++ ): ?>
                                <span class="fa fa-star"></span>
							<? endfor; ?>
                        </div>
                    </div>
                    <p>
						<?= $review['coffee_review_item_desc']; ?>
                    </p>
                </div>
			<? } ?>
        </div>
        <div class="row counter-row">
			<?php
			$counts = carbon_get_theme_option( 'coffee_review_count' );
			foreach ( $counts as $count ): ?>
                <div class="col-lg-3 col-md-6 single-counter">
                    <h1 class="counter"><?= $count['coffee_review_count_value']; ?></h1>
                    <p><?= $count['coffee_review_count_title']; ?></p>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</section>
<!-- End review Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">
						<?= carbon_get_theme_option( 'coffee_blog_title' ); ?>
                    </h1>
                    <p>
						<?= carbon_get_theme_option( 'coffee_blog_subtitle' ); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
			<? if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-6 col-md-6 mb-4 single-blog">
                        <img class="img-fluid"
                             src="<?= wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>" alt=""/>
						<? the_tags( '<ul class="post-tags"><li>', '</li><li>', '</li></ul>' ); ?>

                        <a href="<? the_permalink(); ?>"><h4><? the_title(); ?></h4></a>
						<? the_excerpt(); ?>
                        <p class="post-date">
							<? the_date(); ?>
                        </p>
                    </div>
				<? endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- End blog Area -->

<?php get_footer() ?>
