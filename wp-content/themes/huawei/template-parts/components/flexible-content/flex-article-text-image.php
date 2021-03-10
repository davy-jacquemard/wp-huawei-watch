<?php
$text_position = get_sub_field('text_position');
$text = get_sub_field('text');
$add_btn = get_sub_field('add_btn');
$button = get_sub_field('button');
$image = get_sub_field('image');
?>

<?php if ($text_position == 'left') {
    $class_position = 'left';
} else {
    $class_position = 'right';
}
?>


<section class="w-flex flexible-txt-img">
    <div class="container">
        <div class="row">
            <div class="flexible-txt-img__inner--<?php echo $class_position ?> flexible-txt-img__inner">

                <div class="flexible-txt-img__side-text wysiwyg w-text">
                    <?php echo $text ?>
                    <?php
                    if ($button) { ?>
                        <a class="btn btn--primary flexible-txt-img__btn btn--big "
                           href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a>
                    <?php } ?>
                </div>

                <div class="flexible-txt-img__side-img">
                    <div class="img-container">
                        <?php echo wp_get_attachment_image($image['id'], 'large') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>