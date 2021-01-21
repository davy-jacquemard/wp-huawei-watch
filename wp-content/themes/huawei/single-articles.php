<?php get_header() ?>
<div class="main">
    <?php

    $id = get_the_ID();

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