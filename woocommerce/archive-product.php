<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

?>

<?php get_header(); ?>

        <!-- Main-screen -->
        <section class="main-screen main-screen--store">
            <div class="main-screen__vector main-screen__vector--store js-reveal a-reveal-top">
                <div class="main-screen__inner container">
                    <div class="main-screen__text main-screen__text--store">
                        <h1 class="main-screen__heading title title--white title--big title--uppercase title--w-black a-reveal-opacity js-reveal a-reveal-opacity">
                            СТРОЙМОНТАЖКОНСАЛТИНГ
                        </h1>
                        <p class="main-screen__subtitle text text--white text--large text-w-regular js-reveal a-reveal-opacity">
                            Мы с Вами на площадке, мы слушаем Вас и помогаем найти оптимальные решения!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Main-screen -->

        <!-- Services-store -->
        <section class="services-store services-store--archive">
            <div class="services-store__body container">
                <h2 class="services-store__heading title title--white title--large title--uppercase title--w-black title--indent js-reveal a-reveal">
                    Наши услуги:
                </h2>
                <div class="services-store__info">
                </div>

                <?php if ( woocommerce_product_loop() ) { ?>

                    <?php

                        woocommerce_product_loop_start();
                    
                            if ( wc_get_loop_prop( 'total' ) ) {
                                while ( have_posts() ) {

                                    the_post();

                                    wc_get_template_part( 'content', 'product' );

                                }
                            }
                    
                        woocommerce_product_loop_end();
                    
                    ?>   

            </div>
            <?php
                        
                } else {

                    wc_no_products_found();
                }
            
            ?>
        </section>
        <!-- /. Services-store -->

        <script>
            const links = document.querySelectorAll('.js-card-link');
            links.forEach(link => {
                const cardItem = link.closest('.js-card-item');
                const input = cardItem.querySelector('.js-input-num');
                const value = parseInt(input.value, 10);
                link.href = `?add-to-cart=${getAllUrlParams(link.href)['add-to-cart']}&quantity=${input.value}`;
            })
            function getAllUrlParams(url) {
                // извлекаем строку из URL или объекта window
                var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

                // объект для хранения параметров
                var obj = {};

                // если есть строка запроса
                if (queryString) {

                // данные после знака # будут опущены
                queryString = queryString.split('#')[0];

                // разделяем параметры
                var arr = queryString.split('&');

                for (var i=0; i<arr.length; i++) {
                    // разделяем параметр на ключ => значение
                    var a = arr[i].split('=');

                    // обработка данных вида: list[]=thing1&list[]=thing2
                    var paramNum = undefined;
                    var paramName = a[0].replace(/\[\d*\]/, function(v) {
                    paramNum = v.slice(1,-1);
                    return '';
                    });

                    // передача значения параметра ('true' если значение не задано)
                    var paramValue = typeof(a[1])==='undefined' ? true : a[1];

                    // преобразование регистра
                    paramName = paramName.toLowerCase();
                    paramValue = paramValue.toLowerCase();

                    // если ключ параметра уже задан
                    if (obj[paramName]) {
                    // преобразуем текущее значение в массив
                    if (typeof obj[paramName] === 'string') {
                        obj[paramName] = [obj[paramName]];
                    }
                    // если не задан индекс...
                    if (typeof paramNum === 'undefined') {
                        // помещаем значение в конец массива
                        obj[paramName].push(paramValue);
                    }
                    // если индекс задан...
                    else {
                        // размещаем элемент по заданному индексу
                        obj[paramName][paramNum] = paramValue;
                    }
                    }
                    // если параметр не задан, делаем это вручную
                    else {
                    obj[paramName] = paramValue;
                    }
                }
                }

                return obj;
            }
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
                    if (value - step > min) {
                        input.value = value - step;
                    }
                } else {
                    input.value = value - step;
                }

                const newPrice = (pricePerOne * input.value).toFixed(2);

                cardPrice.innerHTML = `
                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₽</span>${newPrice}</bdi></span>
                `;

                link.href = `/?add-to-cart=${getAllUrlParams(link.href)['add-to-cart']}&quantity=${input.value}`;

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

                const newPrice = (pricePerOne * input.value).toFixed(2);

                cardPrice.innerHTML = `
                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₽</span>${newPrice}</bdi></span>
                `;

                link.href = `?add-to-cart=${getAllUrlParams(link.href)['add-to-cart']}&quantity=${input.value}`;
                jQuery(input).trigger('change');
            });

            jQuery(document).on('input', '.js-input-num', function() {
                const cardItem = this.closest('.js-card-item');
                const link = cardItem.querySelector('.js-card-link');
                link.href = `?add-to-cart=${getAllUrlParams(link.href)['add-to-cart']}&quantity=${this.value}`;
            })

            jQuery(document).on('click', '.js-card-link', function(e) {
                e.preventDefault();
                const cardItem = this.closest('.js-card-item');
                const input = cardItem.querySelector('.js-input-num');
                const value = parseInt(input.value, 10);
                const name = cardItem.querySelector('.js-shop-card-name');

                cardItem.classList.add('is-load');

                const notice = document.querySelector('.services-store--archive .services-store__info');
                jQuery.ajax({
                    url: this.href,
                    method: 'get',
                    success: function (response) {
                        notice.innerHTML = `
                        <div class="services-store__message">
                            <div class="services-store__notice text text--white text--normal text--w-bold">
                                Вы добавили "${name.innerText}" в корзину.
                            </div>
                            <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="services-store__button button button--yellow">
                                В корзину
                            </a>
                        </div>
                        `;
                        console.log(`Вы добавили ${value} x "${name.innerText}" в корзину, класс!`)
                        cardItem.classList.remove('is-load');
                    },
                    error: function (response) {
                        // Вывести сообщение об ошибке
                        cardItem.classList.remove('is-load');
                    }
                });
            });
        </script>

<?php get_footer(); ?>