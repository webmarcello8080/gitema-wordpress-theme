<?php

/*
* This class manages the front-end of the theme
*/
class GitemaHtml {

    public function __construct(){

        // import CSS and JS on front-end
        add_action( 'wp_enqueue_scripts', array($this, 'unqueue_script') );

        // remove emoji inline css
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );

        // remove version string from js and css
        add_filter( 'script_loader_src', array($this, 'remove_wp_version_strings') );
        add_filter( 'style_loader_src', array($this, 'remove_wp_version_strings') );

        //remove metatag generator from header
        add_filter( 'the_generator', array($this, 'remove_meta_version') );

    }

    /*
    * include CSS JS files 
    */
    public function unqueue_script(){

        wp_enqueue_style( 'custom_style', GITEMA_CSS_URL . '/style.css' , array(), GITEMA_VERSION, 'all' );
        wp_enqueue_style( 'dynamic_style', GITEMA_CSS_URL . '/dynamic.css' , array(), GITEMA_VERSION, 'all' );
        wp_enqueue_script( 'custom_script', GITEMA_JS_URL . '/script.js', array(), GITEMA_VERSION, true );

    }

    /*
    * clean up useless html/inline css code from head 
    */
    /* remove version string from js and css */
    public function remove_wp_version_strings( $src ) {
        
        global $wp_version;
        parse_str( parse_url($src, PHP_URL_QUERY), $query );
        if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
            $src = remove_query_arg( 'ver', $src );
        }
        return $src;
        
    }

    /* remove metatag generator from header */
    public function remove_meta_version() {
        return '';
    }

}