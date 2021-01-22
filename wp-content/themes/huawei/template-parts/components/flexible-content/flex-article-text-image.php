<?php 
$text_position = get_sub_field('text_position');
$text = get_sub_field('text');
$add_btn = get_sub_field('add_btn');
$link = get_sub_field('link');
$image = get_sub_field('image');



?>

<?php if($text_position == 'left'){

    $class_position = 'left';
    $class_margin_position_txt = "margin-position-left";
    $class_margin_position_img = "margin-position-left";
 }
 else{
    $class_position = 'right';
    $class_margin_position_txt = "margin-position-right";
    $class_margin_position_img = "margin-position-right";
 }
 ?>


<section class="w-flex">
    <div class="container flexible-txt-img ">

        <div class="row">
                <div class="flexible-txt-img__inner--<?php echo $class_position ?> flexible-txt-img__inner">               

                    <div class="flexible-txt-img__side-text flexible-txt-img__side-text--<?php echo $class_margin_position_txt ?> wysiwyg w-text">
                        <?php echo $text ?>
                        </br>
                        <?php
                        if($add_btn !== 'empty'){ ?>
                            <a class="btn btn--secondary flexible-txt-img__btn btn--big " href="<?php echo $link ?>"><?php echo $link['title'] ?></a>  
                        <?php }?>
                    </div>
                    <div class="flexible-txt-img__side-img flexible-txt-img__side-img--<?php echo $class_margin_position_img ?>">
                        <img class="" src="<?php echo $image['url'] ?>" alt="">
                    </div>   
        
                </div> 
                </div>
    </div>
</section>