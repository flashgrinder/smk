<?php
/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.0.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( $max_value && $min_value === $max_value ) {
	?>
	<div class="quantity hidden">
		<input type="hidden" id="<?php echo esc_attr( $input_id ); ?>" class="qty" name="<?php echo esc_attr( $input_name ); ?>" value="<?php echo esc_attr( $min_value ); ?>" />
	</div>
	<?php
} else {
	/* translators: %s: Quantity. */
	$label = ! empty( $args['product_name'] ) ? sprintf( esc_html__( '%s quantity', 'woocommerce' ), wp_strip_all_tags( $args['product_name'] ) ) : esc_html__( 'Quantity', 'woocommerce' );
	?>

		<?php do_action( 'woocommerce_before_quantity_input_field' ); ?>

        <?php $isCart = is_cart();?>

        <div class="shop-card__number js-input-num-wrapper">
            <button class="shop-card__arrow shop-card__arrow--minus js-input-decr" type="button">
                <svg class="shop-card__arrow-svg" width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.15625 1.17969H0V0H7.15625V1.17969Z" fill="white"/>
                </svg>
            </button>
            <input
                type="number"
                id="<?php echo esc_attr( $input_id ); ?>"
                class="<?php echo esc_attr( join( ' shop-card__field ', (array) $classes ) ); ?> js-input-num"
                step="<?php echo esc_attr( $step ); ?>"
                min="<?php echo esc_attr( $min_value ); ?>"
                max="<?php echo esc_attr( 0 < $max_value ? $max_value : '' ); ?>"
                name="<?php echo esc_attr( $input_name ); ?>"
                value="<?php echo esc_attr( $input_value ); ?>"
                title="<?php echo esc_attr_x( 'Qty', 'Product quantity input tooltip', 'woocommerce' ); ?>"
                size="4"
                data-price="<?php if ($isCart) {
                    echo 10;
                } else {
                    echo $product->get_price();
                } ?>"
                placeholder="<?php echo esc_attr( $placeholder ); ?>"
                inputmode="<?php echo esc_attr( $inputmode ); ?>" />
            <button class="shop-card__arrow shop-card__arrow--plus js-input-incr" type="button">
                <svg class="shop-card__arrow-svg" width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.125 3.32031H8.29688V4.6875H5.125V8.28125H3.67188V4.6875H0.5V3.32031H3.67188V0H5.125V3.32031Z" fill="white"/>
                </svg>
            </button>
        </div>


		<?php do_action( 'woocommerce_after_quantity_input_field' ); ?>

	<?php
}
