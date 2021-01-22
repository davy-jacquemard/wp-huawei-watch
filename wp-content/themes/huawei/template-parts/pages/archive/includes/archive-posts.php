<?php
$articleHeader = get_field('article_header');
$id = get_the_ID();
$date = get_the_date( 'd F Y', $id);
$taxo = get_the_terms($id, 'article_category');
$card = array(
    'link'      => get_permalink(),
    'image_url' => $articleHeader['image']['sizes']['medium_large'],
    'image_alt' => $articleHeader['image']['alt'],
    'category'  => $taxo[0]->name,
    'title'     => $articleHeader['title'],
    'date'      => $date,
)
 ?>

<div class="w-news">
    <?php 
    set_query_var( 'card', $card );
    get_template_part( 'template-parts/components/cards/card', 'news'); ?>
</div>