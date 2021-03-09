<?php
$section = get_field('gamme_finition');
$title_box = $section['box_title'];

$count = 0;
$finitions = $section['all_finitions'];
if (is_array($finitions)) {
    $count = count($finitions);
};


$finitionSlug = '';
if (is_front_page()) {
    $finitionSlug = 'gt2';
} else {
    $finitionSlug ='gt2-pro';
}


$args = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'slug',
            'terms'    => $finitionSlug,
        ),
    ),
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'date',
);
$the_query = new WP_Query($args);
if ($the_query->found_posts > 2) {
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
        if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
        $the_query->the_post();

        $finitionID = $post->ID;
        $image = get_post_thumbnail_id($finitionID);
        $title = get_field('product_short_name', $finitionID);
            $text = get_field('product_short_desc', $finitionID);
            $permalink = get_permalink($finitionID);


        ?>


                        <div class="gamme--finitions__item <?php echo $class ?>">

                            <?php echo wp_get_attachment_image($image, 'large gamme--finitions__item__image') ?>
                            <div class="h1 gamme--finitions__item__title"><?php echo $title ?></div>
                            <?php if ($text) : ?>
                                <p class="p gamme--finitions__item__text"><?php echo $text ?></p>
                            <?php endif; ?>

                            <div class="btn btn--primary btn--big gamme--finitions__item__btn">Personnaliser</div>

                            <a href="<?php echo $permalink ?>" class="full-link"></a>



                        </div>

            <?php
        }
        }
        wp_reset_postdata();
        ?>



    </div>
</section>