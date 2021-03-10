    <?php
        $page_for_posts_ID = get_option( 'page_for_posts' );
        $archiveTitle = get_field('archive-title', $page_for_posts_ID);
    ?>
    <div class="container subtitle" id="articles">
        <h3 class="h3 w-title"><?php echo($archiveTitle);?></h3>
    </div>
    
