<?php
$header = get_field('gamme_header');

$btn_primary = $header['primary_btn'];
$btn_secondary = $header['secondary_btn'];


?>



<div class="container">
    <h1 class="h1"><?php echo $header['title']; ?></h1>
    <p class="p"><?php echo $header['text']; ?></p>

    <?php if ($btn_secondary['title']) : ?>
        <a href="<?php echo $btn_secondary['url']; ?>" class="btn btn--secondary"><?php echo $btn_secondary['title']; ?></a>
    <?php endif; ?>

    <?php if ($btn_primary['title']) : ?>
        <a href="<?php echo $btn_primary['url']; ?>" class="btn btn--primary"><?php echo $btn_primary['title']; ?></a>
    <?php endif; ?>

    <?php echo $header['switch_section']['title']; ?>
</div>