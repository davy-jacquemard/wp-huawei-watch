<?php 

$insta = get_field('gamme_instagram');
$surtitle = $insta['titles']['surtitle'];
$title = $insta['titles']['title'];
$link = $insta['link'];


?>

<section class="gamme--insta w-flex">
    <div class="container">
    <div class="gamme--insta__header">
            <div class="w-title">
                <div class="headline"><?php echo $surtitle ?></div>
                <h2 class="h2"><?php echo $title ?></h2>
            </div>
            <div class="btn-container">
                <a href="<?php echo $link['url'] ?>" class="btn btn--secondary"><?php echo $link['title'] ?></a>
            </div>
        </div>
    </div>
</section>