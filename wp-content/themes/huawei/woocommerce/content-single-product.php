<?php
$upload_dir = wp_get_upload_dir()["base_url"];
$idProduct = get_the_ID();
$product = wc_get_product($idProduct);
$productName = $product->name;
$productSlug = $product->slug;

$price = $product->price;
$attributes = $product->attributes;
$default_attributes    = $product->default_attributes;

$attribute_strap_color = "pa_colors";
$attribute_size = "taille-du-cadran";

$strap_colors = $attributes[$attribute_strap_color]["options"];
$sizes = $attributes[$attribute_size]["options"];

$defaultColorSlug = $default_attributes[$attribute_strap_color];
$defaultColorName = get_term_by('slug', $defaultColorSlug, $attribute_strap_color)->name;
$defaultColorId = get_term_by('slug', $defaultColorSlug, $attribute_strap_color)->term_id;
$defaultColorHexa = get_term_meta($defaultColorId, 'product_attribute_color', true);


//IMAGES
$upload_dir            = wp_get_upload_dir()["baseurl"] . "/";

$cat_id = $product->category_ids[0];
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'terms'    => $cat_id,
        ),
    ),
);
$allGt2 = query_posts($args);
$productGamme = get_term_by('id', $cat_id, 'product_cat', 'ARRAY_A')['name']

?>

<?php
echo '<pre>';
//echo print_r($allGt2);
echo '</pre>';
?>



<section class="product--header">
    <div class="product--header__bg-color" js-bg-color style="background-color: <?php echo $defaultColorHexa ?>;"></div>


    <div class="container">
        <div class="row">
            <div class="w-header">

                <div class="product--header__images">
                    <div class="product--header__images__title on-dark">
                        <div class="product--header__main-infos__color h2" js-watch-color><?php echo $defaultColorName ?></div>
                        <div class="product--header__main-infos__cadran headline">Cadran <span js-watch-size><?php echo $default_attributes[$attribute_size] ?></span></div>
                    </div>


                    <div class="w-main-container swiper-container" js-main-image-container>
                        <div class="swiper-wrapper">
                            <div class="main-container swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-1" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-1" alt="Image principale de la montre">
                            </div>
                            <div class="main-container swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-2" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-2" alt="Image principale de la montre">
                            </div>
                            <div class="main-container swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-3" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-3" alt="Image principale de la montre">
                            </div>
                        </div>

                    </div>
                    <div class="w-thumbnails swiper-container" js-product-thumbs>
                        <div class="swiper-wrapper">
                            <div class="thumbnail swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-1" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-1" alt="Image principale de la montre">
                            </div>
                            <div class="thumbnail swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-2" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-2" alt="Image principale de la montre">
                            </div>
                            <div class="thumbnail swiper-slide">
                                <img js-product-image src="<?php echo $upload_dir ?><?php echo $productSlug ?>-<?php echo $defaultColorSlug ?>-3" data-source="<?php echo $upload_dir ?><?php echo $productSlug ?>-{color}-3" alt="Image principale de la montre">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="product--header__infos">
                    <h1 class="product--header__infos__title h1">
                        Watch <?php echo $productName ?>
                    </h1>
                    <div class="product--header__infos__custom">
                        <div class="product--header__infos__custom__cadran custom">
                            <h5 class="custom__title h5">
                                Taille du cadran
                            </h5>
                            <form action="">
                                <div class="custom__content">
                                    <?php foreach ($sizes as $size) : ?>
                                        <?php
                                        $isActive = ($default_attributes[$attribute_size] == $size) ? "is-active" : "";
                                        $classname = strtolower($size);
                                        ?>

                                        <div class="option-size <?php echo $isActive; ?>" js-product-filter data-attribute='<?php echo $attribute_size; ?>' data-value='<?php echo $size; ?>'>
                                            <div class="option-size__box"></div>
                                            <p class="option-size__title p"><?php echo $size; ?></p>
                                        </div>

                                    <?php endforeach ?>



                                </div>
                            </form>
                        </div>
                        <div class="product--header__infos__custom__colors custom">
                            <h5 class="custom__title h5">
                                Couleur de la montre
                            </h5>
                            <div class="custom__content">
                                <ul class="w-colors">
                                    <?php foreach ($strap_colors as $strap_color) : ?>
                                        <?php
                                        $activeColorSlug = get_term($strap_color, 'pa_colors')->slug;

                                        $activeColorName = get_term($strap_color, 'pa_colors')->name;

                                        $activeColorHexa = get_term_meta($strap_color, 'product_attribute_color', true);
                                        $isActive = ($default_attributes[$attribute_strap_color] == $activeColorSlug) ? "is-active" : "";
                                        $classname = strtolower($strap_color);
                                        ?>

                                        <div class="color <?php echo $classname; ?>  <?php echo $isActive; ?>" style="background-color: <?php echo $activeColorHexa ?>" js-color-choice js-product-filter data-attribute='<?php echo $attribute_strap_color; ?>' data-value='<?php echo $activeColorSlug; ?>' data-name='<?php echo $activeColorName ?>'></div>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="product--header__infos__cta">
                        <div class="product--header__infos__cta__price h2" js-product-price>
                            <?php echo $price ?>€
                        </div>
                        <!--  <?php echo do_shortcode('[add_to_cart id=' . $idProduct . ']'); ?> -->
                        <a href="#" class="product--header__infos__cta__button btn btn--primary">
                            Ajouter au panier
                        </a>
                    </div>
                    <div class="product--header__infos__reassurance">
                        <div class="reassurance">
                            <div class="reassurance__icon">
                                <img src="<?php echo get_template_directory_uri() . '/static/img/icons/reassurance-lock.svg' ?>" alt="Icône de réassurance paiment sécurisé">
                            </div>
                            <p class="reassurance__text p p--bold">Paiement sécurisé</p>
                        </div>
                        <div class="reassurance">
                            <div class="reassurance__icon">
                                <img src="<?php echo get_template_directory_uri() . '/static/img/icons/reassurance-sav.svg' ?>" alt="Icône de réassurance Service après vente">
                            </div>
                            <p class="reassurance__text p p--bold">SAV 24/24H 7/7J</p>
                        </div>
                        <div class="reassurance">
                            <div class="reassurance__icon">
                                <img src="<?php echo get_template_directory_uri() . '/static/img/icons/reassurance-delivery.svg' ?>" alt="Icône de réassurance livraison sécurisée">
                            </div>
                            <p class="reassurance__text p p--bold">Livraison sécurisée</p>
                        </div>
                    </div>

                    <div class="other-finitions">
                        <h4 class="h4 other-finitions__title">Autres finitions</h4>
                        <div class="other-finitions__inner">
                            <?php foreach ($allGt2 as $finition) : ?>
                                <?php
                                $finitionTitle = $finition->post_title;
                                $finitionName = explode(' ', $finitionTitle, 2)[1];
                                $finitionID = $finition->ID;
                                $finitionThumbnail = wp_get_attachment_url(get_post_thumbnail_id($finitionID))
                                ?>
                                <?php if ($finitionID != $idProduct) : ?>

                                    <div class="other-finitions__w-item">
                                        <div class="other-finitions__item">
                                            <div class="other-finitions__item__inner"
                                            style="background-image: url('<?php echo $finitionThumbnail ?>')">
                                                <div class="other-finitions__item__text-box">
                                                    <h5 class="h5"><?php echo $finitionName ?></h5>
                                                    <div class="btn btn--secondary">Voir</div>
                                                </div>
                                                <a href="<?php echo get_permalink($finitionID) ?>" class="full-link"></a>
                                            </div>
                                        </div>
                                    </div>

                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<div class="summary entry-summary" id="woocommerce-hidden">
    <?php
    /**
     * Hook: woocommerce_single_product_summary.
     *
     * @hooked woocommerce_template_single_title - 5
     * @hooked woocommerce_template_single_rating - 10
     * @hooked woocommerce_template_single_price - 10
     * @hooked woocommerce_template_single_excerpt - 20
     * @hooked woocommerce_template_single_add_to_cart - 30
     * @hooked woocommerce_template_single_meta - 40
     * @hooked woocommerce_template_single_sharing - 50
     * @hooked WC_Structured_Data::generate_product_data() - 60
     */
    do_action('woocommerce_single_product_summary');
    ?>
</div>



<?php do_action('woocommerce_after_single_product'); ?>