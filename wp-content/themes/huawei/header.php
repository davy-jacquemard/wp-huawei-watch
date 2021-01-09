<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>

    <?php wp_head(); ?>

</head>


<?php if ((get_field('gamme_settings')) && (get_field('gamme_settings')['theme'] == 'black')) : 
    $theme = 'on-dark on-dark-bg';
    else :
        $theme = 'white';
endif; ?>

<body <?php body_class($theme); ?>>

<?php wp_body_open(); ?>

<header class="header on-white" js-header>
    <div class="container">
        <div class="w-header">
            <div class="header__logo">
                <a href="<?php echo get_site_url() ?>">
                    <img src="<?php echo get_template_directory_uri() . '/static/img/logo/logo-v1.svg' ?>" alt="Logo Huawei">
                </a>

            </div>
            <div class="header__right">
                <div class="header__cart">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.81 37.17">
                        <path d="M40.46,11.39a1.52,1.52,0,0,0-1.15-.54H33.44L27.62.75A1.5,1.5,0,0,0,25,2.25l5,8.6H10.83l5-8.6a1.5,1.5,0,1,0-2.6-1.5L7.37,10.85H1.5a1.52,1.52,0,0,0-1.15.54A1.53,1.53,0,0,0,0,12.61l1,5.76A1.51,1.51,0,0,0,2.5,19.62h.6L6.52,36A1.51,1.51,0,0,0,8,37.17H32.82A1.5,1.5,0,0,0,34.29,36l3.43-16.35h.59a1.5,1.5,0,0,0,1.48-1.25l1-5.76A1.5,1.5,0,0,0,40.46,11.39Zm-2.93,2.46-.48,2.77H3.76l-.48-2.77ZM31.6,34.17H9.21L6.16,19.61H34.65Z"/>
                    </svg>
                </div>
                <div class="header__open-menu" js-menu-open>
                    <img src="<?php echo get_template_directory_uri() . '/static/img/icons/menu-hamburger.svg' ?>" alt="Icône menu hamburger"/>
                </div>
                <div class="header__close-menu" js-menu-close>
                    <img src="<?php echo get_template_directory_uri() . '/static/img/icons/menu-cross.svg' ?>" alt="Icône croix"/>
                </div>
            </div>
        </div>


    </div>
    <div class="header__menu" js-menu-content>
        <div class="container">
            <div class="row">
                <div class="w-menu">
                    <nav class="header__menu__nav menu" id="mainNav" aria-label="Menu principal">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => 'menu__list',
                            'depth' => 1,
                            'walker' => new WPDocs_Walker_Nav_Menu()
                        ));
                        ?>
                    </nav>
                    <div class="header__menu__footer footer-social">
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
        </div>
        <div class="header__menu__watch header__menu__watch--pro">
            <h2 class="h2">GT2 Pro</h2>
            <a href="" class="full-link"></a>
        </div>
        <div class="header__menu__watch header__menu__watch--classic">
            <h2 class="h2">GT2</h2>
            <a href="" class="full-link"></a>
        </div>

    </div>

</header>
