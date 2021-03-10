<?php

/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit; ?>

<div class="cart">
    <div class="container">
        <div class="cart__header">
            <h1 class="cart__title h1">Mon panier</h1>
        </div>
        <div class="cart__empty">
            <img src="<?php echo get_template_directory_uri() . '/static/img/panier-vide.png' ?>" alt="Illustration panier vide">
            <h5 class="h5">Votre panier est actuellement vide</h5>
            <p class="p p--bold">Il semble que vous n'ayez pas encore ajouté de montre à votre panier</p>

            <?php
            /*
    * @hooked wc_empty_cart_message - 10
    */


            if (wc_get_page_id('shop') > 0) : ?>
                <div class="return-to-shop">
                    <a class="btn btn--primary btn--big wc-backward" href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('home'))); ?>">
                        <?php
                        /**
                         * Filter "Return To Shop" text.
                         *
                         * @since 4.6.0
                         * @param string $default_text Default text.
                         */
                        echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('Voir nos montres', 'woocommerce')));
                        ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>