<?php
$articleHeader = get_field('article_header');
$id = get_the_ID();
 ?>
<div>
    <pre>
     <?php print_r ($articleHeader); ?> </br>
     </pre>

     <p><?php print_r($id);?></p>
     

     <?php print_r(get_the_category($id)); ?>

</div>
<div class="row">
    <div class="news-container">
        <div class="card-news">
            <a href="<?php the_permalink(); ?>" class="full-link"></a>
            <div class="card-news__container-img">
                <img src="<?php echo $articleHeader['image']['sizes']['medium_large']; ?>" alt="<?php echo $articleHeader['image']['alt']; ?>">
            </div>
            <div class="card-news__container-text">
                <p class="card-news__category"><?php the_category($id); ?></p>
                <h5 class="card-news__title h5">
                    <?php echo $articleHeader['title']; ?>
                </h5>
                <p class="card-news__date"><?php the_date(); ?></p>
                <a href="" class="card-news__links btn btn__simple">Lire plus <i
                        class="icon-miniarrowright"></i></a>
            </div>
        </div>
    </div>
</div>