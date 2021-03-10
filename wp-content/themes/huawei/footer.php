<footer class="footer on-dark on-dark-bg">
    <div class="container">
        <div class="row">
            <div class="footer-top">
                <div class="footer-top__contact">
                    <h2 class="h2 footer-top__contact__title">Besoin d'aide ?</h2>
                    <p class="p">Nous sommes à votre écoute ! <a href="mailto:watch@huawei.com"><span class="link">Contactez-nous</span></a></p>
                    <img class="logo-footer footer-top__contact__logo" src="<?php echo get_template_directory_uri() . '/static/img/logo/logo-v1.svg' ?>" alt="logo Huawei">
                </div>
                <div class="footer-top__menu">
                    <div class="headline footer-top__menu__title">Nos montres</div>
                    <ul>
                        <li><a href="<?php echo get_home_url() ?>" class="p">Huawei Watch GT2</a></li>
                        <li><a href="<?php echo get_permalink( get_page_by_path( 'watch-gt2-pro' ) ); ?>" class="p">Huawei Watch GT2 Pro</a></li>
                    </ul>
                </div>
                <div class="footer-top__menu">
                    <div class="headline footer-top__menu__title">Blog</div>
                    <ul>
                        <li><a href="<?php echo get_post_type_archive_link( 'post' ) ?>" class="p">Nos actualités</a></li>
                    </ul>
                </div>
                <div class="footer-top__social footer-social">
                    <div class="headline footer-social__headline">Rejoignez-nous</div>
                    <h3 class="h4 footer-social__title">Suivez-nous sur nos réseaux sociaux</h3>
                    <ul class="footer-social__list">
                        <li><a href="https://www.facebook.com/HuaweiEuropean" rel="nofollow" target="_blank" class="icon-social-facebook footer-icon"></a></li>
                        <li><a href="https://twitter.com/HuaweiFr" rel="nofollow" target="_blank" class="icon-social-twitter footer-icon"></a></li>
                        <li><a href="https://www.instagram.com/huawei/" rel="nofollow" target="_blank" class="icon-social-instagram footer-icon"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer-bottom">
                <div class="footer-bottom__legals">
                    <ul class="footer-bottom__legals__list">
                        <li><a href="<?php echo get_template_directory_uri() . '/mentions-legales' ?>">Mentions légales</a></li>
                        <li><a href="<?php echo get_template_directory_uri() . '/politique-de-confidentialite' ?>">Politique de confidentialité</a></li>
                    </ul>
                </div>
                <div class="footer-bottom__copyright">
                    <p class="p">© 2020 huawei</p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>