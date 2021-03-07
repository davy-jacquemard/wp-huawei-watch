<?php
$section_left = get_field('gamme_cta')['left'];
$section_right = get_field('gamme_cta')['right'];

?>


<section class="gamme--cta w-flex on-dark on-dark-bg">
    <div class="gamme--cta__inner">
        <div class="gamme--cta__watch gamme--cta__watch--left">
            <div class="gamme--cta__watch__image">
                <?php echo wp_get_attachment_image($section_left['image']['id'], 'medium') ?>
                <div class="radial-bg"></div>
            </div>
            <div class="gamme--cta__watch__btn">
                <a class="btn btn--primary btn--big" href="<?php echo $section_left['link']['url'] ?>"><?php echo $section_left['link']['title'] ?></a>
            </div>
        </div>
        <div class="gamme--cta__watch gamme--cta__watch--right">
            <!--  -->
            <div class="gamme--cta__watch__image">
                <?php echo wp_get_attachment_image($section_right['image']['id'], 'medium') ?>
                <div class="radial-bg"></div>
            </div>
            <div class="gamme--cta__watch__btn">
                <a class="btn btn--secondary btn--big" href="<?php echo $section_right['link']['url'] ?>"><?php echo $section_right['link']['title'] ?></a>
            </div>
        </div>

    </div>

</section>