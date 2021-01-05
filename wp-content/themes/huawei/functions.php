<?php

add_theme_support( 'menus' );

function wpb_custom_new_menu() {
    register_nav_menu('main-menu',__( 'Haut-de-page' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

if ( ! defined( 'BUILD_URI' ) ) {
    define( 'BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/build');
}

// Walker Nav Menu.
require_once get_template_directory() . '/classes/class-crd-walker-menu.php';

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

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

 ?>