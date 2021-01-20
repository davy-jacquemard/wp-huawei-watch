<?php
$header = get_field('gamme_header');

$btn_primary = $header['primary_btn'];
$btn_secondary = $header['secondary_btn'];

$btn_switch = $header['switch_section']['link'];

$image = $header['image'];


?>

<section class="gamme--header" style="background-image: url('<?php echo $image['url'] ?>') ;">
    <div class="container">
        <div class="row">
            <div class="gamme--header__inner">
                <h1 class="gamme--header__inner__title h1--big"><?php echo $header['title']; ?></h1>
                <p class="gamme--header__inner__text p--medium"><?php echo $header['text']; ?></p>
                <div class="btn-container">
                    <?php if ($btn_secondary['title']) : ?>
                        <a href="<?php echo $btn_secondary['url']; ?>" class="btn btn--secondary btn--big"><?php echo $btn_secondary['title']; ?></a>
                    <?php endif; ?>

                    <?php if ($btn_primary['title']) : ?>
                        <a href="<?php echo $btn_primary['url']; ?>" class="btn btn--primary btn--big"><?php echo $btn_primary['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php if ($header['is_switch_section']) : ?>
        <div class="gamme--header__switch on-dark on-dark-bg">
            <div class="gamme--header__switch__left">
                <h2 class="h2 gamme--header__switch__title"><?php echo $header['switch_section']['title']; ?></h2>
                <p class="p gamme--header__switch__text"><?php echo $header['switch_section']['text']; ?></p>
            </div>
            <div class="gamme--header__switch__right">
                <a href="<?php echo $btn_switch['url'] ?>" class="btn btn--primary"><?php echo $btn_switch['title'] ?></a>
            </div>
        </div>
    <?php endif; ?>


</section>