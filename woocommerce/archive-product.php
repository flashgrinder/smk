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
            <div class="main-screen__vector main-screen__vector--store">
                <div class="main-screen__inner container">
                    <div class="main-screen__text main-screen__text--store">
                        <h1 class="main-screen__heading title title--white title--big title--uppercase title--w-black">
                            СТРОЙМОНТАЖКОНСАЛТИНГ
                        </h1>
                        <p class="main-screen__subtitle text text--white text--large text-w-regular">
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
                <h2 class="services-store__heading title title--white title--large title--uppercase title--w-black title--indent">
                    Наши услуги:
                </h2>
                <div class="services-store__container services-store__container--archive">

                    <!-- Sidebar -->
                    <?php get_sidebar( 'shop' ); ?>
                    <!-- /. Sidebar -->

                    <?php if ( woocommerce_product_loop() ) { ?>

                    <!-- <?php woocommerce_output_all_notices(); ?> -->

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

                        <?php
                        
                            } else {

                                wc_no_products_found();
                            }
                        
                        ?>

                </div>
            </div>
        </section>
        <!-- /. Services-store -->

<?php get_footer(); ?>