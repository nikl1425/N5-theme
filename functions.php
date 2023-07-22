<?php 

//Navigation Items
function nFive_navigation_menu() {

    register_nav_menu('header_menu', ( 'Header Menu' ));
}

add_action('init', 'nFive_navigation_menu');

//Assets
function custom_logo() {
    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'custom_logo' );


function nFive_theme_files() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action( 'wp_enqueue_scripts', 'nFive_theme_files' );
