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



echo '<pre>';
  print_r($header);
echo '</pre>';



?>

<p> <?php echo $titre; ?></p>

<p> <?php echo $intro; ?></p>
<a href="<?php $link; ?>">Bouton</a>
<img src="<?php echo esc_url($image); ?>" alt="">
