<?php


add_filter('wc_add_to_cart_message', 'update_atc_message', 10, 2);
function update_atc_message($message, $product_id) {
    $watchTitle = get_the_title($product_id);
    return "'" . $watchTitle . "' à été ajouté à votre panier !" ;
}



add_filter('gettext', 'wpse_124400_woomessages', 10, 3);


function wpse_124400_woomessages($translation, $text, $domain) {
    if ($domain == 'woocommerce') {
        if ($text == 'Cart updated.') {
            $translation = 'Le panier a été mis à jour';
        }
    }

    return $translation;
}


add_filter( 'woocommerce_coupon_message', 'filter_woocommerce_coupon_message', 10, 3 );
function filter_woocommerce_coupon_message( $msg, $msg_code, $coupon ) {
    // $applied_coupons = WC()->cart->get_applied_coupons(); // Get applied coupons

    if( $msg === __( 'Coupon code applied successfully.', 'woocommerce' ) ) {
        $msg = sprintf(
            __( "Le code promo a été appliqué avec succès !", "woocommerce" )
        );
    }

    return $msg;
}


add_filter( 'woocommerce_form_field', 'bbloomer_checkout_fields_in_label_error', 10, 4 );

function bbloomer_checkout_fields_in_label_error( $field, $key, $args, $value ) {
    if ( strpos( $field, '</label>' ) !== false && $args['required'] ) {
        $error = '<span class="error" style="display:none">';
        $error .= sprintf( __( '%s is a required field.', 'woocommerce' ), $args['label'] );
        $error .= '</span>';
        $field = substr_replace( $field, $error, strpos( $field, '</label>' ), 0);
    }
    return $field;
}