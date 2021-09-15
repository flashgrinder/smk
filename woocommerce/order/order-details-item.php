<?php
/**
 * Order Item Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-item.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! apply_filters( 'woocommerce_order_item_visible', true, $item ) ) {
	return;
}
?>

<div class="order-received__product-row <?php echo esc_attr( apply_filters( 'woocommerce_order_item_class', 'woocommerce-table__line-item order_item', $item, $order ) ); ?>">
    <div class="order-received__product-name text text--black-gray text--normal text--w-regular woocommerce-table__product-name product-name">
        <?php

            $is_visible   = $product && $product->is_visible();

            echo wp_kses_post( apply_filters( 'woocommerce_order_item_name', $item->get_name(), $item, $is_visible ) );

            $qty          = $item->get_quantity();
            $refunded_qty = $order->get_qty_refunded_for_item( $item_id );

            if ( $refunded_qty ) {
                $qty_display = '<del>' . esc_html( $qty ) . '</del> <ins>' . esc_html( $qty - ( $refunded_qty * -1 ) ) . '</ins>';
            } else {
                $qty_display = esc_html( $qty );
            }

            echo apply_filters( 'woocommerce_order_item_quantity_html', ' <span class="order-received__product-quantity text text--small text--w-bold product-quantity">' . sprintf( '&times;&nbsp;%s', $qty_display ) . '</span>', $item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

            do_action( 'woocommerce_order_item_meta_start', $item_id, $item, $order, false );

            wc_display_item_meta( $item );

            do_action( 'woocommerce_order_item_meta_end', $item_id, $item, $order, false );
		
        ?>
    </div>
    <div class="order-received__product-price text text--black-gray text--normal text--w-regular right woocommerce-table__product-total product-total">
        <?php echo $order->get_formatted_line_subtotal( $item ); ?>
    </div>
</div>
