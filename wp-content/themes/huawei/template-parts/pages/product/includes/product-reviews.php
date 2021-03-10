<?php

$idProduct = get_the_ID();
$product = wc_get_product($idProduct);
$cat_id = $product->category_ids[0];
$productGamme = get_term_by('id', $cat_id, 'product_cat', 'ARRAY_A')['slug'];



$args = array(
    'post_type' => 'reviews',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'review_gamme',
            'field'    => 'slug',
            'terms'    => $productGamme,
        ),
    ),
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'date',
);

$the_query = new WP_Query($args);


/* echo '<pre>';
print_r($the_query);
echo '</pre>'; */

?>


<section class="product--reviews w-flex">
    <div class="container">
        <h2 class="product--reviews__title h2">Les retours de nos clients</h2>
        <div class="row">
            <div class="product--reviews__list">
                <div class="swiper-container" js-slider-news>
                    <div class="swiper-wrapper">


                        <?php
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();

                                $reviewTitle = get_field('review_title');
                                $reviewModel = get_field('review_')->post_title;
                                $reviewAuthor = get_field('review_author');
                                $reviewNote = get_field('review_note');
                                $reviewText = get_field('review_text');

                        ?>
                                <div class="swiper-slide product--reviews__w-card">
                                    <div class="card--review">
                                        <div class="card--review__inner">
                                            <h5 class="card--review__title h5">"<?php echo $reviewTitle ?>"</h5>
                                            <div class="card--review__stars-container">
                                                <?php for ($i = 1; $i <= 5; $i++) : ?>
                                                    <?php if ($i <= $reviewNote) :
                                                        $starClass = 'icon-star';
                                                    else :
                                                        $starClass = 'icon-star-empty';
                                                    endif;
                                                    ?>
                                                    <i class="card--review__star <?php echo $starClass ?>"></i>
                                                <?php endfor ?>
                                            </div>
                                            <p class="p--small card--review__model"><?php echo $reviewModel ?></p>
                                            <p class="p card--review__text"><?php echo $reviewText ?></p>
                                            <p class="p card--review__author icon-avatar"><?php echo $reviewAuthor ?></p>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>



                    </div>

                </div>
            </div>
        </div>
</section>