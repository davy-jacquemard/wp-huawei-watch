<?php
$nTitle = get_field('newsletter_title', 'option');
$nText = get_field('newsletter_text', 'option');
?>

<section class="w-flex newsletter on-white">
    <div class="container">
        <div class="row">
            <div class="newsletter__inner">
                <div class="newsletter__bloc-text">
                    <h3 class="newsletter__title h3"><?php echo $nTitle ?></h3>
                    <p class="newsletter__text p"><?php echo $nText ?></p>
                    <img class="newsletter__icon" src="<?php echo get_template_directory_uri() . '/static/img/icons/newsletter-icon.png' ?>" alt="Icone newsletter">
                </div>

                <div class="newsletter__form">
                    <?php echo do_shortcode( '[mc4wp_form id="367"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
