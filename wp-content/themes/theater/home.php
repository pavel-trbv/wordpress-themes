<?php get_header() ?>

    <section class="about" id="about">
        <div class="container">
            <h2 class="block-title">
                <span class="secondary">
                    <?= explode( ' ', carbon_get_theme_option( 'about_title' ) )[0]; ?>
                </span>
				<?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'about_title' ) ), 1 ) ); ?>
            </h2>

            <h3 class="about__subtitle">
				<?= carbon_get_theme_option( 'about_subtitle1' ); ?>
            </h3>
            <p class="about__text">
				<?= carbon_get_theme_option( 'about_text' ); ?>
            </p>

            <h3 class="about__subtitle">
				<?= carbon_get_theme_option( 'about_subtitle2' ); ?>
            </h3>
            <div class="props">
                <div class="props__item">
                    <img class="props__icon" src="<?php bloginfo( 'template_url' ); ?>/assets/icons/chair.svg" alt=""/>
                    <span class="props__text">
                        <span class="secondary">
                            <?= explode( ' ', carbon_get_theme_option( 'about_stat1' ) )[0]; ?>
                        </span>
				        <?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'about_stat1' ) ), 1 ) ); ?>
                    </span>
                </div>
                <div class="props__item">
                    <img class="props__icon" src="<?php bloginfo( 'template_url' ); ?>/assets/icons/theater.svg"
                         alt=""/>
                    <span class="props__text">
                        <span class="secondary">
                            <?= explode( ' ', carbon_get_theme_option( 'about_stat2' ) )[0]; ?>
                        </span>
				        <?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'about_stat2' ) ), 1 ) ); ?>
                    </span>
                </div>
            </div>

            <img class="about__image"
                 src="<?= wp_get_attachment_image_url( carbon_get_theme_option( 'about_image' ), 'full' ) ?>" alt=""/>
        </div>
    </section>

    <section class="products" id="products">
        <div class="container">
            <h2 class="block-title">
                <span class="secondary">
                    <?= explode( ' ', carbon_get_theme_option( 'products_title' ) )[0]; ?>
                </span>
				<?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'products_title' ) ), 1 ) ); ?>
            </h2>
            <div class="products__carousel">
				<?php
				$products = carbon_get_theme_option( 'products_list' );
				foreach ( $products as $product ) { ?>
                    <div class="products__item">
                        <span class="products__title"><?= $product['products_title']; ?></span>
                        <span class="products__date"><?= $product['products_note']; ?></span>
                        <img class="products__image"
                             src="<?= wp_get_attachment_image_url( $product['products_image'], 'full' ); ?>"
                             alt=""/>
                    </div>
				<? } ?>
            </div>
        </div>
    </section>

    <section class="deserts" id="deserts">
        <div class="deserts__years">
            <span>2020</span>
            <span>2021</span>
            <span>2022</span>
        </div>

        <div class="deserts__text">
            <div class="deserts__stars">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/star.svg" alt=""/>
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/star.svg" alt=""/>
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/star.svg" alt=""/>
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/star.svg" alt=""/>
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/icons/star.svg" alt=""/>
            </div>
            <span class="deserts__desc">
                <?= carbon_get_theme_option( 'deserts_text' ); ?>
            </span>
        </div>
    </section>

    <section class="partners" id="partners">
        <div class="container">
            <h2 class="block-title">
                <span class="secondary">
                    <?= explode( ' ', carbon_get_theme_option( 'partners_title' ) )[0]; ?>
                </span>
				<?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'partners_title' ) ), 1 ) ); ?>
            </h2>
            <div class="partners__list">
				<?php
				$partners = carbon_get_theme_option( 'partners_list' );
				foreach ( $partners as $partner ) { ?>
                    <img class="partners__item" src="<?= wp_get_attachment_image_url( $partner, 'full' ) ?>" alt=""/>
				<? } ?>
            </div>
        </div>
    </section>

    <section class="join" id="join">
        <div class="container">
            <h2 class="block-title">
                <span class="secondary">
                    <?= explode( ' ', carbon_get_theme_option( 'join_title' ) )[0]; ?>
                </span>
				<?= implode( ' ', array_slice( explode( ' ', carbon_get_theme_option( 'join_title' ) ), 1 ) ); ?>
            </h2>
            <div class="join__form">
				<?= do_shortcode( '[contact-form-7 id="23" title="Contact form"]' ); ?>
            </div>

            <div class="join__contacts">
                <a href="tel:+7 495 123-45-67" class="join__contact"><?= carbon_get_theme_option( 'phone' ); ?></a>
                <span class="join__contact"><?= carbon_get_theme_option( 'email' ); ?></span>

                <a href="tel:+7 495 123-45-67" class="join__contact"><?= carbon_get_theme_option( 'phone' ); ?></a>
                <span class="join__contact"><?= carbon_get_theme_option( 'address' ); ?></span>
            </div>
        </div>
    </section>

<?php get_footer() ?>