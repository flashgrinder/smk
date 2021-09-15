<?php
/**
 * Order Customer Details
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-details-customer.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.6.0
 */

defined( 'ABSPATH' ) || exit;

$show_shipping = ! wc_ship_to_billing_address_only() && $order->needs_shipping_address();
?>
<!-- Customer-details -->
<section class="customer-details woocommerce-customer-details">
    <div class="customer-details__body">
        <h2 class="customer-details__heading title title--black-gray title--large title--uppercase title--w-black center woocommerce-column__title">
            <?php esc_html_e( 'Billing address', 'woocommerce' ); ?>
        </h2>
        <address class="customer-details__address text text--black-gray text--large text--w-bold center">
            <div class="customer-details__info">
                <span class="customer-details__info-title">Имя/Фамилия: </span>
                <span class="customer-details__data"><?php echo $order->billing_first_name; echo $order->billing_last_name; ?></span>
            </div>
            <div class="customer-details__info">
                <span class="customer-details__info-title">Город: </span>
                <span class="customer-details__info-data"><?php echo $order->billing_city; ?></span>
            </div>
            <div class="customer-details__info">
                <span class="customer-details__info-title">Адрес: </span>
                <span class="customer-details__info-data"><?php echo $order->billing_address_1; ?></span>
            </div>
            <div class="customer-details__info">
                <span class="customer-details__info-title">Область: </span>
                <span class="customer-details__info-data"><?php echo $order->billing_state; ?></span>
            </div>
            <div class="customer-details__info">
                <span class="customer-details__info-title">Почтовый индекс: </span>
                <span class="customer-details__info-data"><?php echo $order->billing_postcode; ?></span>
            </div>
            <?php if ( $order->get_billing_phone() ) : ?>
            <div class="customer-details__info customer-details__phone woocommerce-customer-details--phone">
                <span class="customer-details__info-title">Телефон: </span>
                <span class="customer-details__info-data"><?php echo esc_html( $order->get_billing_phone() ); ?></span>
            </div>
            <?php endif; ?>
            <?php if ( $order->get_billing_email() ) : ?>
            <div class="customer-details__info customer-details__email woocommerce-customer-details--email">
                <span class="customer-details__info-title">Email:</span>
                <span class="customer-details__info-data"><?php echo esc_html( $order->get_billing_email() ); ?></span>
            </div>
            <?php endif; ?>
        </address>

        <?php do_action( 'woocommerce_order_details_after_customer_details', $order ); ?>
        
    </div>
</section>
<!-- Customer-details -->
