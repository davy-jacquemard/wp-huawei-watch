<?php

$lastNews = get_field('last_news', 'option');
$surtitle = $lastNews['box_title']['sur_title'];
$title = $lastNews['box_title']['title'];
$link = $lastNews['link'];

/* echo '<pre>';
print_r($surtitle);
echo '</pre>';
 */

$args = array(
    'post_type' => 'articles',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'date',
);

$the_query = new WP_Query($args);
?>

<section class="w-flex last-news">
    <div class="container">
        <div class="last-news__header">
            <div class="w-title">
                <div class="headline"><?php echo $surtitle ?></div>
                <h2 class="h2"><?php echo $title ?></h2>
            </div>
            <div class="btn-container">
                <a href="<?php echo $link['url'] ?>" class="btn btn--secondary"><?php echo $link['title'] ?></a>
            </div>
        </div>
        <div class="row">
            <div class="last-news__list">
                <div class="swiper-container" js-slider-news>
                    <div class="swiper-wrapper">


                        <?php
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {
                                $the_query->the_post();

                                $id = get_the_ID();
                                $title = get_the_title($id);

                                $date = get_the_date('d F Y', $id);
                                $taxo = get_the_terms($id, 'article_category');

                                $card = array(
                                    'link'      => get_permalink(),
                                    'image_url' => get_the_post_thumbnail_url($id),
                                    'image_alt' => get_the_post_thumbnail_caption($id),
                                    'category'  => $taxo[0]->name,
                                    'title'     => $title,
                                    'date'      => $date,
                                )
                        ?>
                                <div class="swiper-slide last-news__w-card on-white">
                                    <?php
                                    set_query_var('card', $card);
                                    get_template_part('template-parts/components/cards/card', 'news'); ?>
                                </div>

                        <?php
                            }
                        }
                        wp_reset_postdata();
                        ?>



                    </div>
                    
                </div>
<div class="last-news__pagination" js-slider-news-pagination></div>
            </div>
        </div>
    </div>
</section>