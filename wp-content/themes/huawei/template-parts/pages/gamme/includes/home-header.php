<?php 
$header = get_field('gamme_header');
?>



<div class="container">
    <h1 class="h1"><?php echo $header['title']; ?></h1>
    <p class="p"><?php echo $header['text']; ?></p>
    <?php echo $header['switch_section']['title']; ?>
</div>