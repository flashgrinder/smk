<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<!-- Shop-card -->
<div <?php wc_product_class( 'shop-card shop-card--archive', $product ); ?>>
    <div class="shop-card__icon">
        <?php
        
            $product_img = wp_get_attachment_image_src( $product->get_image_id(), 'thumbnail' )[0];
            
        ?>
        <img src="<?php echo $product_img; ?>" alt="" class="shop-card__img">
    </div>
    <h3 class="shop-card__name text text--normal text--white text--w-regular">
        <?php echo $product->get_title(); ?>
    </h3>
    <div class="shop-card__quantity">
        <?php woocommerce_quantity_input() ?>
        <input type="range" min="1" max="99999" value="1" class="shop-card__range">
    </div>
    <div class="shop-card__price text text--white text--w-bold">
        <?php echo $product->get_price(); ?> руб.
    </div>
    <div class="shop-card__action">
        <a href="<?php echo $product->add_to_cart_url(); ?>" class="button button--basket">
            <svg width="39" height="28" viewBox="0 0 39 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1H6.27939C7.47915 1 8.56354 1.71481 9.03648 2.81743L9.72386 4.42M14.7222 16.0733H32.4542C33.6951 16.0733 34.808 15.3093 35.2539 14.1511L37.4302 8.49779C38.1867 6.53265 36.7362 4.42 34.6305 4.42H9.72386M14.7222 16.0733L9.72386 4.42M14.7222 16.0733L15.4492 18.0401C15.8845 19.2179 17.0074 20 18.2631 20H33.8542"
                stroke="white" stroke-width="2" stroke-linecap="round" />
                <circle cx="20" cy="25" r="2" stroke="white" stroke-width="2" />
                <circle cx="30" cy="25" r="2" stroke="white" stroke-width="2" />
            </svg>
        </a>
    </div>
</div>
<!-- /. Shop-card -->