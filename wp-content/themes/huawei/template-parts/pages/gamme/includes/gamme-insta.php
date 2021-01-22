<?php

$insta = get_field('gamme_instagram');
$surtitle = $insta['titles']['surtitle'];
$title = $insta['titles']['title'];
$link = $insta['link'];

$posts = array(
    'post_type' => 'instagram_post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'date',
);

$the_query = new WP_Query($posts);


?>

<section class="gamme--insta w-flex">
    <div class="container">
        <div class="gamme--insta__header">
            <div class="w-title">
                <div class="headline"><?php echo $surtitle ?></div>
                <h2 class="h2"><?php echo $title ?></h2>
            </div>
            <div class="btn-container">
                <a href="<?php echo $link['url'] ?>" class="btn btn--secondary"><?php echo $link['title'] ?></a>
            </div>
        </div>
        <div class="gamme--insta__sliders">
            <div class="swiper-container gamme--insta__slider gamme--insta__slider--top" js-slider-insta>
                <div class="swiper-wrapper">
                     <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        $postName = get_field('instagram_model_name');
                        $postImageID = get_field('instagram_image')['id'];

                ?>
                        <div class="swiper-slide gamme--insta__w-item">
                            <div class="img-container">
                                 <?php echo wp_get_attachment_image($postImageID, 'large') ?>
                            </div>
                        </div>
                        
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
                </div>
               
            </div>

            <div class="swiper-container gamme--insta__slider gamme--insta__slider--bottom" js-slider-insta dir="rtl">
                <div class="swiper-wrapper">
                     <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        $postName = get_field('instagram_model_name');
                        $postImageID = get_field('instagram_image')['id'];

                ?>
                        <div class="swiper-slide gamme--insta__w-item">
                            <div class="img-container">
                                 <?php echo wp_get_attachment_image($postImageID, 'large') ?>
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