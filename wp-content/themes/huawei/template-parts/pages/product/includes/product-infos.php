<?php
$currentIndex = 0;
?>
<section class="product--qualities w-flex">
    <div class="container">

        <?php
        if (have_rows('qualities')) :

            while (have_rows('qualities')) : the_row();
                $currentIndex++;
                $title = get_sub_field('title');
                $desc = get_sub_field('description');
                $imageID = get_sub_field('image')['id'];
                $image_pos = get_sub_field('img_position');
        ?>


                <div class="row">
                    <div class="product--qualities__inner product--qualities__inner--<?php echo $image_pos ?>">
                        <div class="product--qualities__text">
                            <h2 class="h2">0<?php echo $currentIndex ?>.<br><?php echo $title ?></h2>
                            <p class="p"><?php echo $desc ?></p>
                        </div>

                        <div class="product--qualities__image">
                            <div class="w-image">
                                <div class="img-container">
                                    <?php echo wp_get_attachment_image($imageID, 'large') ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endwhile;
        else :
        endif;
        ?>


    </div>
</section>