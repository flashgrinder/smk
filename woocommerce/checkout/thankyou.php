<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;
?>

<!-- Order-received -->
<section class="order-received woocommerce-order">
    <div class="order-received__body container js-reveal a-reveal">

	<?php
	if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() );
		?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed">
                <?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?>
            </p>

		<?php else : ?>

            <h2 class="order-received__heading title title--orange title--large title--uppercase title--w-black center woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received js-reveal a-reveal">
                <?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), $order ); ?>
            </h2>
            <div class="order-received__container woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                
                <h2 class="order-received__order-title woocommerce-order-details__title title title--black-gray title--large title--uppercase title--w-black center">
                    <?php esc_html_e( 'Order details', 'woocommerce' ); ?>
                </h2>

                <ul class="order-received__details order_details order-datails">

                    <li class="order-received__order order-received__info-row woocommerce-order-overview__order order">
                        <div class="order-received__info-title text text--black-gray text--normal text--w-regular">
                            <?php esc_html_e( 'Order number:', 'woocommerce' ); ?>
                        </div> 
                        <strong class="order-received__info-data text text--black-gray text--normal text--w-bold right">
                            <?php echo $order->get_order_number(); ?>
                        </strong>
                    </li>

                    <li class="order-received__date order-received__info-row woocommerce-order-overview__date date">
                        <div class="order-received__info-title text text--black-gray text--normal text--w-regular">
                            <?php esc_html_e( 'Date:', 'woocommerce' ); ?>
                        </div>
                        <strong class="order-received__info-data text text--black-gray text--normal text--w-bold right">
                            <?php echo wc_format_datetime( $order->get_date_created() ); ?>
                        </strong>
                    </li>

                    <?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
                    <li class="order-received__email order-received__info-row woocommerce-order-overview__email email">
                        <div class="order-received__info-title text text--black-gray text--normal text--w-regular">
                            <?php esc_html_e( 'Email:', 'woocommerce' ); ?>
                        </div>
                        <strong class="order-received__info-data text text--black-gray text--normal text--w-bold right">
                            <?php echo $order->get_billing_email(); ?>
                        </strong>
                    </li>
                    <?php endif; ?>

                    <?php if ( $order->get_payment_method_title() ) : ?>
                    <li class="order-received__method order-received__info-row woocommerce-order-overview__payment-method method">
                        <div class="order-received__info-title text text--black-gray text--normal text--w-regular">
                            <?php esc_html_e( 'Total:', 'woocommerce' ); ?>
                        </div>
                        <strong class="order-received__info-data text text--black-gray text--normal text--w-bold right">
                            <?php echo $order->get_formatted_order_total(); ?>
                        </strong>
                    </li>
                    <?php endif; ?>

                </ul>

                <?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
                <?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
            </div>

		<?php endif; ?>

	    <?php else : ?>

		<p class="order-received__thenkyou woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received title title--yellow title--large title--uppercase title--w-black center">
            Спасибо!
            <br>
            Ваш заказ был принят. 
            <br>
            Мы свяжемся с вами в ближайшее время!
        </p>

	    <?php endif; ?>

    </div>
</section>
<!-- /. Order-received -->