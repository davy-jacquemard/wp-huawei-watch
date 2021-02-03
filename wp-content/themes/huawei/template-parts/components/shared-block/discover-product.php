<?php
$gt2Title = get_field('discover_gt2_title', 'option');
$gt2Text = get_field('discover_gt2_text', 'option');
$gt2Price = get_field('discover_gt2_price', 'option');
$gt2Link = get_field('discover_gt2_link', 'option');
$gt2ImageID = get_field('discover_gt2_image', 'option')['ID'];

$gt2ProTitle = get_field('discover_gt2-pro_title', 'option');
$gt2ProText = get_field('discover_gt2-pro_text', 'option');
$gt2ProPrice = get_field('discover_gt2-pro_price', 'option');
$gt2ProLink = get_field('discover_gt2-pro_link', 'option');
$gt2ProImageID = get_field('discover_gt2-pro_image', 'option')['ID'];

$actualPageID = get_the_ID();
$actualPageCats = get_the_terms($actualPageID, 'product_cat');
$displayGT2Pro = true;

if ($actualPageCats) {
    $actualCatSlug = $actualPageCats[0]->slug;

    if ($actualCatSlug == 'gt2-pro') {
        $displayGT2Pro = false;
    }
}


?>

<section class="discover-product on-dark on-dark-bg">
    <div class="discover-product__img-container">
    <?php echo wp_get_attachment_image($displayGT2Pro ?  $gt2ProImageID : $gt2ImageID, 'large') ?>

    </div>
    <div class="container">
        <div class="row">
            <div class="discover-product__content w-flex">
                <h3 class="discover-product__title h3"><?php echo $displayGT2Pro ?  $gt2ProTitle : $gt2Title ?></h3>
                <p class="discover-product__text p"><?php echo $displayGT2Pro ?  $gt2ProText : $gt2Text ?></p>
                <div class="discover-product__bottom">
                    <a href="<?php echo $displayGT2Pro ?  $gt2ProLink['url'] : $gt2Link['url'] ?>" class="discover-product__btn btn btn--primary btn--big">
                        <?php echo $displayGT2Pro ?  $gt2ProLink['title'] : $gt2Link['title'] ?>
                    </a>
                    <div class="h3 discover-product__price"><?php echo $displayGT2Pro ?  $gt2ProPrice : $gt2Price ?> €</div>
                </div>

            </div>
        </div>
    </div>
</section>