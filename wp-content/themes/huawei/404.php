<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php the_title() ?></title>

    <?php wp_head(); ?>

</head>

<body>
    <div class="container">
    <h1 class="h1">404 - La page que vous recherchez n'existe pas.</h1>
    </div>

    <?php wp_footer(); ?>
</body>

</html>