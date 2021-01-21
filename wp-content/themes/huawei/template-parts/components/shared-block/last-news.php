<?php

$lastNews = get_field('last_news', 'option');
$surtitle = $lastNews['box_title']['sur_title'];
$title = $lastNews['box_title']['title'];
$link = $lastNews['link'];

/* echo '<pre>';
print_r($surtitle);
echo '</pre>';
 */

$args = array(
    'post_type' => 'articles',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'order' => 'ASC',
    'orderby' => 'date',
);

$the_query = new WP_Query($args);
?>

<section class="w-flex last-news">
    <div class="container">
        <div class="last-news__header">
            <div class="w-title">
                <div class="headline"><?php echo $surtitle ?></div>
                <h2 class="h2"><?php echo $title ?></h2>
            </div>
            <div class="btn-container">
                <a href="<?php echo $link['url'] ?>" class="btn btn--secondary"><?php echo $link['title'] ?></a>
            </div>
        </div>
        <div class="row">
            <div class="last-news__list">


                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post();

                        $fields = get_field('article_header');

                        $title = $fields['title']; 
                        $image = $fields['image'];?>

                        <?php echo $title ?>
                        <?php echo $image['url'] ?>

                <?php
                    }
                }
                wp_reset_postdata();
                ?>


            </div>
        </div>
    </div>
</section>