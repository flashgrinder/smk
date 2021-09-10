<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('page') ?>>

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
            <div role="form" class="wpcf7" id="wpcf7-f382-o1" lang="ru-RU" dir="ltr">
                <div class="screen-reader-response">
                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                    <ul></ul>
                </div>
                <form action="/#wpcf7-f382-o1" method="post" class="modal__form wpcf7-form init" novalidate="novalidate"
                    data-status="init">
                    <div class="modal__field">
                        <input class="modal__input" aria-required="true" aria-invalid="false" placeholder="Имя">
                    </div>
                    <div class="modal__field">
                        <input type="email" class="modal__input" aria-required="true" placeholder="E-mail">
                    </div>
                    <div class="modal__field">
                        <input type="tel" class="modal__input" aria-required="true" placeholder="Номер телефона">
                    </div>
                    <div class="modal__agree-text">
                        <span class="wpcf7-form-control wpcf7-acceptance">
                            <span class="wpcf7-list-item">
                                <label>
                                    <input class="modal__checkbox modal__checkbox--agree" type="checkbox" name="acceptance-656" value="1" aria-invalid="false">
                                    <span class="wpcf7-list-item-label">
                                        Подтверждаю своё согласие на обработку персональных данных в рамках данного проекта.
                                    </span>
                                </label>
                            </span>
                        </span>
                    </div>
                    <div class="modal__actions">
                        <input type="submit" value="Отправить" class="modal__btn button button--yellow"><span class="ajax-loader"></span>
                    </div>
                    <div class="wpcf7-response-output" aria-hidden="true"></div>
                    <span class="wpa_hidden_field" style="display:none;height:0;width:0;">
                        <input type="text" name="field2423" value="89079">
                    </span>
                </form>
            </div>
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
                            <a href="" class="menu__link header__menu-link">
                                Услуги
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                Спецтехника
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                О компании
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                Менеджмент
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                Контакты
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                База знаний
                            </a>
                        </li>
                        <li class="menu__item header__menu-item">
                            <a href="" class="menu__link header__menu-link">
                                Оплата
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <a href="tel:+74993807997" class="header__phone">
                <span class="header__icon-phone">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.07538 8.49885L8.07541 8.49888L8.07963 8.49488L9.04745 7.57922C9.47015 7.1793 10.1251 7.15867 10.5722 7.5312C10.634 7.58274 10.6903 7.64064 10.74 7.70394L12.874 10.4199C12.9025 10.4562 12.9284 10.4946 12.9513 10.5348C13.2272 11.0176 13.0284 11.633 12.5222 11.8631L11.976 12.1114C11.6952 12.239 11.4485 12.431 11.2559 12.6718C10.7532 13.3001 10.6853 14.1717 11.0845 14.8704L11.3277 15.2959C11.4118 15.4431 11.5097 15.582 11.62 15.7108L12.1533 16.3329C12.5642 16.8123 13.0145 17.2564 13.4995 17.6606L14.0613 18.1287L14.0756 18.1406L14.0908 18.1515L15.5588 19.2001L15.5751 19.2117L15.5922 19.222C16.4081 19.7115 17.4646 19.4739 17.9924 18.6822L18.9419 17.2581C18.9569 17.2356 18.9741 17.2146 18.9932 17.1955C19.1391 17.0496 19.3705 17.0346 19.534 17.1604L21.6141 18.7605L22.6567 19.6727C22.9443 19.9244 23.1093 20.2879 23.1093 20.6701C23.1093 21.1457 22.8544 21.5848 22.4415 21.8208L21.3468 22.4463C20.8183 22.7483 20.2202 22.9072 19.6114 22.9072L19.4712 22.9072C18.9454 22.9072 18.4246 22.8042 17.9384 22.6039L16.3902 21.9665C15.6297 21.6533 14.902 21.2658 14.2177 20.8096L13.4293 20.284L13.1037 19.9946C12.1059 19.1076 11.1953 18.1272 10.3843 17.0667L9.81895 16.3274C9.23536 15.5643 8.74007 14.7375 8.34253 13.8629L8.09941 13.328C7.98783 13.0826 7.89553 12.8288 7.82336 12.5689L7.3762 10.9592C7.13 10.0728 7.39986 9.12324 8.07538 8.49885Z" stroke="#2C2B33" />
                        <circle cx="15" cy="15" r="14.5" stroke="#2C2B33" />
                    </svg>
                </span>
                <span class="header__number-phone">
                    +7 499 380 7997
                </span>
            </a>
            <div class="burger-menu header__burger-menu js-burger">
                <span class="burger-menu__line"></span>
            </div>
        </div>
    </header>
    <!-- /. Header -->

    <!-- Basket -->
    <a href="javascript:;" class="bascket">
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

    <!-- MAIN -->
    <main class="main page__container bg--dark">