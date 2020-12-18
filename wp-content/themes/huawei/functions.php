<?php

function theme_scripts_styles() {

    wp_enqueue_style( 'global', get_template_directory_uri() . '/build/css/global.css' );

    wp_enqueue_script( 'global', get_template_directory_uri() . '/static/scripts/global.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

 ?>