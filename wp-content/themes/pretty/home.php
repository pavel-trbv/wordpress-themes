<?php get_header() ?>

<section class="ftco-section" id="services">
    <div class="container">
        <div class="row">
			<?php
			$services = carbon_get_theme_option( 'pretty_services_list' );
			foreach ( $services as $service ): ?>
                <div class="col-md-4 ftco-animate">
                    <div class="media d-block text-center block-6 services">
                        <div class="icon d-flex mb-3">
                            <span class="<?= $service['pretty_services_icon'] ?>"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading"><?= $service['pretty_services_title'] ?></h3>
                            <p>
								<?= $service['pretty_services_desc'] ?>
                            </p>
                        </div>
                    </div>
                </div>
			<? endforeach; ?>
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

<section class="ftco-section ftco-discount img"
         style="background-image: url('<?= wp_get_attachment_image_url( carbon_get_theme_option( 'pretty_promotion_image' ), 'full' ) ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-5 discount ftco-animate">
                <h3><?= carbon_get_theme_option( 'pretty_promotion_subtitle' ); ?></h3>
                <h2 class="mb-4"><?= carbon_get_theme_option( 'pretty_promotion_title' ); ?></h2>
                <p class="mb-4">
					<?= carbon_get_theme_option( 'pretty_promotion_text' ); ?>
                </p>
                <p>
                    <a href="#" class="btn btn-white btn-outline-white px-4 py-3">
						<?= carbon_get_theme_option( 'pretty_promotion_button' ); ?>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section" id="work">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4"><?= carbon_get_theme_option( 'pretty_work_title' ); ?></h2>
                <p>
					<?= carbon_get_theme_option( 'pretty_work_subtitle' ); ?>
                </p>
            </div>
        </div>
        <div class="row">
			<?php
			$works = carbon_get_theme_option( 'pretty_work_list' );
			foreach ( $works as $work ): ?>
                <div class="col-md-4 ftco-animate">
                    <a href="#" class="work-entry">
                        <img src="<?= wp_get_attachment_image_url( $work['pretty_work_photo'], 'full' ) ?>"
                             class="img-fluid" alt="???????????? ????????????">
                        <div class="info d-flex align-items-center">
                            <div>
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-search"></span>
                                </div>
                                <h3><?= $work['pretty_work_caption'] ?></h3>
                            </div>
                        </div>
                    </a>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-partner bg-light">
    <div class="container">
        <div class="row partner justify-content-center">
            <div class="col-md-10">
                <div class="row">
					<?php
					$partners = carbon_get_theme_option( 'pretty_partners_list' );
					foreach ( $partners as $partner ): ?>
                        <div class="col-md-3 ftco-animate">
                            <a href="#" class="partner-entry">
                                <img src="<?= wp_get_attachment_image_url( $partner['pretty_partners_image'], 'full' ) ?>"
                                     class="img-fluid" alt="???????? ????????????????">
                            </a>
                        </div>
					<? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4"><?= carbon_get_theme_option( 'pretty_price_title' ); ?></h2>
                <p>
					<?= carbon_get_theme_option( 'pretty_price_subtitle' ); ?>
                </p>
            </div>
        </div>
        <div class="row">
			<?php
			$prices              = carbon_get_theme_option( 'pretty_price_list' );
			$max_services_length = 0;
			foreach ( $prices as $price ) {
				$length = sizeof( $price['pretty_price_service_list'] );
				if ( $length > $max_services_length ) {
					$max_services_length = $length;
				}
			}

			foreach ( $prices as $price ): ?>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry <?= $price['pretty_price_active'] ? 'active' : '' ?> pb-5 text-center">
                        <div>
                            <h3 class="mb-4"><?= $price['pretty_price_name'] ?></h3>
                            <p>
                                <span class="price"><?= $price['pretty_price_price'] ?> ???</span> <span
                                        class="per">/ <?= $price['pretty_price_unit'] ?></span>
                            </p>
                        </div>
                        <ul>
							<? foreach ( $price['pretty_price_service_list'] as $service ): ?>
                                <li><?= $service['pretty_price_service_name'] ?></li>
							<? endforeach; ?>
							<? for ( $i = 0; $i < $max_services_length - count( $price['pretty_price_service_list'] ); $i ++ ): ?>
                                <li>&nbsp;</li>
							<? endfor; ?>
                        </ul>
                        <p class="button text-center">
                            <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">
								<?= carbon_get_theme_option( 'pretty_price_button' ) ?>
                            </a>
                        </p>
                    </div>
                </div>
			<? endforeach; ?>
        </div>
    </div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter"
         style="background-image: url('<?= wp_get_attachment_image_url( carbon_get_theme_option( 'pretty_count_image' ), 'full' ) ?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
					<?php
					$counts = carbon_get_theme_option( 'pretty_count_list' );
					foreach ( $counts as $count ): ?>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><span class="flaticon-flower"></span></div>
                                    <span><?= $count['pretty_count_title'] ?></span>
                                    <strong class="number" data-number="<?= $count['pretty_count_value'] ?>">0</strong>
                                </div>
                            </div>
                        </div>
					<? endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-appointment" id="contacts">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="appointment-info text-center p-5">
                    <div class="mb-4">
                        <h3 class="mb-3">??????????</h3>
                        <p><?= carbon_get_theme_option( 'pretty_contacts_address' ); ?></p>
                    </div>
                    <div class="mb-4">
                        <h3 class="mb-3">??????????????</h3>
                        <p class="day">
                            <strong><?= carbon_get_theme_option( 'pretty_contacts_phone' ); ?></strong>
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-3">???????? ????????????</h3>
                        <p class="day">
                            <strong><?= carbon_get_theme_option( 'pretty_contacts_days' ); ?></strong>
                        </p>
                        <span><?= carbon_get_theme_option( 'pretty_contacts_hours' ); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 appointment pl-md-5 ftco-animate">
                <h3 class="mb-3">???????????????????? ???? ??????????????????</h3>
                <form action="#" class="appointment-form">
                    <div class="row form-group d-flex">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="??????">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="??????????????">
                        </div>
                    </div>
                    <div class="row form-group d-flex">
                        <div class="col-md-6">
                            <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <input type="text" id="appointment_date" class="form-control" placeholder="????????">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="??????????????">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control"
                                  placeholder="??????????????????????"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="????????????????????" class="btn btn-white btn-outline-white py-3 px-4">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<?php get_footer() ?>
