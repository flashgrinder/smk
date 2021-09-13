<?php

    /* Удаляем лишние обёртки у Contact Form 7 */
    add_filter( 'wpcf7_form_elements', function($content) {

        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

        return $content;
        
    });
    
    /* Убираем тег <p></p> у отрывков */
    remove_filter( 'the_excerpt','wpautop');

    /* Убираем оповещения в корзине */
    add_filter( 'wc_add_to_cart_message_html', '__return_null' );

    /* Изменение полей на форме оплаты */
    add_filter( 'woocommerce_checkout_fields', function ( $checkout_fields ){
        
        // echo '<pre>';print_r( $checkout_fields );exit;

        $checkout_fields['billing']['billing_country']['required'] = 0;

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