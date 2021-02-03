<section class="product--reassurance w-flex">
    <div class="container">
        <div class="row">
            <?php if (have_rows('product_stats')) : while (have_rows('product_stats')) : the_row(); ?>
                    <?php
                    $imageID = get_sub_field('icon')['id'];
                    $number = get_sub_field('number');
                    $text = get_sub_field('text');
                    ?>

                    <div class="product--reassurance__bloc">
                        <div class="product--reassurance__bloc__img-container">
                            <?php echo wp_get_attachment_image($imageID, 'large') ?>
                        </div>
                        <div class="product--reassurance__bloc__number h2"><?php echo $number ?></div>
                        <p class="product--reassurance__bloc__text p"><?php echo $text ?></p>
                    </div>

            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>