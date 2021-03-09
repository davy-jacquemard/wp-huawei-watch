<section class="gamme--video" id="#video">
    <?php

    // Load value.
    $iframe = get_field('gamme_full_screen_video');

    // Use preg_match to find iframe src.
    preg_match('/src="(.+?)"/', $iframe, $matches);
    $src = $matches[1];

    // Add extra parameters to src and replcae HTML.
    $params = array(
        'hd'        => 1,
        'autohide'  => 1,
        'loop'      => 1,
        'modestbranding' => 1,
        'autoplay' => 1,
    );
    $new_src = add_query_arg($params, $src);
    $iframe = str_replace($src, $new_src, $iframe);

    // Add extra attributes to iframe HTML.
    $attributes = 'frameborder="0"';
    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

    // Display customized HTML.
    echo $iframe;
   ?>
<?php //the_field('gamme_full_screen_video'); ?>

</section>