<?php
$app = get_field('gamme_app');
$title_box = $app['title_box'];
$subtitle = $app['sub-title'];
$slides = $app['slides'];
$title = $slides['title'];
$text = $slides['text'];
$picture = $slides['picture'];

?>

<section class="w-flex gamme--app">
    <div class="container">
        <div class="w-title">
            <div class="headline"><?php echo $title_box['surtitle'] ?></div>
            <h2 class="h2"><?php echo $title_box['title'] ?></h2>
            <h3 class="h3"><?php echo $app['title_inner'] ?></h3>
        </div>
        <div class="gamme--app__subtitle">
            <h3 class="h3"><?php echo $subtitle ?></h3>
        </div>
        <div class="row gamme--app__sliders">
            <div class="gamme--app__w-slider-image">
                <div class="gamme--app__slider-image swiper-container" js-slider-app-images>
                    <div class="swiper-wrapper">
                        <?php
                        if (have_rows('gamme_app')) : while (have_rows('gamme_app')) : the_row();
                                if (have_rows('gamme_app_slides')) : while (have_rows('gamme_app_slides')) : the_row();
                                        $image = get_sub_field('picture');
                                        $imageID = $image['id'];
                        ?>
                                        <div class="swiper-slide gamme--app__slider-image__container">
                                            <?php echo wp_get_attachment_image($imageID, 'large') ?>
                                        </div>


                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>

                    </div>
                </div>
                <div class="gamme--app__btn gamme--app__btn--prev" js-slider-app-prev>
                    <img src="<?php echo get_template_directory_uri() . '/static/img/icons/miniarrowbottom-gradient.svg' ?>" alt="Bouton précédent">
                </div>
                <div class="gamme--app__btn gamme--app__btn--next" js-slider-app-next>
                    <img src="<?php echo get_template_directory_uri() . '/static/img/icons/miniarrowbottom-gradient.svg' ?>" alt="Bouton suivant">
                </div>
            </div>

            <div class="gamme--app__w-slider-text">
                <div class="gamme--app__slider-text swiper-container" js-slider-app-text>
                    <div class="swiper-wrapper">
                        <?php
                        if (have_rows('gamme_app')) : while (have_rows('gamme_app')) : the_row();
                                if (have_rows('gamme_app_slides')) : while (have_rows('gamme_app_slides')) : the_row();
                                        $text = get_sub_field('text');
                                        $title = get_sub_field('title');
                        ?>
                                        <div class="swiper-slide gamme--app__slider-text__container">
                                            <h4 class="h4 title"><?php echo $title ?></h4>
                                            <p class="p"><?php echo $text ?></p>
                                        </div>


                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                        ?>

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>