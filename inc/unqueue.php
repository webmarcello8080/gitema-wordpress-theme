<?php

/*
 * include CSS JS files 
 */
function gitema_script_unqueue(){

    wp_enqueue_style( 'customstyle', GITEMA_CSS_URL . '/style.css' , array(), GITEMA_VERSION, 'all' );
    wp_enqueue_script( 'customscript', GITEMA_JS_URL . '/script.js', array(), GITEMA_VERSION, true );

}
add_action( 'wp_enqueue_scripts', 'gitema_script_unqueue' );