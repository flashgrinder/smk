    </main>
    <!-- /. MAIN -->

    <!-- Footer -->
    <?php $bg_classes = [ 'bg--black-gray-hight', 'bg--dark' ] ?>
    <footer class="footer page__container <?php if(is_cart()) {echo $bg_classes[0]; } else { echo $bg_classes[1]; } ?>">
        <div class="footer__body container ">
            <div class="footer__logo logo">
                <img src="<?php echo STANDART_DIR; ?>img/logo-big.png" alt="" class="footer__logo-img logo__img">
            </div>
            <div class="footer__inner">
                <nav class="footer__menu menu">
                    <ul class="menu__list footer__menu-list">
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                Услуги
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                Спецтехника
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                О компании
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href=""class="menu__link footer__menu-link">
                                Менеджмент
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                Контакты
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                База знаний
                            </a>
                        </li>
                        <li class="menu__item footer__menu-item">
                            <a href="" class="menu__link footer__menu-link">
                                Оплата
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="footer__text">
                    <div class="footer__descr text text--black-gray text--small text-w-regular">
                        Общество с ограниченной ответственностью «СТРОЙМОНТАЖКОНСАЛТИНГ»
                    </div>
                    <div class="footer__descr text text--black-gray text--small text-w-regular">
                        Юридический адрес: 123100 г. Москва, ул. Антонова-Овсеенко, д. 4, этаж 1, помещение I, комн.1,
                        офис А
                    </div>
                </div>
            </div>
            <div class="footer__social">
                <span class="footer__social-text title title--black-gray title--tiny title--w-bold title--uppercase">
                    Мы в СОЦСЕТЯХ
                </span>
                <div class="footer__social-icons">
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo STANDART_DIR; ?>img/icon-vk.png" alt="" class="footer__social-img">
                    </a>
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo STANDART_DIR; ?>img/icon-inst.png" alt="" class="footer__social-img">
                    </a>
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo STANDART_DIR; ?>img/icon-fb.png" alt="" class="footer__social-img">
                    </a>
                    <a href="#" class="footer__social-icon">
                        <img src="<?php echo STANDART_DIR; ?>img/icon-tg.png" alt="" class="footer__social-img">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__wrapper-text container">
            <div class="footer__text">
                <div class="footer__descr text text--black-gray text--small text-w-regular">
                    Общество с ограниченной ответственностью «СТРОЙМОНТАЖКОНСАЛТИНГ»
                </div>
                <div class="footer__descr text text--black-gray text--small text-w-regular">
                    Юридический адрес: 123100 г. Москва, ул. Антонова-Овсеенко, д. 4, этаж 1, помещение I, комн.1, офис
                    А
                </div>
            </div>
        </div>
    </footer>
    <!-- /. Footer -->

    <?php wp_footer(); ?>

</body>

</html>