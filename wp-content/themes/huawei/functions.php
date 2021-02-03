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

// ACF 
require_once( __DIR__ . '/functions/acf.php');

// SVG support 
require_once( __DIR__ . '/functions/svg-support.php');




function theme_scripts_styles() {

    wp_enqueue_style( 'global', get_template_directory_uri() . '/build/styles/global.css' );

    wp_enqueue_script( 'global', get_template_directory_uri() . '/build/scripts/global.js', array(), '', true );

    if( is_single() && get_post_type() === 'product' ) {
        wp_enqueue_script( 'product', get_template_directory_uri() . '/build/scripts/product.js', array(), '', true );
    }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );





add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}


///////////
/// Delete editor
//////////

function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'tpl-gamme.php':
                remove_post_type_support('page', 'editor');
                break;
            default :
                // Don't remove any other template.
                break;
        }
    }
}
add_action('init', 'remove_editor');

 ?>