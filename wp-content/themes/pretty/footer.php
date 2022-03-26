<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">О нас</h2>
                    <p>
	                    <?= carbon_get_theme_option( 'pretty_footer_about' ); ?>
                    </p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate">
                            <a href="<?= carbon_get_theme_option('pretty_footer_twitter') ?>"><span class="icon-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="<?= carbon_get_theme_option('pretty_footer_facebook') ?>"><span class="icon-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="<?= carbon_get_theme_option('pretty_footer_instagram') ?>"><span class="icon-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Хотите задать вопрос?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li>
                                <span class="icon icon-map-marker"></span>
                                <span class="text address"><?= carbon_get_theme_option( 'pretty_contacts_address' ); ?></span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon icon-phone"></span>
                                    <span class="text"><?= carbon_get_theme_option( 'pretty_contacts_phone' ); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon icon-envelope"></span>
                                    <span class="text"><?= carbon_get_theme_option( 'pretty_contacts_email' ); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    Все права защищены
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>
</html>