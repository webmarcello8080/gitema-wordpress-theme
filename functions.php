<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';

/*
 * include CSS function 
 */
function teogina_script_unqueue(){

    wp_enqueue_style( 'customstyle', TEOGINA_CSS_URL . '/style.css' , array(), TEOGINA_VERSION, 'all' );
    wp_enqueue_script( 'customscript', TEOGINA_JS_URL . '/script.js', array(), TEOGINA_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'teogina_script_unqueue' );

function teogina_setup() {
	
	add_theme_support('menus');
	
	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'theme' ),
		'footer'   => __( 'Footer Menu', 'theme' ),
	);

	register_nav_menus( $locations );
}
add_action('init', 'teogina_setup');