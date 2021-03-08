<?php get_header() ?>

<?php $id = get_the_ID() ; ?>



<div class="main">


    <section class="page-header on-dark" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>') "  >
        <div class="page-header__inner w-flex">
            <div class="container">
                <h1 class="h2 page-header__title">
                    <?php echo get_the_title() ?>
                </h1>
            </div>
        </div>
    </section>

    <?php
    // check if the flexible content field has rows of data
    if (have_rows('flex-article', $id)) :

        // loop through the selected ACF layouts and display the matching partial
        while (have_rows('flex-article', $id)) : the_row();

            get_template_part('template-parts/components/flexible-content/' . get_row_layout());


        endwhile;

    elseif (get_the_content()) :

    // no layouts found

    endif;

    ?>
</div>


<?php get_footer() ?>