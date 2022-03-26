<?php get_header() ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 pl-md-5 ftco-animate">
                    <h2 class="mb-4"><? the_title(); ?></h2>
                    <? the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><?= carbon_get_theme_option( 'pretty_stuff_title' ); ?></h2>
                    <p>
						<?= carbon_get_theme_option( 'pretty_stuff_desc' ); ?>
                    </p>
                </div>
            </div>
            <div class="row">
				<?php
				$masters = carbon_get_theme_option( 'pretty_stuff_list' );
				foreach ( $masters as $master ): ?>
                    <div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
                        <div class="staff">
                            <div class="img mb-4"
                                 style="background-image: url(<?= wp_get_attachment_image_url( $master['pretty_stuff_photo'], 'full' ) ?>);"></div>
                            <div class="info text-center">
                                <h3><a href="teacher-single.html"><?= $master['pretty_stuff_name'] ?></a></h3>
                                <span class="position"><?= $master['pretty_stuff_position'] ?></span>
                                <div class="text">
                                    <p><?= $master['pretty_stuff_desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
				<? endforeach; ?>
            </div>
        </div>
    </section>
<?php get_footer() ?>