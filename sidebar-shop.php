<?php

    $product_categories = get_terms( ['taxonomy' => 'product_cat', 'hide_empty' => true] );

    if( $product_categories ) : ?>

    <div class="sidebar sidebar--archive">
        <aside class="sidebar__aside">

            <?php foreach( $product_categories as $product_category) : ?>
                <?php $term = get_term( $product_category->term_id, 'product_cat' ); ?>
                <?php $term_slug = $term->slug; ?>
                <a href="<?php echo get_term_link( $product_category ); ?>" 
                   class="sidebar__category js-sidebar-link">
                    <div class="sidebar__cat-icon">
                        <?php

                            $thumbnail_id = get_woocommerce_term_meta( $product_category->term_id, 'thumbnail_id', true );
                            $product_category_image = wp_get_attachment_image_src( $thumbnail_id, 'full' );

                        ?>
                        <img src="<?php echo $product_category_image[0]; ?>" alt="" class="sidebar__cat-img">
                    </div>
                    <h3 class="sidebar__cat-name text text--normal text--white text--w-regular">
                        <?php echo $product_category->name ?>
                    </h3>
                </a>
            <?php endforeach; ?>
            
        </aside>
    </div>

<?php endif; ?>