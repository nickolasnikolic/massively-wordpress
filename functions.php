<?php

function massively_theme_setup(){
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
	wp_enqueue_style('main-styles', get_template_directory_uri().'/assets/css/main.css');
	wp_enqueue_style('new-styles', get_template_directory_uri().'/assets/css/wp-massively.css');

	wp_enqueue_script('j-scrollex', get_template_directory_uri().'/assets/js/jquery.scrollex.min.js',array('jquery'), false, true);
	wp_enqueue_script('j-scrolly', get_template_directory_uri().'/assets/js/jquery.scrolly.min.js',array('jquery'), false, true);
	wp_enqueue_script('skel', get_template_directory_uri().'/assets/js/skel.min.js', array(), false, true);
	wp_enqueue_script('utils', get_template_directory_uri().'/assets/js/utils.js',array('jquery','skel'),false, true);
	wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery', 'skel', 'utils'), false, true);
}

add_action('wp_enqueue_scripts', 'massively_theme_setup');

function massively_init() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'massively_init' );


/* Change Excerpt length */
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( ‘excerpt_length’, ‘custom_excerpt_length’);