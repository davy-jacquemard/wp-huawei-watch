<?php

if ( ! defined( 'BUILD_URI' ) ) {
    define( 'BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/build');
}

function theme_scripts_styles() {

    wp_enqueue_style( 'global', get_template_directory_uri() . '/build/styles/global.css' );

    wp_enqueue_script( 'global', get_template_directory_uri() . '/build/scripts/global.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );




if ( is_page( 'single-product' ) ) {

    function product_scripts_styles() {

        wp_enqueue_style( 'product', get_template_directory_uri() . '/build/styles/product.css' );

       // wp_enqueue_script( 'global', get_template_directory_uri() . '/build/scripts/global.js', array(), '', true );
    }

    add_action( 'wp_enqueue_scripts', 'product_scripts_styles' );
}

 ?>