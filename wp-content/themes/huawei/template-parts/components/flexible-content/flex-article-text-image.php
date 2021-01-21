<?php 
$text_position = get_sub_field('text_position');
$text = get_sub_field('text');
$add_btn = get_sub_field('add_btn');
$link = get_sub_field('link');
$image = get_sub_field('image');



?>
<section class="w-flex flexible-text-img">
    <div class="container flexible-txt-img ">
        <p class="flexible-txt-img" ><?php echo $text ?></p>
        <img class="flexible-txt-img" src="<?php echo $image['url'] ?>" alt="">
    </div>
</section>