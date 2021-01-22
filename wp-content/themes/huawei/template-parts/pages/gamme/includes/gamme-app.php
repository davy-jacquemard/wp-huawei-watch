<?php
$app = get_field('gamme_app');
$title_box = $app['title_box'];
$pictures = $app['pictures'];
$title_box_inner = $app['title_box_inner'];
$links = $app['links'];

?>

<section class="w-flex gamme--app">
    <div class="container">
        <div class="w-title">
            <div class="headline"><?php echo $title_box['surtitle'] ?></div>
            <h2 class="h2"><?php echo $title_box['title'] ?></h2>
        </div>
        <img src="<?php echo $pictures['picture']['url'] ?>" alt="<?php echo $pictures['picture']['alt'] ?>">
    </div>
    <div class="container">
        <h3 class="h3"><?php echo $title_box_inner['title-inner-first'] ?></h3>
        <h4 class="h4"><?php echo $title_box_inner['title-inner-second'] ?></h4>
        <ul class="primary-list">
            <li class="li"><a class="link"><?php echo $links['link'][1] ?></a></li>
            <li class="li"><a class="link"><?php echo $links['link'][2] ?></a></li>
            <li class="li"><a class="link"><?php echo $links['link'][3] ?></a></li>
            <li class="li"><a class="link"><?php echo $links['link'][4] ?></a></li>
            <li class="li"><a class="link"><?php echo $links['link'][5] ?></a></li>
            <li class="li"><a class="link"><?php echo $links['link'][6] ?></a></li>
        </ul>
    </div>
</section>