<?php 

$img_full = get_sub_field('image')

?> 


<section class="w-flex flexible-img-full">
    <div class="container-fluid">
            <img class="flexible-img-full__img" src="<?php echo $img_full['url'] ?>" alt="">
    </div>
</section>