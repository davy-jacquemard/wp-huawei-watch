<?php
// $header = get_field('archive_header');
// $id = get_the_ID();

// echo $header;
// echo $id;


$page_for_posts_ID = get_option( 'page_for_posts' );
$header = get_field('archive_header', $page_for_posts_ID);

echo '<pre>';
  print_r($header);
echo '</pre>';
?>
