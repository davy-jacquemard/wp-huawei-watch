<?php 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Footer');

	acf_add_options_page(array(
		'page_title'     => 'Blocs partagés',
		'menu_title'     => 'Blocs partagés',
		'menu_slug'      => 'shared-blocs',
		'parent_slug'    => '',
		'position'       => false,
		'icon_url'       => 'dashicons-align-left',
	));

/* 	acf_add_options_sub_page(array(
		'page_title'     => 'Derniers posts instagram',
		'menu_title'     => 'Derniers posts instagram',
		'menu_slug'      => 'shared-blocs-insta',
		'parent_slug'    => 'shared-blocs',
		'position'       => false,
		'icon_url'       => false,
	)); */
	acf_add_options_sub_page(array(
		'page_title'     => 'Section derniers articles',
		'menu_title'     => 'Derniers articles',
		'menu_slug'      => 'shared-blocs-last-news',
		'parent_slug'    => 'shared-blocs',
		'position'       => false,
		'icon_url'       => false,
	));
	acf_add_options_sub_page(array(
		'page_title'     => 'Newsletter',
		'menu_title'     => 'Newsletter',
		'menu_slug'      => 'shared-blocs-newsletter',
		'parent_slug'    => 'shared-blocs',
		'position'       => false,
		'icon_url'       => false,
	));

	
	
	
}
