<section class="fonctions">
<?php 
if( have_rows('fonctions') ):

    while( have_rows('fonctions') ) : the_row();

        $title = get_sub_field('fonctions_title');
        $desc = get_sub_field('fonctions_description');
        $image = get_sub_field('fonctions_image'); 
        ?>

        <h2 class="h2"><?php echo $title ?></h2>
        <p class="p"><?php echo $desc ?></p>
        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">


        <?php 
    endwhile;

else :
   
endif;
?>
</section>