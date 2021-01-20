<?php
$advantages = get_field('gamme_advantages');


?>

<section class="gamme--sticky-scroll w-flex">
        <div class="stickyblock__w gamme--sticky-scroll__img-container js-sticky-image">
            <img class="stickyblock__image" src="<?php echo $advantages['image']['url'] ?>" alt="<?php echo $advantages['image']['alt'] ?>">
        </div>
   

    <div class="container">
        <div class="row">
            <div class="gamme--sticky-scroll__blocs">
                <?php
                if (have_rows('gamme_advantages')) : while (have_rows('gamme_advantages')) : the_row();
                        if (have_rows('gamme_advantages_blocs')) : while (have_rows('gamme_advantages_blocs')) : the_row();
                ?>
                                <div class="bloc">
                                    <h3 class="bloc__title w-title h3"><?php echo get_sub_field('title') ?></h3>
                                    <p class="bloc__text p"><?php echo get_sub_field('text') ?></p>
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

</section>