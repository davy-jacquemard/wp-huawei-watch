
yo
<?php

    // The Query
    $args = array(
                    'post_type' => 'articles',
                    'post_status' => 'publish',
                    'posts_per_page'=>4,
                    'order'=>'ASC',
                    'orderby'=>'date',
                    );

    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
 
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            //your html here for latest 2

?>
COUcou
<?php 
    }

    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
?>
           
    