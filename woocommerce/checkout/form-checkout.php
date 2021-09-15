<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
    
    <!-- Checkout -->
    <section class="checkout-page">
        <div class="checkout-page__body container">
            <h2 class="checkout-page__heading title title--orange title--large title--uppercase title--w-black title--indent js-reveal a-reveal">
                <?php esc_html_e( 'Billing details', 'woocommerce' ); ?>
            </h2>
            <div class="checkout-page__container js-reveal a-reveal">
                <form name="checkout" method="post" class="checkout-form checkout woocommerce-checkout bg--dark" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                    <div class="checkout-form__container-grid">
                        <?php if ( $checkout->get_checkout_fields() ) : ?>

                            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                                <div class="checkout-form__customer-details" id="customer_details">
                                    
                                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                                    
                                </div>

                            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                        <?php endif; ?>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                                <div class="checkout-form__order-review woocommerce-checkout-review-order" id="order_review">
                                    <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                                    <h2 class="checkout-form__order-title title title--black-gray title--large title--uppercase title--w-black">
                                        <?php esc_html_e( 'Your order', 'woocommerce' ); ?>
                                    </h2>
                                    <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                                </div>

                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                        
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /. Checkout -->

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>