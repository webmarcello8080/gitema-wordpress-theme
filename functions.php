<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';

/*
 * include CSS JS files 
 */
function teogina_script_unqueue(){

    wp_enqueue_style( 'customstyle', TEOGINA_CSS_URL . '/style.css' , array(), TEOGINA_VERSION, 'all' );
    wp_enqueue_script( 'customscript', TEOGINA_JS_URL . '/script.js', array(), TEOGINA_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'teogina_script_unqueue' );

/*
 * set menus and menu names
 */
function teogina_menu_setup() {
	
	add_theme_support('menus');
	
	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'theme' ),
		'footer'   => __( 'Footer Menu', 'theme' ),
	);

	register_nav_menus( $locations );
}
add_action('init', 'teogina_menu_setup');

/*
 * set widgets and widget positions
 */
function teogina_widget_setup() {
	
	register_sidebar( 
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'sidebar-custom',
			'description' => 'This is the Standard Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action('widgets_init', 'teogina_widget_setup');

/*
 * set hooks to activate post-thumbnails and custom-background
 */
add_theme_support('custom-background');
add_theme_support('post-thumbnails');