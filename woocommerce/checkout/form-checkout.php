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
    <section class="checkout-page hide">
        <div class="checkout-page__body container">
            <h2 class="checkout-page__heading title title--orange title--large title--uppercase title--w-black title--indent js-reveal a-reveal">
                Детали оплаты
            </h2>
            <div class="checkout-page__container">

                <!-- Checkout-form -->
                <form action="" class="checkout-form checkout woocommerce-checkout bg--dark" name="checkout" method="post" enctype="multipart/form-data">

                    <div class="errors woocommerce-error">
                        <div class="errors__notice text text--white text--normal">
                           <strong>Имя для выставления счета</strong> является обязательным полем.
                        </div>
                        <div class="errors__notice text text--white text--normal">
                           <strong>Фамилия для выставления счета</strong> является обязательным полем.
                        </div>
                        <div class="errors__notice text text--white text--normal">
                           <strong>Адрес для выставления счета</strong> является обязательным полем.
                        </div>
                        <div class="errors__notice text text--white text--normal">
                           <strong>Населённый пункт для выставления счета</strong> является обязательным полем.
                        </div>
                        <div class="errors__notice text text--white text--normal">
                           <strong>Область / район для выставления счета</strong> является обязательным полем.
                        </div>
                        <div class="errors__notice text text--white text--normal">
                           <strong>Почтовый индекс для выставления счета</strong> является обязательным полем.
                        </div>
                    </div>

                    <div class="checkout-form__container-grid">

                        <div class="checkout-form__customer-details" id="customer_details">
                            <div class="checkout-form__billing-fields woocommerce-billing-fields__field-wrapper">
                                <div class="checkout-form__field form-row woocommerce-invalid">
                                    <label for="billing_first_name_field">
                                        Имя <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="Иван">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row woocommerce-validated">
                                    <label for="billing_first_name_field">
                                        Фамилия <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="Иванов">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Адрес <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="Улица, номер дома и т.д.">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Населённый пункт <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="г. Москва">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Область / район <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="Московская обл.">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Почтовый индекс <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="000000">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Телефон <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="+7 (999) 999 99 99">
                                    </span>
                                </div>
                                <div class="checkout-form__field form-row">
                                    <label for="billing_first_name_field">
                                        Email  <abbr title="обязательно" class="required">*</abbr>
                                    </label>
                                    <span class="woocommerce-input-wrapper">
                                        <input type="text" class="checkout-form__input input-text" placeholder="ivanov-ivan@mail.ru">
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="checkout-form__order-review woocommerce-checkout-review-order" id="order_review">
                            <h2 class="checkout-form__order-title title title--black-gray title--large title--uppercase title--w-black">
                                Ваш заказ
                            </h2>
                            <div class="checkout-form__order-table">
                                <div class="checkout-form__product-row checkout-form__product-row--first">
                                    <div class="checkout-form__table-title text text--black-gray text--normal text--w-bold">
                                        Товар
                                    </div>
                                    <div class="checkout-form__table-title text text--black-gray text--normal text--w-bold right">
                                        Подытог
                                    </div>
                                </div>
                                <div class="checkout-form__product-row">
                                    <div class="checkout-form__product-name text text--black-gray text--normal text--w-regular">
                                        Устройство корыта под дорожную (разработка грунта, доработка грунта вручную, планировка и употнение) <span class="checkout-form__product-quantity text text--small text--w-bold">х 1</span>
                                    </div>
                                    <div class="checkout-form__product-price text text--black-gray text--normal text--w-regular right">
                                        9 999 ₽
                                    </div>
                                </div>
                                <div class="checkout-form__product-row">
                                    <div class="checkout-form__product-name text text--black-gray text--normal text--w-regular">
                                        Автобетононасос PUTZMEISTER BSF56-5.16Н VOLVO FMX460 <span class="checkout-form__product-quantity text text--small text--w-bold">х 14</span>
                                    </div>
                                    <div class="checkout-form__product-price text text--black-gray text--normal text--w-regular right">
                                        9 999 999 ₽
                                    </div>
                                </div>
                                <div class="checkout-form__product-row">
                                    <div class="checkout-form__product-name text text--black-gray text--normal text--w-regular">
                                        Автокран c телескопической стрелой LIEBHERR LTM 1300-6.2 с инновационной концепцией привода <span class="checkout-form__product-quantity text text--small text--w-bold">х 8</span> 
                                    </div>
                                    <div class="checkout-form__product-price text text--black-gray text--normal text--w-regular right">
                                        999 ₽
                                    </div>
                                </div>
                                <div class="checkout-form__product-row checkout-form__product-row--last">
                                    <div class="checkout-form__table-title text text--black-gray text--normal text--w-regular">
                                        Итого: 
                                    </div>
                                    <div class="checkout-form__table-subtotal text text--black-gray text--normal text--w-bold right">
                                        9 999 999 ₽
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-form__pay-info woocommerce-checkout-payment" id="payment">
                                <div class="checkout-form__pay-text text text--gray-hight text--small text--w-regular">
                                    Текст с видом и условиями оплаты, дополнительная информация о платежных системах. Текст с видом и условиями оплаты, дополнительная информация о платежных системах
                                </div>
                                <div class="checkout-form__pay-carts">
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/maestro.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/master-card.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/visa.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/google-pay.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/alfa-bank.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                    <div class="checkout-form__pay-icon">
                                        <img src="img/checkout/tinkoff.svg" alt="" class="checkout-form__pay-img">
                                    </div>
                                </div>
                                <div class="checkout-form__pay-methods wc_payment_methods payment_methods methods">
                                    <div class="checkout-form__pay-method wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="checkout-form__pay-method-input input-radio" name="payment_method" value="" data-order_button_text=""/>
                                        <label class="checkout-form__pay-method-label text text--black-gray text--normal text--w-regular" for="payment_method_cheque">
                                            Чековые платежи
                                        </label>
                                        <div class="checkout-form__pay-box text text--black-gray text--normal text--w-bold payment_box payment_method_cheque">
                                            <p>
                                                Пожалуйста, отправьте ваш чек, указав данные магазина: название, улицу, город, область / район, страну, почтовый индекс.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="checkout-form__notice woocommerce-notice woocommerce-notice--info woocommerce-info text text--black-gray text--normal text--w-bold">
                                        К сожалению, у нас не предусмотрены методы оплаты, подходящие для вашего региона. Пожалуйста, свяжитесь с нами если вам необходима консультация или специальные условия.
                                    </div>
                                </div>
                                <div class="checkout-form__pay-actions form-row place-order">
                                    <noscript>
                                        Поскольку ваш браузер не поддерживает JavaScript или в нем он отключен, просим убедиться в том, что вы нажали кнопку <em>Обновить итог</em> перед регистрацией заказа. Иначе, есть риск неправильного подсчета стоимости.
                                        <br/>
                                        <button type="submit" class="button button--yellow alt" name="woocommerce_checkout_update_totals" value="Обновить итог">Обновить итог</button>
                                    </noscript>
                                    <div class="checkout-form__pay-policy woocommerce-terms-and-conditions-wrapper text text--gray-hight text--small text--w-regular">
                                        <p>
                                            Ваши личные данные будут использоваться для обработки ваших заказов, 
                                            упрощения вашей работы с сайтом и для других целей, 
                                            описанных в нашей <a href="" class="woocommerce-privacy-policy-link">политике конфидециальности.</a> 
                                        </p>
                                    </div>
                                    <div class="checkout-form__button">
                                        <button type="submit" class="button button--yellow alt" name="woocommerce_checkout_place_order" id="place_order" value="" data-value="">
                                            Подтвердить заказ
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </form>
                <!-- /. Checkout-form -->

            </div>
        </div>
    </section>
    <!-- /. Checkout -->
    
    <!-- Checkout -->
    <section class="checkout-page">
        <div class="checkout-page__body container">
            <h2 class="checkout-page__heading title title--orange title--large title--uppercase title--w-black title--indent js-reveal a-reveal">
                <?php esc_html_e( 'Billing details', 'woocommerce' ); ?>
            </h2>
            <div class="checkout-page__container">
                <form name="checkout" method="post" class="checkout-form checkout woocommerce-checkout bg--dark" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
                    <div class="checkout-form__container-grid">
                        <?php if ( $checkout->get_checkout_fields() ) : ?>

                            <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

                                <div class="checkout-form__customer-details" id="customer_details">
                                    
                                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                                    
                                </div>

                            <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

                        <?php endif; ?>
                    
                        <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
                        
                        <h3 id="order_review_heading"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h3>
                        
                        <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                        <div class="checkout-form__order-review woocommerce-checkout-review-order" id="order_review">
                            <?php do_action( 'woocommerce_checkout_order_review' ); ?>
                        </div>

                        <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
                    </div>
                </form>

                <?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
            </div>
        </div>
    </section>
    <!-- /. Checkout -->