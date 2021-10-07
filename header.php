<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('page bg--black-gray-hight'); ?>>

    <!-- Modal window -->
    <div class="modal" data-modal="modal">
        <div class="modal__body">
            <div class="modal__close">
                <svg class="modal__close-svg" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="13" cy="13" r="12.5" fill="#C4C4C4" fill-opacity="0.2" stroke="white" />
                    <line x1="6.8574" y1="6.45968" x2="19.5403" y2="19.1426" stroke="white" />
                    <line x1="6.45968" y1="19.1426" x2="19.1426" y2="6.4597" stroke="white" />
                </svg>
            </div>
            <div class="modal__header">
                <h3 class="modal__title text text--big text--white text--w-bold text--uppercase">
                    Оставьте заявку
                </h3>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="130" title="Контактная форма 1" html_class="modal__form"]' ); ?>
        </div>
    </div>
    <!-- /. Modal window -->

    <!-- Header -->
    <header class="header">
        <div class="header__bg"></div>
        <div class="header__body container">
            <a href="<?php echo home_url(); ?>" class="header__logo logo">
                <img src="<?php echo STANDART_DIR; ?>img/logo-big.png" alt="" class="header__logo-img logo__img">
            </a>
            <div class="header__menu js-menu">
                <nav class="menu">
                    <ul class="menu__list header__menu-list">
                        <li class="menu__item header__menu-item">
                            <a href="<?php echo home_url(); ?>#services" class="menu__link header__menu-link js-anchor-link">
                                Услуги
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="<?php echo home_url(); ?>#thechnique" class="menu__link header__menu-link js-anchor-link">
                                Спецтехника
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="<?php echo home_url(); ?>#about" class="menu__link header__menu-link js-anchor-link">
                                О компании
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="<?php echo home_url(); ?>#managment" class="menu__link header__menu-link js-anchor-link">
                                Менеджмент
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="<?php echo home_url(); ?>#contacts" class="menu__link header__menu-link js-anchor-link">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__actions">
                <div class="header__payment" onclick="ipayCheckout({currency:'RUB', order_number:'', description: ''}, function(order) { showSuccessfulPurchase(order) }, function(order) { showFailurefulPurchase(order) })">
                    <span class="header__icon-payment">
                        <svg class="header__icon-payment-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 172 172">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"/>
                                <path d="M0,86c0,-47.49649 38.50351,-86 86,-86c47.49649,0 86,38.50351 86,86c0,47.49649 -38.50351,86 -86,86c-47.49649,0 -86,-38.50351 -86,-86zM86,168.56c45.59663,0 82.56,-36.96337 82.56,-82.56c0,-45.59663 -36.96337,-82.56 -82.56,-82.56c-45.59663,0 -82.56,36.96337 -82.56,82.56c0,45.59663 36.96337,82.56 82.56,82.56z" fill="#000000"/>
                                <g fill="#000000">
                                    <path d="M39.3838,47.472c-7.2437,0 -13.17268,5.92898 -13.17268,13.17268v57.9598c0,7.2437 5.92898,13.17268 13.17268,13.17268h47.42166h12.21561c-0.65073,-1.6703 -1.23803,-3.42753 -1.76493,-5.26907h-10.45067h-47.42166c-4.39568,0 -7.90361,-3.50793 -7.90361,-7.90361v-39.51805h110.65054v7.90361v10.16766c1.48061,0.61121 3.18779,1.2186 5.26907,1.8061v-11.97376v-26.34537c0,-7.2437 -5.92898,-13.17268 -13.17268,-13.17268zM39.3838,52.74107h94.84332c4.39568,0 7.90361,3.50793 7.90361,7.90361v5.26907h-110.65054v-5.26907c0,-4.39568 3.50793,-7.90361 7.90361,-7.90361zM44.65288,86.99005v5.26907h42.15259v-5.26907zM126.32351,97.26577c-3.9518,0 -6.58428,1.31624 -9.74573,2.89696c-3.16144,1.58072 -7.11325,3.42593 -14.48995,5.00665l-2.10969,0.52485v2.10969c0,34.24898 24.23774,46.63233 25.0281,47.15923l1.31727,0.52485l1.31727,-0.52485c1.05381,-0.52691 25.0281,-13.96407 25.0281,-47.15923v-2.10969l-2.10969,-0.52485c-7.3767,-1.58072 -11.32851,-3.42593 -14.48995,-5.00665c-3.16144,-1.58072 -5.79392,-2.89696 -9.74573,-2.89696zM126.32351,102.53484c2.89799,0 4.48077,0.79139 7.37876,2.37211c3.16144,1.31727 7.11119,3.42078 13.69753,5.0015c-0.79036,24.50119 -16.59758,36.62006 -21.07629,39.51805c-4.74217,-2.63454 -20.28593,-13.96304 -21.07629,-39.51805c6.8498,-1.58072 10.79954,-3.68424 13.69753,-5.0015c2.89799,-1.58072 4.48077,-2.37211 7.37876,-2.37211z"/>
                                </g>
                                <path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"/>
                                <path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"/>
                                <path d="M86,172c-47.49649,0 -86,-38.50351 -86,-86v0c0,-47.49649 38.50351,-86 86,-86v0c47.49649,0 86,38.50351 86,86v0c0,47.49649 -38.50351,86 -86,86z" fill="none"/>
                                <path d="M86,168.56c-45.59663,0 -82.56,-36.96337 -82.56,-82.56v0c0,-45.59663 36.96337,-82.56 82.56,-82.56v0c45.59663,0 82.56,36.96337 82.56,82.56v0c0,45.59663 -36.96337,82.56 -82.56,82.56z" fill="none"/>
                            </g>
                        </svg>
                    </span>
                    <span class="header__text-payment"></span>
                        Оплатить
                    </span>
                </div>
                <a href="tel:+74993807997" class="header__phone">
                    <span class="header__icon-phone">
                        <svg class="header__icon-phone-svg" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.07538 8.49885L8.07541 8.49888L8.07963 8.49488L9.04745 7.57922C9.47015 7.1793 10.1251 7.15867 10.5722 7.5312C10.634 7.58274 10.6903 7.64064 10.74 7.70394L12.874 10.4199C12.9025 10.4562 12.9284 10.4946 12.9513 10.5348C13.2272 11.0176 13.0284 11.633 12.5222 11.8631L11.976 12.1114C11.6952 12.239 11.4485 12.431 11.2559 12.6718C10.7532 13.3001 10.6853 14.1717 11.0845 14.8704L11.3277 15.2959C11.4118 15.4431 11.5097 15.582 11.62 15.7108L12.1533 16.3329C12.5642 16.8123 13.0145 17.2564 13.4995 17.6606L14.0613 18.1287L14.0756 18.1406L14.0908 18.1515L15.5588 19.2001L15.5751 19.2117L15.5922 19.222C16.4081 19.7115 17.4646 19.4739 17.9924 18.6822L18.9419 17.2581C18.9569 17.2356 18.9741 17.2146 18.9932 17.1955C19.1391 17.0496 19.3705 17.0346 19.534 17.1604L21.6141 18.7605L22.6567 19.6727C22.9443 19.9244 23.1093 20.2879 23.1093 20.6701C23.1093 21.1457 22.8544 21.5848 22.4415 21.8208L21.3468 22.4463C20.8183 22.7483 20.2202 22.9072 19.6114 22.9072L19.4712 22.9072C18.9454 22.9072 18.4246 22.8042 17.9384 22.6039L16.3902 21.9665C15.6297 21.6533 14.902 21.2658 14.2177 20.8096L13.4293 20.284L13.1037 19.9946C12.1059 19.1076 11.1953 18.1272 10.3843 17.0667L9.81895 16.3274C9.23536 15.5643 8.74007 14.7375 8.34253 13.8629L8.09941 13.328C7.98783 13.0826 7.89553 12.8288 7.82336 12.5689L7.3762 10.9592C7.13 10.0728 7.39986 9.12324 8.07538 8.49885Z" stroke="#2C2B33"/>
                            <circle cx="15" cy="15" r="14.5" stroke="#2C2B33"/>
                        </svg>
                    </span>
                    <span class="header__number-phone">
                        +7 499 380 7997
                    </span>
                </a>
            </div>
            <div class="burger-menu header__burger-menu js-burger">
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <?php if( is_shop() || is_product_category() || is_product() || is_product_tag() || is_checkout() || is_checkout_pay_page() ) : ?>

    <!-- Basket -->
    <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="bascket js-reveal a-reveal-opacity">
        <div class="bascket__icon">
            <svg class="bascket__svg" width="30" height="30" viewBox="0 0 30 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M3 7H3.45017C4.64994 7 5.73432 7.71481 6.20726 8.81743L6.32274 9.08667M9.37243 16.1968H19.3883C20.6293 16.1968 21.7422 15.4327 22.188 14.2746L22.6154 13.1645C23.3719 11.1993 21.9214 9.08667 19.8157 9.08667H6.32274M9.37243 16.1968L6.32274 9.08667M9.37243 16.1968L9.53355 16.6327C9.9689 17.8105 11.0918 18.5926 12.3475 18.5926H21.0455"
                    stroke-linecap="round" />
                <circle cx="12.5926" cy="21.6433" r="1.33041" />
                <circle cx="18.6942" cy="21.6433" r="1.33041" />
                <path
                    d="M29.5 15C29.5 23.0081 23.0081 29.5 15 29.5C6.99187 29.5 0.5 23.0081 0.5 15C0.5 6.99187 6.99187 0.5 15 0.5C23.0081 0.5 29.5 6.99187 29.5 15Z" />
            </svg>
        </div>
    </a>
    <!-- /. Basket -->

    <?php endif; ?>

    <!-- MAIN -->
    <main class="main page__container bg--black-gray-hight">