<?php

    /* Удаляем лишние обёртки у Contact Form 7 */
    add_filter( 'wpcf7_form_elements', function($content) {

        $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

        return $content;
        
    });
    
    /* Убираем тег <p></p> у отрывков */
    remove_filter( 'the_excerpt','wpautop');

    add_filter( 'wc_add_to_cart_message_html', '__return_null' );