<?php

$img_full = get_sub_field('image')

?>

<section class="flexible-img-full">
    <?php echo wp_get_attachment_image($img_full['id'], 'large') ?>
</section>