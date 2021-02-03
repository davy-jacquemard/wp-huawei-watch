<?php
$faqTitle = get_field('faq_title', 'option');
?>

<section class="product--faq w-flex">
    <div class="container">
        <h2 class="product--faq__title h2"><?php echo $faqTitle ?></h2>
        <div class="row">
            <?php
            if (have_rows('faq_questions', 'option')) :

                while (have_rows('faq_questions', 'option')) : the_row();

                    $faqQuestion = get_sub_field('title');
                    $faqAnswer = get_sub_field('answer');
            ?>
                    <div class="product--faq__item" js-accordion>
                        <p class="product--faq__question p--medium p--bold" js-accordion-title>
                            <?php echo $faqQuestion ?>
                        </p>
                        <div class="product--faq__answer wysiwyg" js-accordion-content>
                            <?php echo $faqAnswer ?>
                            <div class="force-margin"></div>
                        </div>

                    </div>

            <?php endwhile;
            endif;
            ?>


        </div>
    </div>
</section>