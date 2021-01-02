<section class="product--qualities">
    <div class="container">

        <?php
        if (have_rows('qualities')) :

            while (have_rows('qualities')) : the_row();

                $title = get_sub_field('title');
                $desc = get_sub_field('description');
                $image = get_sub_field('image');
        ?>


                <div class="row">
                    <div class="product--qualities__text">
                         <h2 class="h2"><?php echo $title ?></h2>
                    <p class="p"><?php echo $desc ?></p>
                    </div>

                    <div class="product--qualities__image">
                        <div class="w-image">
                            <div class="img-container">
                                 <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
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