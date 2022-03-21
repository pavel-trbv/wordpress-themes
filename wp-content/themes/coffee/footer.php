<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>О нас</h6>
                    <p>
                        <?= carbon_get_theme_option('coffee_footer_about'); ?>
                    </p>
                    <p class="footer-text">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Все права защищены
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Подписка на новости</h6>
                    <p>Подпишитесь, чтобы оставаться в курсе</p>
                    <div class="" id="mc_embed_signup">
                        <form
                                target="_blank"
                                novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get"
                                class="form-inline"
                        >
                            <input
                                    class="form-control"
                                    name="EMAIL"
                                    placeholder="Email"
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Email '"
                                    required=""
                                    type="email"
                            />
                            <button class="click-btn btn btn-default">
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </button>
                            <div style="position: absolute; left: -5000px">
                                <input
                                        name="b_36c4fd991d266f23781ded980_aefe40901a"
                                        tabindex="-1"
                                        value=""
                                        type="text"
                                />
                            </div>

                            <div class="info pt-20"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                <div class="single-footer-widget">
                    <h6>Соц. сети</h6>
                    <p>Для связи с нами</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="<?= carbon_get_theme_option('coffee_footer_fb'); ?>"><i class="fa fa-facebook"></i></a>
                        <a href="<?= carbon_get_theme_option('coffee_footer_tw'); ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?= carbon_get_theme_option('coffee_footer_dr'); ?>"><i class="fa fa-dribbble"></i></a>
                        <a href="<?= carbon_get_theme_option('coffee_footer_bh'); ?>"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<?php wp_footer() ?>
</body>
</html>