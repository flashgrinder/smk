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

do_action( 'woocommerce_before_cart' ); ?>

    <!-- Main-screen -->
    <section class="main-screen main-screen--store">
        <div class="main-screen__vector main-screen__vector--store">
            <div class="main-screen__inner container">
                <div class="main-screen__text main-screen__text--store">
                    <h1 class="main-screen__heading title title--white title--big title--uppercase title--w-black">
                        СТРОЙМОНТАЖКОНСАЛТИНГ
                    </h1>
                    <p class="main-screen__subtitle text text--white text--large text-w-regular">
                        Мы с Вами на площадке, мы слушаем Вас и помогаем найти оптимальные решения!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Main-screen -->

    <!-- Services-store -->
    <section class="services-store services-store--bascket">
        <div class="services-store__body container">
            <h2 class="services-store__heading title title--white title--large title--uppercase title--w-black title--indent">
                Корзина
            </h2>
            <div class="services-store__container services-store__container--basket">

            <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                <div class="services-store__shop-cards">

                    <?php

                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                    
                    ?>

                        <!-- Shop-card -->
                        <div class="shop-card shop-card--basket">
                            <div class="shop-card__icon">
                                <?php

                                    $attr_class_img = [ 'class' => 'shop-card__img'];

                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image($size, $attr_class_img), $cart_item, $cart_item_key );

                                    echo $thumbnail;
                                    
                                ?>
                            </div>
                            <h3 class="shop-card__name text text--normal text--white text--w-regular" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
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
                            <div class="shop-card__quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                <?php
                                
                                    if ( $_product->is_sold_individually() ) {
                                        $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                    } else {
                                        $product_quantity = woocommerce_quantity_input(
                                            array(
                                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                                'input_value'  => $cart_item['quantity'],
                                                'max_value'    => $_product->get_max_purchase_quantity(),
                                                'min_value'    => '0',
                                                'product_name' => $_product->get_name(),
                                            ),
                                            $_product,
                                            false
                                        );
                                    }

                                    echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                
                                ?>
                                <input type="range" min="1" max="99999" value="1" class="shop-card__range">
                            </div>
                            <div class="shop-card__price text text--white text--w-bold">
                                <!-- 9 999 999 руб. -->
                                <?php

                                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                
                                ?>
                            </div>
                            <div class="shop-card__action">
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

            </div>
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
                <div class="services-store__subtotal">
                    <span class="services-store__subtotal-text text text--large text--white text--w-regular">
                        Итого:
                    </span>
                    <span class="services-store__subtotal-price text text--white text--w-bold">
                        9 999 999 руб.
                    </span>
                </div>
            </div>
            <div class="services-store__ordering">
                <div class="services-store__order">
                    <a href="javascript:;" class="button button--yellow">
                        Оформить заказ
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /. Services-store -->

<?php do_action( 'woocommerce_after_cart' ); ?>