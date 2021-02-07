<?php  // <~ don't add me in

add_shortcode('woo_cart_but', 'woo_cart_but');
/**
 * Create Shortcode for WooCommerce Cart Menu Item
 */
function woo_cart_but()
{
    ob_start();

    $cart_count = WC()->cart->cart_contents_count; // Set variable for cart item count
    $cart_url = wc_get_cart_url();  // Set Cart URL

?>

    <a href="<?php echo $cart_url; ?>">
        <div class="header__cart">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40.81 37.17">
                <path d="M40.46,11.39a1.52,1.52,0,0,0-1.15-.54H33.44L27.62.75A1.5,1.5,0,0,0,25,2.25l5,8.6H10.83l5-8.6a1.5,1.5,0,1,0-2.6-1.5L7.37,10.85H1.5a1.52,1.52,0,0,0-1.15.54A1.53,1.53,0,0,0,0,12.61l1,5.76A1.51,1.51,0,0,0,2.5,19.62h.6L6.52,36A1.51,1.51,0,0,0,8,37.17H32.82A1.5,1.5,0,0,0,34.29,36l3.43-16.35h.59a1.5,1.5,0,0,0,1.48-1.25l1-5.76A1.5,1.5,0,0,0,40.46,11.39Zm-2.93,2.46-.48,2.77H3.76l-.48-2.77ZM31.6,34.17H9.21L6.16,19.61H34.65Z" />
            </svg>
            <?php
            if ($cart_count > 0) {
            ?>
                <span class="header__cart__count"><?php echo $cart_count; ?></span>
            <?php
            }
            ?>
        </div>
    </a>
<?php

    return ob_get_clean();
}

add_filter('woocommerce_add_to_cart_fragments', 'woo_cart_but_count');
/**
 * Add AJAX Shortcode when cart contents update
 */
function woo_cart_but_count($fragments)
{

    ob_start();

    $cart_count = WC()->cart->cart_contents_count;
    $cart_url = wc_get_cart_url();

?>
    <a class="cart-contents menu-item" href="<?php echo $cart_url; ?>" title="<?php _e('View your shopping cart'); ?>">
        <?php
        if ($cart_count > 0) {
        ?>
            <span class="cart-contents-count"><?php echo $cart_count; ?></span>
        <?php
        }
        ?></a>
<?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}


/* add_filter('wc_add_to_cart_message', 'handler_function_name', 10, 2);
function handler_function_name($message, $product_id) {
    $product = wc_get_product($product_id);
$productName = $product->name;
    return "La montre " . $productName . " a été ajoutée à votre panier !";
} */