<?php
// $header = get_field('archive_header');
// $id = get_the_ID();

// echo $header;
// echo $id;


$page_for_posts_ID = get_option( 'page_for_posts' );
$header = get_field('archive_header', $page_for_posts_ID);
$titre = $header['title'];
$intro = $header['text'];
$link = $header['link'];
$image = $header['image']['url'];



// echo '<pre>';
//   print_r($header);
// echo '</pre>';



?>

<div class="head ">
  <div class="container">
    <h1 class="h1"> <?php echo $titre; ?></h1>
    <p> <?php echo $intro; ?></p>
    <a class="btn btn--primary btn--big" href="<?php $link; ?>">Bouton</a>
  </div>
</div>


<style>
.head {background: url("<?php echo esc_url($image); ?>"); min-height: 40vh; display:flex; align-items: center; background-size: cover no-repeat; background-position: right;}
.head h1.h1, .head p {color: white; margin: 20px 0;}

</style>

<!-- <img src="<?php echo esc_url($image); ?>" alt=""> -->
