<?php 

$img_centered = get_sub_field('image')

?> 
<section class="w-flex">

    <div class="container flexible-centered-image">
        <div class="row flexible-centered-image__row">
            <div class="flexible-centered-image__inner">
                <img class="flexible-centered-image__img" src="<?php echo $img_centered['url'] ?>" alt="">
            </div>
        </div>
</div>
</section>