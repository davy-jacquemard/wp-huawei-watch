<?php
$concept = get_field('gamme_concept');
$title_box = $concept['title_box'];

$reviews = $concept['reviews'];
?>

<section class="w-flex gamme--concept">
    <div class="gamme--concept__inner">
        <div class="container">
            <div class="row">
                <div class="gamme--concept__intro">
                    <div class="w-title">
                        <div class="headline"><?php echo $title_box['surtitle'] ?></div>
                        <h2 class="h2"><?php echo $title_box['title'] ?></h2>
                    </div>
                    <p class="p"><?php echo $concept['text'] ?></p>
                    <?php if ($concept['btn']) : ?>
                        <a href="<?php echo $concept['btn']['url'] ?>"
                           class="btn btn--primary btn--big gamme--concept__intro__btn"><?php echo $concept['btn']['title'] ?></a>

                    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="gamme--concept__image--mobile">
            <?php echo wp_get_attachment_image($concept['image']['id'], 'medium') ?>
        </div>

        <div class="container">
            <div class="row">
                <div class="gamme--concept__reviews">
                    <?php
                    if (have_rows('gamme_concept')) : while (have_rows('gamme_concept')) : the_row();
                        if (have_rows('gamme_reviews')) : while (have_rows('gamme_reviews')) : the_row();
                            ?>
                            <div class="review">
                                <p class="review__text p--medium"><?php echo get_sub_field('text') ?></p>
                                <p class="review__author p p--bold">- <?php echo get_sub_field('author') ?></p>
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
    <div class="gamme--concept__image--desktop">
        <?php echo wp_get_attachment_image($concept['image']['id'], 'large') ?>
    </div>
</section>