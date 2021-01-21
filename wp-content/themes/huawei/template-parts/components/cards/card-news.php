
<div class="card-news">
    <a href="<?php echo $card->link ?>" class="full-link"></a>
    <div class="card-news__container-img">
        <img src="<?php echo $card['image_url']; ?>" alt="<?php echo $card['image_alt']; ?>">
    </div>
    <div class="card-news__container-text">
        <p class="card-news__category"><?php echo $card['category']; ?></p>
        <h5 class="card-news__title h5">
            <?php echo $card['title']; ?>
        </h5>
        <p class="card-news__date"><?php echo $card['date']; ?></p>
        <a href="" class="card-news__links btn btn__simple">Lire plus <i class="icon-miniarrowright"></i></a>
    </div>
</div>