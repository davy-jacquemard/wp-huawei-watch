<?php
$title = get_field('product_caracteristics_title');
?>

<section class="w-flex product--caracteristics">
    <div class="container">
        <h2 class="product--caracteristics__title h2"><?php echo $title ?></h2>
        <div class="row product--caracteristics__inner">
            <?php
            if (have_rows('product_caracteristics_items')) :

                while (have_rows('product_caracteristics_items')) : the_row();

                    $caracteristicTitle = get_sub_field('title');
            ?>
                    <div class="product--caracteristics__item">
                        <div class="headline"><?php echo $caracteristicTitle ?></div>
                        <ul class="primary-list product--caracteristics__list">
                            <?php
                            if (have_rows('product_caracteristics_sub-items')) :

                                while (have_rows('product_caracteristics_sub-items')) : the_row();

                                    $caracteristicItem = get_sub_field('text');
                            ?>
                                    <li><?php echo $caracteristicItem ?></li>
                            <?php endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>

            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</section>