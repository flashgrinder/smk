<?php /* Template Name: Домашняя страница */?>
<?php get_header(); ?>

        <!-- Main-screen -->
        <section class="main-screen">
            <div class="main-screen__vector">
                <div class="main-screen__inner container">
                    <div class="main-screen__actions">
                        <a href="javascript:;" class="main-screen__button button button--yellow" data-modal-trigger="modal">
                            Оставить заявку
                        </a>
                        <a href="" class="main-screen__button button button--yellow">
                            Перейти в магазин
                        </a>
                    </div>
                    <div class="main-screen__text">
                        <h1 class="main-screen__heading title title--white title--big title--uppercase title--w-black">
                            СТРОЙМОНТАЖКОНСАЛТИНГ
                        </h1>
                        <p class="main-screen__subtitle text text--white text--large text-w-regular">
                            Мы с Вами на площадке, мы слушаем Вас и помогаем найти оптимальные решения!
                        </p>
                    </div>
                </div>
            </div>
            <div class="main-screen__line"></div>
            <div class="main-screen__trapezoid"></div>
        </section>
        <!-- /. Main-screen -->

        <!-- Services-slider -->
        <section class="services-slider">
            <div class="tooltip-modal" data-tooltip="tooltip-id-1">
                <div class="tooltip-modal__body">
                    <div class="tooltip-modal__close">
                        <svg class="tooltip-modal__close-svg" viewBox="0 0 26 26" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="13" cy="13" r="12.5" fill="#C4C4C4" fill-opacity="0.2" stroke="white" />
                            <line x1="6.8574" y1="6.45968" x2="19.5403" y2="19.1426" stroke="white" />
                            <line x1="6.45968" y1="19.1426" x2="19.1426" y2="6.4597" stroke="white" />
                        </svg>
                    </div>
                    <div class="tooltip-modal__text text text--normal text--w-regular text--white wysiwyg">
                        <ul>
                            <li>Чистка и уборка прилегающих территорий</li>
                            <li>Благоустройство ландшафта</li>
                            <li>Комплексное обслуживание помещений</li>
                            <li>Управление эксплуатацией жилого и нежилого фонда</li>
                            <li>Комплексное обслуживание территорий и помещений (ЖКХ)</li>
                            <li>Сбор неопасных отходов</li>
                            <li>Сбор и обработка сточных вод</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="services-slider__body container">
                <div class="services-slider__inner">
                    <h2 class="services-slider__heading title title--white title--large title--uppercase title--w-black">
                        Наши услуги:
                    </h2>
                    <div class="services-slider__nav">
                        <div class="services-slider__arrow services-slider__arrow--prev">
                            <svg class="services-slider__arrow-svg" width="22" height="24" viewBox="0 0 22 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5H20V10.5H0V13.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                        <div class="services-slider__arrow services-slider__arrow--next">
                            <span class="services-slider__arrow-text text text--white text--normal text--w-regular">
                                Посмотреть еще
                            </span>
                            <svg class="services-slider__arrow-svg services-slider__arrow-svg--next" width="22"
                                height="24" viewBox="0 0 22 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.0607 13.0607C21.6464 12.4749 21.6464 11.5251 21.0607 10.9393L11.5147 1.3934C10.9289 0.807611 9.97919 0.807611 9.3934 1.3934C8.80761 1.97919 8.80761 2.92893 9.3934 3.51472L17.8787 12L9.3934 20.4853C8.80761 21.0711 8.80761 22.0208 9.3934 22.6066C9.97919 23.1924 10.9289 23.1924 11.5147 22.6066L21.0607 13.0607ZM0 13.5H20V10.5H0V13.5Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="services-slider__swiper swiper-container">
                    <div class="services-slider__wrapper swiper-wrapper">
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-1.png" alt=""
                                        class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-1.png" alt=""
                                        class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Чистка и уборка прилегающих территорий
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-2.png" alt="" class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-2.png" alt="" class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Благоустройство ландшафта
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-3.png" alt="" class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-3.png" alt="" class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Комплексное обслуживание территорий и помещений
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-4.png" alt=""
                                        class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-4.png" alt=""
                                        class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Выполнение строительного контроля и авторского надзора
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-5.png" alt=""
                                        class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-5.png" alt=""
                                        class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Сбор неопасных отходов и обработка сточных вод
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-6.png" alt="" class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-6.png" alt="" class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Управления проектами строительства
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-7.png" alt="" class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-7.png" alt="" class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Деятельность в области инженерных изысканий
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                        <div class="services-slider__slide swiper-slide">
                            <div class="services-slider__card">
                                <div class="services-slider__illustration">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-img-8.png" alt="" class="services-slider__illustration-img">
                                </div>
                                <div class="services-slider__icon">
                                    <img src="<?php echo STANDART_DIR; ?>img/service-slider/service-icon-8.png" alt="" class="services-slider__icon-img">
                                </div>
                                <div class="services-slider__text title title--white title--medium title--w-bold">
                                    Строительство и эксплуатация автомобильных дорог и автомагистралей
                                </div>
                                <div class="services-slider__action services-slider__action--inner">
                                    <a href="javascript:;" class="button button--trs" data-tooltip-trigger="tooltip-id-1">
                                        Узнать подробнее
                                    </a>
                                </div>
                            </div>
                            <div class="services-slider__action services-slider__action--outer">
                                <a href="javascript:;" class="button button--yellow" data-modal-trigger="modal">
                                    Рассчитать услугу
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Services-slider -->

        <!-- Techniaue -->
        <section class="technique">
            <div class="technique__body container">
                <h2 class="technique__heading title title--white title--large title--uppercase title--w-black title--indent">
                    Аренда и лизинг <br>спецтехники
                </h2>
                <div class="technique__cards">

                    <!-- Technique-card -->
                    <div class="technique-card">
                        <div class="technique-card__inner">
                            <div class="technique-card__side technique-card__side--left">
                                <h3 class="technique-card__heading title title--orange title--medium title--w-black">
                                    Автокран c телескопической стрелой LIEBHERR LTM 1050-3.1
                                </h3>
                                <span class="technique-card__title text text--white text--normal text-w-regular">
                                    Технические данные:
                                </span>
                                <table class="technique-card__table">
                                    <tbody class="technique-card__tbody">
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. Грузоподъёмность</td>
                                            <td class="technique-card__td">50 т</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Телескопическая стрела</td>
                                            <td class="technique-card__td">38 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. высота подъёма</td>
                                            <td class="technique-card__td">54 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. вылет стрелы</td>
                                            <td class="technique-card__td">44 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Количество осей </td>
                                            <td class="technique-card__td">3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technique-card__side technique-card__side--right">
                                <div class="technique-card__text text text--white text--normal text--w-regular">
                                    Имеет пятисекционную распределительную стрелу RZ типа с максимально возможной подачей бетона 62,1 м по вертикали. Такой диапазон доступен на мировом рынке только с самой современной технологией, немецкого качетва Putzmeister. Насос высокой производительности до 200 кубометров в час смонтированный на шестиосном шасси полуприцепа делает M63-5 самым универсальным в своем классе.
                                </div>
                                <div class="technique-card__picture">
                                    <img src="<?php echo STANDART_DIR; ?>img/technique/tech-1.png" alt="" class="technique-card__img">
                                </div>
                                <div class="technique-card__wrapp">
                                    <div class="technique-card__features">
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                1 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                2 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                3 преимущество
                                            </div>
                                        </div>
                                    </div>
                                    <div class="technique-card__action">
                                        <a href="javascript:;" class="technique-card__button button button--yellow" data-modal-trigger="modal">
                                            Арендовать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Technique-card -->

                    <!-- Technique-card -->
                    <div class="technique-card">
                        <div class="technique-card__inner">
                            <div class="technique-card__side technique-card__side--left">
                                <h3 class="technique-card__heading title title--orange title--medium title--w-black">
                                    Автокран c телескопической стрелой LIEBHERR LTM 1300-6.2
                                </h3>
                                <span class="technique-card__title text text--white text--normal text-w-regular">
                                    Технические данные:
                                </span>
                                <table class="technique-card__table">
                                    <tbody class="technique-card__tbody">
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. Грузоподъёмность</td>
                                            <td class="technique-card__td">300 т</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Телескопическая стрела</td>
                                            <td class="technique-card__td">78 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. высота подъёма</td>
                                            <td class="technique-card__td">114 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. вылет стрелы</td>
                                            <td class="technique-card__td">94 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Количество осей</td>
                                            <td class="technique-card__td">6</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technique-card__side technique-card__side--right">
                                <div class="technique-card__text text text--white text--normal text--w-regular">
                                    Имеет пятисекционную распределительную стрелу RZ типа с максимально возможной подачей бетона 62,1 м по вертикали. Такой диапазон доступен на мировом рынке только с самой современной технологией, немецкого качетва Putzmeister. Насос высокой производительности до 200 кубометров в час смонтированный на шестиосном шасси полуприцепа делает M63-5 самым универсальным в своем классе.
                                </div>
                                <div class="technique-card__picture">
                                    <img src="<?php echo STANDART_DIR; ?>img/technique/tech-2.png" alt="" class="technique-card__img">
                                </div>
                                <div class="technique-card__wrapp">
                                    <div class="technique-card__features">
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                1 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                2 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                3 преимущество
                                            </div>
                                        </div>
                                    </div>
                                    <div class="technique-card__action">
                                        <a href="javascript:;" class="technique-card__button button button--yellow" data-modal-trigger="modal">
                                            Арендовать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Technique-card -->

                    <!-- Technique-card -->
                    <div class="technique-card">
                        <div class="technique-card__inner">
                            <div class="technique-card__side technique-card__side--left">
                                <h3 class="technique-card__heading title title--orange title--medium title--w-black">
                                    Гусеничный кран c телескопической стрелой LIEBHERR LTR 1220
                                </h3>
                                <span class="technique-card__title text text--white text--normal text-w-regular">
                                    Технические данные:
                                </span>
                                <table class="technique-card__table">
                                    <tbody class="technique-card__tbody">
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. Грузоподъёмность</td>
                                            <td class="technique-card__td">220 т</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Телескопическая стрела</td>
                                            <td class="technique-card__td">60 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. высота подъёма</td>
                                            <td class="technique-card__td">101 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Макс. вылет стрелы</td>
                                            <td class="technique-card__td">88 м</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technique-card__side technique-card__side--right">
                                <div class="technique-card__text text text--white text--normal text--w-regular">
                                    Имеет пятисекционную распределительную стрелу RZ типа с максимально возможной подачей бетона 62,1 м по вертикали. Такой диапазон доступен на мировом рынке только с самой современной технологией, немецкого качетва Putzmeister. Насос высокой производительности до 200 кубометров в час смонтированный на шестиосном шасси полуприцепа делает M63-5 самым универсальным в своем классе.
                                </div>
                                <div class="technique-card__picture">
                                    <img src="<?php echo STANDART_DIR; ?>img/technique/tech-3.png" alt="" class="technique-card__img">
                                </div>
                                <div class="technique-card__wrapp">
                                    <div class="technique-card__features">
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                1 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                2 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                3 преимущество
                                            </div>
                                        </div>
                                    </div>
                                    <div class="technique-card__action">
                                        <a href="javascript:;" class="technique-card__button button button--yellow" data-modal-trigger="modal">
                                            Арендовать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Technique-card -->

                    <!-- Technique-card -->
                    <div class="technique-card">
                        <div class="technique-card__inner">
                            <div class="technique-card__side technique-card__side--left">
                                <h3 class="technique-card__heading title title--orange title--medium title--w-black">
                                    Автобетоносмеситель LIEBHERR HTM 1004
                                </h3>
                                <span class="technique-card__title text text--white text--normal text-w-regular">
                                    Технические данные:
                                </span>
                                <table class="technique-card__table">
                                    <tbody class="technique-card__tbody">
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Номинальный объем смесителя</td>
                                            <td class="technique-card__td">10 м³</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Максимальный объем в горизонтальном положении</td>
                                            <td class="technique-card__td">11,05 м³</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Геометрический объем смесителя</td>
                                            <td class="technique-card__td">17,64 м³</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Максимальная высота смесителя без рамы</td>
                                            <td class="technique-card__td">3 907 мм</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Высота загрузки без рамы</td>
                                            <td class="technique-card__td">3 817 мм</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Вес смесителя с приводом от шасси</td>
                                            <td class="technique-card__td">7 290 кг</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Вес смесителя с отдельным двигателем</td>
                                            <td class="technique-card__td">900 кг</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technique-card__side technique-card__side--right">
                                <div class="technique-card__text text text--white text--normal text--w-regular">
                                    Имеет пятисекционную распределительную стрелу RZ типа с максимально возможной подачей бетона 62,1 м по вертикали. Такой диапазон доступен на мировом рынке только с самой современной технологией, немецкого качетва Putzmeister. Насос высокой производительности до 200 кубометров в час смонтированный на шестиосном шасси полуприцепа делает M63-5 самым универсальным в своем классе.
                                </div>
                                <div class="technique-card__picture">
                                    <img src="<?php echo STANDART_DIR; ?>img/technique/tech-4.png" alt="" class="technique-card__img">
                                </div>
                                <div class="technique-card__wrapp">
                                    <div class="technique-card__features">
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                1 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                2 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                3 преимущество
                                            </div>
                                        </div>
                                    </div>
                                    <div class="technique-card__action">
                                        <a href="javascript:;" class="technique-card__button button button--yellow" data-modal-trigger="modal">
                                            Арендовать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Technique-card -->

                    <!-- Technique-card -->
                    <div class="technique-card">
                        <div class="technique-card__inner">
                            <div class="technique-card__side technique-card__side--left">
                                <h3 class="technique-card__heading title title--orange title--medium title--w-black">
                                    Автобетононасос PUTZMEISTER BSF56-5.16Н VOLVO FMX460
                                </h3>
                                <span class="technique-card__title text text--white text--normal text-w-regular">
                                    Технические данные:
                                </span>
                                <table class="technique-card__table">
                                    <tbody class="technique-card__tbody">
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Объем подачи бетона макс.</td>
                                            <td class="technique-card__td">160 м3/ч</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Высота подачи бетона</td>
                                            <td class="technique-card__td">55,1 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Дальность подачи бетона по горизонтали</td>
                                            <td class="technique-card__td">17,64 м³</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Максимальная высота смесителя без рамы</td>
                                            <td class="technique-card__td">49,9 м</td>
                                        </tr>
                                        <tr class="technique-card__tr">
                                            <td class="technique-card__td">Количество осей</td>
                                            <td class="technique-card__td">5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="technique-card__side technique-card__side--right">
                                <div class="technique-card__text text text--white text--normal text--w-regular">
                                    Имеет пятисекционную распределительную стрелу RZ типа с максимально возможной подачей бетона 62,1 м по вертикали. Такой диапазон доступен на мировом рынке только с самой современной технологией, немецкого качетва Putzmeister. Насос высокой производительности до 200 кубометров в час смонтированный на шестиосном шасси полуприцепа делает M63-5 самым универсальным в своем классе.
                                </div>
                                <div class="technique-card__picture">
                                    <img src="<?php echo STANDART_DIR; ?>img/technique/tech-5.png" alt="" class="technique-card__img">
                                </div>
                                <div class="technique-card__wrapp">
                                    <div class="technique-card__features">
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                1 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                2 преимущество
                                            </div>
                                        </div>
                                        <div class="technique-card__item">
                                            <div class="technique-card__item-pic">
                                                <img src="" alt="" class="technique-card__item-img">
                                            </div>
                                            <div class="technique-card__item-text text text--white text--tiny text--w-regular">
                                                3 преимущество
                                            </div>
                                        </div>
                                    </div>
                                    <div class="technique-card__action">
                                        <a href="javascript:;" class="technique-card__button button button--yellow" data-modal-trigger="modal">
                                            Арендовать
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /. Technique-card -->

                </div>
            </div>
        </section>
        <!-- /. Techniaue -->

        <!-- About -->
        <section class="about">
            <div class="about__body container">
                <h2 class="about__heading title title--orange title--large title--uppercase title--w-black title--indent">
                    О компании
                </h2>
                <div class="about__text text text--white text--normal text-w-regular wysiwyg">
                    <p>
                        Крупные компании постоянно испытывают дефицит высокотехнологичной мобильной техники. Содержание
                        и обслуживание собственного автопарка дорогостоящей техники экономически не выгодно. Идеальным
                        решением в такой ситуации является АРЕНДА специализированной
                        техники. Наша миссия: предоставить высокотехнологичное инновационное оборудование, которое
                        облегчит решение Ваших задач на любой площадке.
                    </p>
                    <p>
                        Нашей главной целью является своевременное обеспечение Заказчика МОБИЛЬНОЙ высокотехнологичной
                        специализированной техникой.
                    </p>
                    <p>
                        Мы – относительно молодая на рынке аренды специализированной техники, но надежная компания и
                        обладаем рядом неоспоримых преимуществ:
                    </p>
                    <ul>
                        <li>наличие собственного парка мобильной спецтехники европейских производителей</li>
                        <li>опытные водители-операторы, прошедшие обучение у производителей</li>
                        <li>своевременное прохождение техосмотра на сервисе производителя</li>
                        <li>быстро е реагирование на поступающие заявки</li>
                        <li>доступные цены</li>
                    </ul>
                    <p>
                        Мы приходим на помощь в необходимый момент и обеспечиваем работоспособной мобильной техникой в
                        удобные для вас сроки.Обращайтесь к нам, и мы сделаем все возможное, чтобы вы были полностью
                        удовлетворены условиями и спокойны за результат.
                    </p>
                </div>
                <div class="about__inner">
                    <div class="about__pic about__pic--left">
                        <img src="<?php echo STANDART_DIR; ?>img/about/man-1.png" alt="" class="about__img">
                    </div>
                    <div class="about__pic about__pic--right">
                        <img src="<?php echo STANDART_DIR; ?>img/about/man-2.png" alt="" class="about__img">
                    </div>
                </div>
            </div>
        </section>
        <!-- /. About -->

        <!-- Management -->
        <section class="management">
            <div class="management__body container">
                <h2 class="management__heading title title--white title--large title--w-black title--uppercase title--indent">
                    Менеджмент <br>компании
                </h2>
                <div class="management__cards">
                    <div class="management__card">
                        <div class="management__photo">
                            <img src="<?php echo STANDART_DIR; ?>img/management/photo-1.png" alt="" class="management__img">
                        </div>
                        <div class="management__rank title title--white title--small title--w-normal">
                            Генеральный директор
                        </div>
                        <div class="management__name title title--white title--small title--w-bold">
                            Ткаченко Вячеслав Юрьевич
                        </div>
                        <div class="management__phones">
                            <a href="tel:+74993807997" class="management__link management__link--phone title title--white title--small title--w-normal link">
                                +7 499 380 7997
                            </a>
                            <a href="tel:+7903239604" class="management__link management__link--phone title title--white title--small title--w-normal link">
                                +7 903 239 604
                            </a>
                        </div>
                        <div class="management__emails">
                            <a href="mailto:info@smk-contracts.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                info@smk-contracts.ru
                            </a>
                            <a href="mailto:smk.sales@yandex.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                smk.sales@yandex.ru
                            </a>
                        </div>
                    </div>
                    <div class="management__card">
                        <div class="management__photo">
                            <img src="<?php echo STANDART_DIR; ?>img/management/photo-2.png" alt="" class="management__img">
                        </div>
                        <div class="management__rank title title--white title--small title--w-normal">
                            Финансовый директор
                        </div>
                        <div class="management__name title title--white title--small title--w-bold">
                            Попова Наталья Игоревна
                        </div>
                        <div class="management__phones">
                            <a href="tel:+74993807997" class="management__link management__link--phone title title--white title--small title--w-normal link">
                                +7 499 380 7997
                            </a>
                        </div>
                        <div class="management__emails">
                            <a href="mailto:info@smk-contracts.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                info@smk-contracts.ru
                            </a>
                            <a href="mailto:smk.sales@yandex.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                smk.sales@yandex.ru
                            </a>
                        </div>
                    </div>
                    <div class="management__card">
                        <div class="management__photo">
                            <img src="<?php echo STANDART_DIR; ?>img/management/photo-3.png" alt="" class="management__img">
                        </div>
                        <div class="management__rank title title--white title--small title--w-normal">
                            Коммерческий директор
                        </div>
                        <div class="management__name title title--white title--small title--w-bold">
                            Айзенберг Полина Константиновна
                        </div>
                        <div class="management__phones">
                            <a href="tel:+74993807997" class="management__link management__link--phone title title--white title--small title--w-normal link">
                                +7 499 380 7997
                            </a>
                            <a href="tel:+79775944775" class="management__link management__link--phone title title--white title--small title--w-normal link">
                                +7 977 594 4775
                            </a>
                        </div>
                        <div class="management__emails">
                            <a href="mailto:info@smk-contracts.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                info@smk-contracts.ru
                            </a>
                            <a href="mailto:smk.sales@yandex.ru" class="management__link management__link--email title title--white title--small title--w-normal link">
                                smk.sales@yandex.ru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Management -->

        <!-- Contacts -->
        <section class="contacts">
            <div class="contacts__body container">
                <h2 class="contacts__heading title title--white title--large title--uppercase title--w-black title--indent">
                    Контакты
                </h2>
                <div class="contacts__map">
                    <a class="dg-widget-link" href="http://2gis.ru/moscow/firm/70000001049888823/center/37.623556,55.728322/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                        Посмотреть на карте Москвы
                    </a>
                    <div class="dg-widget-link">
                        <a href="http://2gis.ru/moscow/center/37.623556,55.728322/zoom/16/routeTab/rsType/bus/to/37.623556,55.728322╎СтройМонтаж?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">
                            Найти проезд до СтройМонтаж
                        </a>
                    </div>
                    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                    <script charset="utf-8">
                        new DGWidgetLoader({
                            "width": 100 + '%',
                            "height": 400,
                            "borderColor": "#a3a3a3",
                            "pos": {
                                "lat": 55.728322,
                                "lon": 37.623556,
                                "zoom": 16
                            },
                            "opt": {
                                "city": "moscow"
                            },
                            "org": [{
                                "id": "70000001049888823"
                            }]
                        });
                    </script>
                    <noscript style="color:#c00;font-size:16px;font-weight:bold;">
                        Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
                    </noscript>
                </div>
                <div class="contacts__info">
                    <div class="contacts__side contacts__side--left">
                        <div class="contacts__icon">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.07538 8.49899L8.07541 8.49901L8.07963 8.49502L9.04745 7.57936C9.47015 7.17944 10.1251 7.15881 10.5722 7.53134C10.634 7.58288 10.6903 7.64077 10.74 7.70408L12.874 10.42C12.9025 10.4564 12.9284 10.4948 12.9513 10.5349C13.2272 11.0177 13.0284 11.6332 12.5222 11.8633L11.976 12.1115C11.6952 12.2391 11.4485 12.4311 11.2559 12.6719C10.7532 13.3003 10.6853 14.1719 11.0845 14.8705L11.3277 15.296C11.4118 15.4433 11.5097 15.5822 11.62 15.7109L12.1533 16.3331C12.5642 16.8124 13.0145 17.2565 13.4995 17.6607L14.0613 18.1288L14.0756 18.1408L14.0908 18.1516L15.5588 19.2002L15.5751 19.2118L15.5922 19.2221C16.4081 19.7116 17.4646 19.4741 17.9924 18.6824L18.9419 17.2582C18.9569 17.2357 18.9741 17.2148 18.9932 17.1956C19.1391 17.0498 19.3705 17.0347 19.534 17.1605L21.6141 18.7606L22.6567 19.6728C22.9443 19.9245 23.1093 20.2881 23.1093 20.6702C23.1093 21.1458 22.8544 21.585 22.4415 21.8209L21.3468 22.4464C20.8183 22.7485 20.2202 22.9073 19.6114 22.9073L19.4712 22.9073C18.9454 22.9073 18.4246 22.8043 17.9384 22.6041L16.3902 21.9666C15.6297 21.6535 14.902 21.266 14.2177 20.8098L13.4293 20.2841L13.1037 19.9947C12.1059 19.1078 11.1953 18.1273 10.3843 17.0669L9.81895 16.3276C9.23536 15.5644 8.74007 14.7376 8.34253 13.863L8.09941 13.3282C7.98783 13.0827 7.89553 12.8289 7.82336 12.5691L7.3762 10.9593C7.13 10.073 7.39986 9.12338 8.07538 8.49899Z"
                                    stroke="white" />
                                <circle cx="15" cy="15" r="14.5" stroke="white" />
                            </svg>
                        </div>
                        <div class="contacts__phones">
                            <a href="tel:+74993807997" class="contacts__link contacts__link--phone title title--white title--medium title--uppercase title--w-bold link">
                                +7 499 380 7997
                            </a>
                            <a href="tel:+79775944775" class="contacts__link contacts__link--phone title title--white title--medium title--uppercase title--w-bold link">
                                +7 977 594 4775
                            </a>
                        </div>
                    </div>
                    <div class="contacts__side contacts__side--right">
                        <div class="contacts__icon">
                            <svg width="30" height="23" viewBox="0 0 30 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.0264667 22.1722C0.0264667 22.1957 0.0264667 22.2192 0.0529334 22.2623C0.0529334 22.2858 0.0794001 22.3329 0.0794001 22.3564C0.0794001 22.3799 0.101456 22.4035 0.101456 22.4466C0.127922 22.4701 0.127922 22.4936 0.154389 22.5407C0.180856 22.5642 0.180856 22.5877 0.207322 22.6112C0.233789 22.6308 0.260256 22.6543 0.260256 22.6779C0.286723 22.7014 0.308778 22.7249 0.335245 22.7484L0.361712 22.7719C0.361712 22.7719 0.388178 22.7719 0.388178 22.7955C0.467578 22.8621 0.569034 22.9091 0.674901 22.9327C0.701367 22.9327 0.701367 22.9327 0.723423 22.9562C0.82929 22.9797 0.930746 22.9993 1.03661 22.9993H28.9899C29.0957 22.9993 29.1972 22.9797 29.303 22.9562C29.3295 22.9562 29.3295 22.9562 29.3516 22.9327C29.4574 22.8856 29.5589 22.8386 29.6383 22.7955C29.6383 22.7955 29.6648 22.7955 29.6648 22.7719L29.6912 22.7484C29.7177 22.7249 29.7442 22.7014 29.7662 22.6779C29.7927 22.6543 29.8191 22.6308 29.8191 22.6112C29.8456 22.5877 29.8456 22.5642 29.8721 22.5407C29.8985 22.5171 29.8985 22.4936 29.925 22.4466C29.9515 22.427 29.9515 22.4035 29.9515 22.3564C29.9515 22.3329 29.9735 22.2858 29.9735 22.2623C29.9735 22.2427 30 22.2192 30 22.1722C30 22.1486 30 22.1016 30 22.082C30 22.0585 30 22.0585 30 22.035V0.944748C30 0.415532 29.5368 0 28.9413 0H1.06308C0.467578 0 0 0.415532 0 0.944748V22.035C0 22.0585 0 22.0585 0 22.082C0.0264667 22.1016 0.0264667 22.1251 0.0264667 22.1722ZM3.34363 21.0902L11.191 12.7561L14.4552 14.7828C14.6361 14.8964 14.8434 14.9435 15.0507 14.9435C15.2581 14.9435 15.4654 14.8964 15.6462 14.7828L18.9105 12.7561L26.7622 21.0902H3.34363ZM27.9797 19.432L20.6484 11.6741L27.9532 7.13853V19.432H27.9797ZM2.14821 1.8895H27.9797V4.85702L15.0772 12.8462L2.14821 4.85702V1.8895ZM2.14821 7.13853L9.45743 11.6741L2.14821 19.432V7.13853Z"
                                    fill="#FEFEFE" />
                            </svg>
                        </div>
                        <div class="contacts__emails">
                            <a href="mailto:info@smk-contracts.ru" class="contacts__link contacts__link--email title title--white title--medium title--uppercase title--w-bold link">
                                info@smk-contracts.ru
                            </a>
                            <a href="mailto:smk.sales@yandex.ru" class="contacts__link contacts__link--email title title--white title--medium title--uppercase title--w-bold link">
                                smk.sales@yandex.ru
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Contacts -->

<?php get_footer(); ?>