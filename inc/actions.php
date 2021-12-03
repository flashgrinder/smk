<?php

    /* Подключение стилей и скриптов */
    add_action( 'wp_enqueue_scripts', function() {

        wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/style.min.css', [], '1.0.0.1' );


        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', [], '1.0.0.1', true );

    } );

    /* Отключение стилей WooCommerce */
    add_action( 'wp_enqueue_scripts', function() {
        
        wp_deregister_style( 'woocommerce-general' );
        wp_deregister_style( 'woocommerce-layout' );

    } );

    add_action( 'after_setup_theme', function(){

        /* Включаем поддержку WooCommerce */
        add_theme_support( 'woocommerce' );

        /* Добавляем возможность ставить постам миниатюры */
        add_theme_support('post-thumbnails');

        /* Тайтлы старницы ставятся автоматом */
        add_theme_support('title-tag');

        /* Включаем поддержку html5 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /* Отключаем админбар */
        // add_theme_support( 'admin-bar', ['callback' => '__return_false'] );

    });

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

    add_action( 'wp_head', function() {

		?>
            <!-- Подключения платёжного шлюза -->
            <script src="https://securepayments.sberbank.ru/payment/docsite/assets/js/ipay.js"></script>
            <script>
                var ipay = new IPAY({api_token: '37u4f5i31svjrvj71j1u6plt3a'});
            </script>

		<?php

	}, 20);