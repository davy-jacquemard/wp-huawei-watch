<?php
/*
Template Name: Archives articles
*/
?>

<?php get_header(); ?>
    <div class="main">
    <?php if ( have_posts() ) : ?>
        <h1 class="h1">Retrouvez tous les articles</h1>
        <div class="row archive-container">
            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/pages/archive/archive' );
                
            endwhile;

            the_posts_navigation();

            else :

            get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>            
        </div>  
    </div>
<?php get_footer() ?>