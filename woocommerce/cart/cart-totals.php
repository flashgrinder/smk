<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>

    <div class="services-store__actions js-reveal a-reveal">
        <div class="services-store__buttons hide">
            <a href="javascript:;" class="services-store__btn link text text--normal text--w-regular">
                <span class="services-store__icon">
                    <img src="<?php echo STANDART_DIR; ?>img/icons/email.svg" alt="" class="services-store__img-btn">
                </span>
                <span class="services-store__name-btn">
                    Отправить на e-mail
                </span>
            </a>
            <a href="javascript:;" class="services-store__btn link text text--normal text--w-regular">
                <span class="services-store__icon">
                    <img src="<?php echo STANDART_DIR; ?>img/icons/download.svg" alt="" class="services-store__img-btn">
                </span>
                <span class="services-store__name-btn">
                    Скачать список файлом
                </span>
            </a>
            <a href="javascript:;" class="services-store__btn link text text--normal text--w-regular">
                <span class="services-store__icon">
                    <img src="<?php echo STANDART_DIR; ?>img/icons/print.svg" alt="" class="services-store__img-btn">
                </span>
                <span class="services-store__name-btn">
                    Распечатать список
                </span>
            </a>
        </div>

        <div class="services-store__subtotal cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">

            <!-- Test -->
            <?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td data-title="<?php echo esc_attr( $fee->name ); ?>"><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
            <?php endforeach; ?>

            <?php
            if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) {
                $taxable_address = WC()->customer->get_taxable_address();
                $estimated_text  = '';

                if ( WC()->customer->is_customer_outside_base() && ! WC()->customer->has_calculated_shipping() ) {
                    /* translators: %s location. */
                    $estimated_text = sprintf( ' <small>' . esc_html__( '(estimated for %s)', 'woocommerce' ) . '</small>', WC()->countries->estimated_for_prefix( $taxable_address[0] ) . WC()->countries->countries[ $taxable_address[0] ] );
                }

                if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) {
                    foreach ( WC()->cart->get_tax_totals() as $code => $tax ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
                        ?>
                        <tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
                            <th><?php echo esc_html( $tax->label ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
                            <td data-title="<?php echo esc_attr( $tax->label ); ?>"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr class="tax-total">
                        <th><?php echo esc_html( WC()->countries->tax_or_vat() ) . $estimated_text; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></th>
                        <td data-title="<?php echo esc_attr( WC()->countries->tax_or_vat() ); ?>"><?php wc_cart_totals_taxes_total_html(); ?></td>
                    </tr>
                    <?php
                }
            }
            ?>
            <!-- Test -->

            <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

            <span class="services-store__subtotal-text text text--large text--white text--w-regular order-total">
                <?php esc_html_e( 'Total', 'woocommerce' ); ?>:
            </span>
            <span data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>" class="services-store__subtotal-price text text--white text--w-bold">
                <?php wc_cart_totals_order_total_html(); ?>
            </span>

            <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

        </div>
        
    </div>
    <div class="services-store__ordering wc-proceed-to-checkout js-reveal a-reveal">
        <div class="services-store__order">
            <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
        </div>
    </div>
    <?php do_action( 'woocommerce_after_cart_totals' ); ?>
        