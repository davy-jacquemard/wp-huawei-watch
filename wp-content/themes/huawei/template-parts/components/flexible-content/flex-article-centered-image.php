<?php

$img_centered = get_sub_field('image');

?>
<section class="w-flex flexible-centered-image">
    <div class="container">
        <div class="row">
            <div class="flexible-centered-image__inner">
                <div class="flexible-centered-image__img">
                    <?php echo wp_get_attachment_image($img_centered['id'], 'large') ?>
                </div>
            </div>
        </div>
    </div>
</section>