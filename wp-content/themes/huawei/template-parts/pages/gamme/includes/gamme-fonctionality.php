<?php
$fonctionalities = get_field('gamme_feature');
?>

<section class="w-flex gamme--fonctionality">
    <div class="gamme--fonctionality__w-text">
        <?php if (have_rows('gamme_feature')) : while (have_rows('gamme_feature')) : the_row(); ?>
                <div class="bloc on-dark" js-home-vertical-slider-text>
                    <div class="container">
                        <div class="row">
                            <div class="bloc__inner">
                                <h3 class="bloc__title w-title h3"><?php echo get_sub_field('title') ?></h3>
                                <p class="bloc__text p"><?php echo get_sub_field('text') ?></p>
                            </div>

                        </div>

                    </div>

                </div>
        <?php endwhile;
        endif; ?>
    </div>

    <div class="gamme--fonctionality__inner">
        <div class="gamme--fonctionality__w-images" js-home-vertical-slider-w>
            <?php if (have_rows('gamme_feature')) : while (have_rows('gamme_feature')) : the_row(); ?>
                    <div class="gamme--fonctionality__image" id="image-<?php echo get_row_index(); ?>" js-home-vertical-slider-item>
                        <img src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>">

                    </div>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="gamme--fonctionality__pagination">
            <?php if (have_rows('gamme_feature')) : while (have_rows('gamme_feature')) : the_row(); ?>

                    <a href="#image-<?php echo get_row_index(); ?>" class="gamme--fonctionality__pagination__dot" js-home-vertical-slider-dot></a>

            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>