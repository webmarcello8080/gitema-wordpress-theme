<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';
foreach ( glob( TEOGINA_PATH .'/classes/*.php') as $filename)
{
    include_once $filename;
}
$TeoginaAdmin = new TeoginaAdmin;

/*
 * include CSS JS files 
 */
function teogina_script_unqueue(){

    wp_enqueue_style( 'customstyle', TEOGINA_CSS_URL . '/style.css' , array(), TEOGINA_VERSION, 'all' );
    wp_enqueue_script( 'customscript', TEOGINA_JS_URL . '/script.js', array(), TEOGINA_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'teogina_script_unqueue' );