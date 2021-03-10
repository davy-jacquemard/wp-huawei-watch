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
$archive = get_field('archive', $page_for_posts_ID);


// echo '<pre>';
//   print_r($header);
// echo '</pre>';



?>

<div class="head" style="background-image: url('<?php echo esc_url($image); ?>');">
  <div class="container">
    <h1 class="h1"> <?php echo $titre; ?></h1>
    <p> <?php echo $intro; ?></p>
    <a class="btn btn--primary btn--big" href="#articles">Lire nos articles</a>
  </div>
</div>
<h2></h2>

<!-- <img src="<?php echo esc_url($image); ?>" alt=""> -->
