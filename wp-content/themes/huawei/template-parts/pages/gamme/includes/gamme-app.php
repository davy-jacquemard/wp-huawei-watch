<?php
$app = get_field('gamme_app');
$title_box = $app['title_box'];
$slides = $app['slides'];
$title = $slides['title'];
$text = $slides['text'];
$picture = $slides['picture'];

?>

<section class="w-flex gamme--app">
    <div class="container">
        <div class="w-title">
            <div class="headline"><?php echo $title_box['surtitle'] ?></div>
            <h2 class="h2"><?php echo $title_box['title'] ?></h2>
            <h3 class="h3"><?php echo $app['title_inner'] ?></h3>
        </div>
        <div class="row">
            <?php
            // Check rows exists.
            if( have_rows('pictures') ):

            // Loop through rows.
            while( have_rows('pictures') ) : the_row();

            // Load sub field value.
            $sub_value = get_sub_field('picture');
            // Do something...
                ?>
            <img srcset="" sizes="" src="<?php echo esc_url($picture['url']); ?>"
                alt="<?php echo esc_attr($picture['alt']); ?>">
            <?php
            // End loop.
            endwhile;

            // No value.
            else :
            // Do something...
            endif;
            ?>

        </div>
        <div class="row">
            <h4 class="h4"><?php echo $title ?></h4>
            <p class="p"><?php echo $text ?></p>
        </div>
    </div>
</section>