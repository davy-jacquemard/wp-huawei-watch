<?php get_header() ?>

<div class="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

    <?php endwhile;
    else :



        get_template_part( 'template-parts/content', 'none' );

    endif; ?>

</div>

<?php get_footer() ?>