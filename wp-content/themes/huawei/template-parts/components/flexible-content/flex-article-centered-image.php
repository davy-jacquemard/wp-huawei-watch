<?php 

$img_centered = get_sub_field('image')

?> 
<section class="w-flex flexible-centered-image">
    <div class="container">
        <img class="flexible-centered-image__img" src="<?php echo $img_centered['url'] ?>" alt="">
    </div>
</section>