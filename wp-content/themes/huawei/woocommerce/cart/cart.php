<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined('ABSPATH') || exit; ?>
<div class="container">
    <?php do_action('woocommerce_before_cart'); ?>
    <div class="cart">
        <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
            <?php do_action('woocommerce_before_cart_table'); ?>
            <div class="cart__header">
                <h1 class="cart__title h1">Mon panier</h1>
            </div>

            <div class="row cart__row">

                <ul class="cart__products">
                    <?php do_action('woocommerce_before_cart_contents'); ?>
                    <?php
                    foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                        $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                        $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);
                        if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) :
                            $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
                    ?>

                            <li class="woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">


                                <div class="cartProduct">
                                    <div class="row cartProduct__row">


                                        <div class="cartProduct__img">
                                            <?php
                                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                                            if (!$product_permalink) {
                                                echo $thumbnail; // PHPCS: XSS ok.
                                            } else {
                                                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                                            }
                                            ?>
                                        </div>


                                        <div class="cartProduct__content">

                                            <h3 class="cartProduct__title h3">
                                                <?php
                                                if (!$product_permalink) {
                                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key) . '&nbsp;');
                                                } else {
                                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_title()), $cart_item, $cart_item_key));
                                                }
                                                do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);
                                                ?>
                                            </h3>

                                            <?php
                                            // Meta data.
                                            echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.



                                            // Backorder notification.
                                            if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                                echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                            }
                                            ?>

                                            <div class="cartProduct__quantity" data-title="<?php esc_attr_e('Quantity', 'woocommerce'); ?>">
                                                <?php
                                                if ($_product->is_sold_individually()) {
                                                    $product_quantity = sprintf('1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
                                                } else {
                                                    $product_quantity = woocommerce_quantity_input(
                                                        array(
                                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                                            'input_value'  => $cart_item['quantity'],
                                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                                            'min_value'    => '0',
                                                            'product_name' => $_product->get_name(),
                                                        ),
                                                        $_product,
                                                        false
                                                    );
                                                }

                                                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item); // PHPCS: XSS ok.
                                                ?>
                                            </div>

                                            <h5 class="cartProduct__price h5" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
                                                <?php
                                                echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
                                                ?>
                                            </h5>

                                            <p class="p cartProduct__delivery">En stock, livraison sous 2 à 3 jours.</p>

                                        </div>

                                        <?php
                                        echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                            'woocommerce_cart_item_remove_link',
                                            sprintf(
                                                '<a href="%s" class="cartProduct__delete icon-close p--small" aria-label="%s" data-product_id="%s" data-product_sku="%s">Supprimer</a>',
                                                esc_url(wc_get_cart_remove_url($cart_item_key)),
                                                esc_html__('Remove this item', 'woocommerce'),
                                                esc_attr($product_id),
                                                esc_attr($_product->get_sku())
                                            ),
                                            $cart_item_key
                                        );
                                        ?>

                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php do_action('woocommerce_cart_contents'); ?>
                </ul>


                <div class="cart__summary summary">
                    <div class="summary__content">


                        <?php if (wc_coupons_enabled()) { ?>
                            <div class="coupon">
                                <label for="coupon_code" class="p"><?php esc_html_e('Avez-vous un code promo ?', 'woocommerce'); ?></label> <input type="text" name="coupon_code" class="input-text p" id="coupon_code" value="" placeholder="<?php esc_attr_e('Code promo', 'woocommerce'); ?>" /> <button type="submit" class="btn btn--secondary" name="apply_coupon" value="<?php esc_attr_e('Appliquer', 'woocommerce'); ?>"><?php esc_attr_e('Appliquer', 'woocommerce'); ?></button>
                                <?php do_action('woocommerce_cart_coupon'); ?>
                            </div>
                        <?php } ?>


                        <?php do_action('woocommerce_cart_actions'); ?>

                        <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>

                        <?php do_action('woocommerce_after_cart_contents'); ?>

                        <?php do_action('woocommerce_before_cart_collaterals'); ?>
                        <?php
                        /**
                         * Cart collaterals hook.
                         *
                         * @hooked woocommerce_cross_sell_display
                         * @hooked woocommerce_cart_totals - 10
                         */
                        do_action('woocommerce_cart_collaterals');
                        ?>
                    </div>

                </div>
            </div>
            <button type="submit" class="cart__update-btn button button__update__cart" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>
            <?php do_action('woocommerce_after_cart_table'); ?>
        </form>
    </div>
    <?php do_action('woocommerce_after_cart'); ?>
</div>