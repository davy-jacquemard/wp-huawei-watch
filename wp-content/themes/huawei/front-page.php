<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'template-parts/content', 'home' ); ?>

<?php endwhile;
else :

    get_template_part( 'template-parts/content', 'none' );
    
endif; ?>

<?php get_footer() ?>