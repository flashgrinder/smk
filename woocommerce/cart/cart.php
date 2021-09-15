<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;


?>

    <!-- Services-store -->
    <section class="services-store services-store--bascket">
        <div class="services-store__body container js-reveal a-reveal">
            <h2 class="services-store__heading title title--orange title--large title--uppercase title--w-black title--indent">
                Корзина
            </h2>
            <?php do_action( 'woocommerce_before_cart' ); ?>
            <form class="services-store__container services-store__container--basket woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

            <?php do_action( 'woocommerce_before_cart_table' ); ?>

                <div class="services-store__shop-cards shop_table shop_table_responsive cart woocommerce-cart-form__contents">

                    <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                    <?php

                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    
                    ?>

                        <!-- Shop-card -->
                        <div class="shop-card shop-card--basket js-card-item woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                            <div class="shop-card__icon product-thumbnail">
                                <?php

                                    $attr_class_img = [ 'class' => 'shop-card__img'];

                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image($size, $attr_class_img), $cart_item, $cart_item_key );

                                    echo $thumbnail;
                                    
                                ?>
                            </div>
                            <h3 class="shop-card__name js-shop-card-name text text--normal text--white text--w-regular product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                <?php

                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                    

                                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                    // Meta data.
                                    echo wc_get_formatted_cart_item_data( $cart_item );

                                    // Backorder notification.
                                    if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                    }

						        ?>
                            </h3>
                            <div class="shop-card__quantity product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                <?php
                                
                                    if ( $_product->is_sold_individually() ) {
                                        $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                    } else {
                                        $product_quantity = woocommerce_quantity_input(
                                            array(
                                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                                'input_value'  => $cart_item['quantity'],
                                                'max_value'    => $_product->get_max_purchase_quantity(),
                                                'min_value'    => '1',
                                                'product_name' => $_product->get_name(),
                                            ),
                                            $_product,
                                            false
                                        );
                                    }

                                    echo $product_quantity
                                
                                ?>
                                <span class="shop-card__options text text--white text--normal">
                                    кв.м./месяц
                                </span>
                            </div>
                            <div class="shop-card__price text text--white text--w-bold product-subtotal js-card-item-price">
                                <?php

                                    echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] );
                                
                                ?>
                            </div>
                            <div class="shop-card__action product-remove">
                                <?php

                                    echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="remove shop-card__btn-del" aria-label="%s" data-product_id="%s" data-product_sku="%s">
                                                <svg class="shop-card__btn-svg" width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="27.6806" height="27.6806" rx="13.8403" />
                                                    <path d="M8.78564 9.42285H20.5326V19.9445C20.5326 21.3252 19.4133 22.4445 18.0326 22.4445H11.2856C9.90493 22.4445 8.78564 21.3252 8.78564 19.9445V9.42285Z" />
                                                    <path d="M10.6978 9.06018H18.6206V8.73611C18.6206 7.3554 17.5013 6.23611 16.1206 6.23611H13.1978C11.817 6.23611 10.6978 7.35539 10.6978 8.73611V9.06018Z" />
                                                    <line x1="7.01074" y1="9.06018" x2="22.307" y2="9.06018" />
                                                    <line x1="12.2471" y1="20.3951" x2="12.2471" y2="11.4722" />
                                                    <line x1="14.7964" y1="20.3951" x2="14.7964" y2="11.4722" />
                                                    <line x1="17.3457" y1="20.3951" x2="17.3457" y2="11.4722" />
                                                </svg>
                                            </a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_html__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ),
                                        $cart_item_key
                                    );

                                ?>
                            </div>
                        </div>
                        <!-- /. Shop-card -->
                    <?php
                            }
                        }
                    ?>

                    <?php do_action( 'woocommerce_cart_contents' ); ?>

                </div>

                <div class="services-store__upd-bascket">
                    <button type="submit" class="button button--yellow js-update-card" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

                    <?php do_action( 'woocommerce_cart_actions' ); ?>

                    <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </div>
                <?php do_action( 'woocommerce_after_cart_contents' ); ?>

                <?php do_action( 'woocommerce_after_cart_table' ); ?>

            </form>

            <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

            <?php woocommerce_cart_totals(); ?>
        </div>
    </section>
    <!-- /. Services-store -->

    <script>
        jQuery(document).on('click', '.js-input-decr', function() {
            const wrapper = this.closest('.js-input-num-wrapper');
            const input = wrapper.querySelector('.js-input-num');
            const pricePerOne = input.dataset.price;
            const cardItem = wrapper.closest('.js-card-item');
            const cardPrice = cardItem.querySelector('.js-card-item-price');
            const link = cardItem.querySelector('.js-card-link');

            let step = input.step ? parseInt(input.step, 10) : 1;
            let min = parseInt(input.min, 10);
            let value = parseInt(input.value, 10);

            if (min !== undefined) {
                if (value - step >= min) {
                    input.value = value - step;
                }
            } else {
                input.value = value - step;
            }

            jQuery(input).trigger('change');
        });
        jQuery(document).on('click', '.js-input-incr', function() {
            const wrapper = this.closest('.js-input-num-wrapper');
            const input = wrapper.querySelector('.js-input-num');
            const pricePerOne = input.dataset.price;
            const cardItem = wrapper.closest('.js-card-item');
            const cardPrice = cardItem.querySelector('.js-card-item-price');
            const link = cardItem.querySelector('.js-card-link');

            let step = input.step ? parseInt(input.step, 10) : 1;
            let max = parseInt(input.max, 10);
            let value = parseInt(input.value, 10);

            if (max) {
                if (value + step < max) {
                    input.value = value + step;
                }
            } else {
                input.value = value + step;
            }

            jQuery(input).trigger('change');
        });
        let timer;
        jQuery(document).on('change', '.js-input-num', function() {
            clearTimeout(timer);
            timer = setTimeout(() => {
                jQuery('.js-update-card').trigger('click');
            }, 500)
        });
    </script>

<?php do_action( 'woocommerce_after_cart' ); ?>