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

    <div class="services-store__actions">
        <div class="services-store__buttons">
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

            <?php do_action( 'woocommerce_cart_totals_before_order_total' ); ?>

            <span class="services-store__subtotal-text text text--large text--white text--w-regular">
                <?php esc_html_e( 'Total', 'woocommerce' ); ?>:
            </span>
            <span data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>" class="services-store__subtotal-price text text--white text--w-bold">
                <?php wc_cart_totals_order_total_html(); ?>
            </span>

            <?php do_action( 'woocommerce_cart_totals_after_order_total' ); ?>

        </div>
        
    </div>
    <div class="services-store__ordering wc-proceed-to-checkout">
        <div class="services-store__order">
            <?php do_action( 'woocommerce_proceed_to_checkout' ); ?>
        </div>
    </div>
    <?php do_action( 'woocommerce_after_cart_totals' ); ?>
        