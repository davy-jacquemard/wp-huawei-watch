<?php
$section = get_field('gamme_finition');
$title_box = $section['box_title'];

$count = 0;
$finitions = $section['all_finitions'];
if (is_array($finitions)) {
  $count = count($finitions);
};

if($count > 2) {
    $class = 'hidden';
} else {
    $class = 'visible';
}

?>

<section class="w-flex gamme--finitions">
    <div class="container">
        <div class="w-title">
            <div class="headline"><?php echo $title_box['surtitle'] ?></div>
            <h2 class="h2"><?php echo $title_box['title'] ?></h2>
        </div>
    </div>
    <div class="gamme--finitions__finitions">
        <?php
        if (have_rows('gamme_finition')) : while (have_rows('gamme_finition')) : the_row();
                if (have_rows('all_finitions')) : while (have_rows('all_finitions')) : the_row();
        ?>
                        <div class="gamme--finitions__item <?php echo $class ?>">
                    
                        <img  class="gamme--finitions__item__image" src="<?php echo get_sub_field('image')['url'] ?>" alt="<?php echo get_sub_field('image')['alt'] ?>">
                            <div class="h1 gamme--finitions__item__title"><?php echo get_sub_field('title') ?></div>
                            <p class="p gamme--finitions__item__text"><?php echo get_sub_field('text') ?></p>
                            <div class="btn btn--primary btn--big gamme--finitions__item__btn"><?php echo get_sub_field('link')['title'] ?></div>
                        
                                <a href="<?php echo get_sub_field('link')['url'] ?>" class="full-link"></a>

            

                        </div>

        <?php
                    endwhile;
                endif;
            endwhile;
        endif;
        ?>



    </div>
</section>