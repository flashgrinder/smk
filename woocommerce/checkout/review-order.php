<?php
/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;
?>

    <div class="checkout-form__order-table">
        <div class="checkout-form__product-row checkout-form__product-row--first">
            <div class="checkout-form__table-title text text--black-gray text--normal text--w-bold product-name">
                <?php esc_html_e( 'Product', 'woocommerce' ); ?>
            </div>
            <div class="checkout-form__table-title text text--black-gray text--normal text--w-bold right product-total">
                <?php esc_html_e( 'Subtotal', 'woocommerce' ); ?>
            </div>
        </div>
        <?php

            do_action( 'woocommerce_review_order_before_cart_contents' );

            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
        ?>

        <div class="checkout-form__product-row <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
            <div class="checkout-form__product-name text text--black-gray text--normal text--w-regular product-name">
                <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ) . '&nbsp;'; ?> <span class="checkout-form__product-quantity text text--small text--w-bold">х 1</span>
                <?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
            </div>
            <div class="checkout-form__product-price text text--black-gray text--normal text--w-regular right product-total">
                <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
            </div>
        </div>
        <?php
                }
            }

            do_action( 'woocommerce_review_order_after_cart_contents' );

        ?>

        <?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

        <div class="checkout-form__product-row checkout-form__product-row--last">
            <div class="checkout-form__table-title text text--black-gray text--normal text--w-regular">
                <?php esc_html_e( 'Total', 'woocommerce' ); ?>
            </div>
            <div class="checkout-form__table-subtotal text text--black-gray text--normal text--w-bold right cart-subtotal">
                <?php wc_cart_totals_order_total_html(); ?>
            </div>
        </div>
    </div>
    <?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

