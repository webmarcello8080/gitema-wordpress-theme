<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';
foreach ( glob( GITEMA_PATH .'/classes/*.php') as $filename)
{
    include_once $filename;
}
$GitemaAdmin = new GitemaAdmin;

/*
 * include CSS JS files 
 */
function gitema_script_unqueue(){

    wp_enqueue_style( 'customstyle', GITEMA_CSS_URL . '/style.css' , array(), GITEMA_VERSION, 'all' );
    wp_enqueue_script( 'customscript', GITEMA_JS_URL . '/script.js', array(), GITEMA_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'gitema_script_unqueue' );
