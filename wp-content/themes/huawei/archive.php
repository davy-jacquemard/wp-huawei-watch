<?php
/*
Template Name: Archives articles
*/
?>

<?php get_header(); ?>
<div class="main">


<?php
/*
Template Name: Page d'archives
*/
?>
<div class="main">
    <h1 class="h1">Page archive</h1>
    <div id="content" role="main">

        <?php the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>

    </div><!-- #content -->

    
</div>
<?php get_footer() ?>