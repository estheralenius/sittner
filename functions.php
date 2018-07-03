<?php

/**
 * Proper way to enqueue scripts and styles.
 */
function sittner_enqeue() {
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'sittner_enqeue' );

add_filter('show_admin_bar', '__return_false');
// ACF options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
        'page_title' => 'Socialt'
    ));
	
}