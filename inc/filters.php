<?php
    
    /* Убираем тег <p></p> у отрывков */
    remove_filter( 'the_excerpt','wpautop');

    /* Убираем оповещения в корзине */
    add_filter( 'wc_add_to_cart_message_html', '__return_null' );

    /* Изменение полей на форме оплаты */
    add_filter( 'woocommerce_checkout_fields', function ( $checkout_fields ){

        $checkout_fields['billing']['billing_country']['required'] = 0;
        $checkout_fields['billing']['billing_address_1']['required'] = 0;
        $checkout_fields['billing']['billing_city']['priority'] = 41;
        $checkout_fields['billing']['billing_first_name']['placeholder'] = 'Иван';
        $checkout_fields['billing']['billing_last_name']['placeholder'] = 'Иванов';
        $checkout_fields['billing']['billing_city']['required'] = 0;
        $checkout_fields['billing']['billing_city']['placeholder'] = 'г. Москва';
        $checkout_fields['billing']['billing_state']['required'] = 0;
        $checkout_fields['billing']['billing_state']['placeholder'] = 'Московская область';
        $checkout_fields['billing']['billing_postcode']['required'] = 0;
        $checkout_fields['billing']['billing_postcode']['placeholder'] = '000000';
        $checkout_fields['billing']['billing_phone']['placeholder'] = '+7 (999) 999 99 99';
        $checkout_fields['billing']['billing_email']['placeholder'] = 'ivan-ivanov@mail.ru';
        // echo '<pre>';print_r( $checkout_fields );exit;
        return $checkout_fields;

    } );

    /* Добавление классов к полям формы оплаты */
    add_filter('woocommerce_checkout_fields', function ( $fields ) {

        foreach ($fields as &$fieldset) {

            foreach ($fieldset as &$field) {

                $field['class'][] = 'checkout-form__field'; 

                $field['input_class'][] = 'checkout-form__input';
            }

        }
        return $fields;

    } );

    /* Меняем тег <p></p> у полей оплаты */
    add_filter( 'woocommerce_form_field', function( $fields ) {

        return preg_replace(
            '#<p class="form-row (.*?)"(.*?)>(.*?)</p>#',
            '<div class="form-row $1"$2>$3</div>',
            $fields
        );

    } );

    /* Удаляем лишние поля у формы оплаты */
    add_filter( 'woocommerce_checkout_fields', function( $fields ){

        unset( $fields['billing']['billing_country'] );

        return $fields;

    } );

    /* Выод количества товаров на главной */
    add_filter('loop_shop_per_page', function() {
        return -1;
    }, 10, 0);