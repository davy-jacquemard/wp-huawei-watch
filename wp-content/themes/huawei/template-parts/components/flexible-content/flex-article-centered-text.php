<?php

$text_centered = get_sub_field('text');
$button = get_sub_field('button');

?>

<section class="w-flex flex-centered-text">
    <div class="container">
        <div class="row">
            <div class="wysiwyg">
                <?php echo $text_centered ?>
                <?php if ($button) : ?>
                    <a href="<?php echo $button['link'] ?>" class="btn btn--primary">
                        <?php echo $button['title'] ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>