<?php 
    $upload_dir = wp_get_upload_dir()["base_url"];
    $idProduct = get_the_ID();
    $product = wc_get_product($idProduct);

    $price = $product->price;
    $attributes = $product->attributes;

    $attributes_strap_color = "couleur-du-bracelet";
    $attributes_size = "taille-du-cadran";

    $strap_colors = $attributes[$attributes_strap_color]["options"];

    echo "<pre>";   
        print_r($product);
    echo "</pre>";

?>


<section class="product--header">
    <div class="product--header__bg-color" js-bg-color></div>


    <div class="container">
        <div class="row">
            <div class="w-header">

                <div class="product--header__images">
                    <div class="product--header__images__title on-dark">
                        <div class="product--header__main-infos__color h2">Vert Sapin</div>
                        <div class="product--header__main-infos__cad    ran headline">Cadran 42 mm</div>
                    </div>


                    <div class="w-main-container" js-main-image>
                        <div class="product--header__images__main-container">
                            <img src="./../static/img/watch/elite/dark/elite-dark.png"
                                 alt="Image principale de la montre">
                        </div>
                    </div>
                    <div class="w-thumbnails">
                        <div class="product--header__images__thumbnail">

                        </div>
                        <div class="product--header__images__thumbnail">

                        </div>
                        <div class="product--header__images__thumbnail">

                        </div>
                    </div>
                </div>

                <div class="product--header__infos">
                    <h1 class="product--header__infos__title h1">
                        Huawei Watch GT2
                    </h1>
                    <div class="product--header__infos__custom">
                        <div class="product--header__infos__custom__cadran custom">
                            <p class="custom__title p--bold">
                                Taille du cadran
                            </p>
                            <form action="">
                                <div class="custom__content">

                                    <div class="option">
                                        <label for="option1">42mm</label>
                                        <input checked id="option1" name="cadran" type="radio" value="42">
                                    </div>
                                    <div class="option">
                                        <label for="option2">46mm</label>
                                        <input id="option2" name="cadran" type="radio" value="46">
                                    </div>

                                </div>
                            </form>
                        </div>
                        <div class="product--header__infos__custom__colors custom">
                            <p class="custom__title p--bold">
                                Couleur de la montre
                            </p>
                            <div class="custom__content">
                                <ul class="w-colors">
                                <?php foreach($strap_colors as $strap_color) :?> 
                                        <div class="color active" style="background-color: #3C5C5B" js-color-choice></div>
                                <?php endforeach ?>
                     <!--                <div class="color" style="background-color: #000000" js-color-choice></div>
                                    <div class="color" style="background-color: #A7A7A7" js-color-choice></div>
                                    <div class="color" style="background-color: #E0BC91" js-color-choice></div>
                                    <div class="color" style="background-color: #C34C35" js-color-choice></div> -->
                                    
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="product--header__infos__cta">
                        <div class="product--header__infos__cta__price h2">
                            149,99€
                        </div>
                        <?php echo do_shortcode( '[add_to_cart id='.$idProduct.']' ); ?>
                        <a href="#" class="product--header__infos__cta__button btn btn--primary">
                            Ajouter au panier
                        </a>
                    </div>
                    <div class="product--header__infos__reassurance">
                        <div class="reassurance">
                            <div class="reassurance__icon"></div>
                            <p class="reassurance__text p p--bold">Paiement sécurisé</p>
                        </div>
                        <div class="reassurance">
                            <div class="reassurance__icon"></div>
                            <p class="reassurance__text p p--bold">SAV 24/24H 7/7J</p>
                        </div>
                        <div class="reassurance">
                            <div class="reassurance__icon"></div>
                            <p class="reassurance__text p p--bold">Livraison sécurisée</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>