<?php get_header(); ?>

        <?php the_post(); ?>

        <!-- Main-screen -->
        <section class="main-screen main-screen--store">
            <div class="main-screen__vector main-screen__vector--store js-reveal a-reveal-top">
                <div class="main-screen__inner container">
                    <div class="main-screen__text main-screen__text--store">
                        <h1 class="main-screen__heading title title--white title--big title--uppercase title--w-black js-reveal a-reveal-opacity">
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

        <?php the_content(); ?>

<?php get_footer(); ?>