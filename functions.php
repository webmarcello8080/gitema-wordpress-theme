<?php

/* Define theme constant */
define('THEME_URL', get_template_directory_uri() );
define('THEME_PATH', get_template_directory() );
define('THEME_CSS_URL', get_template_directory_uri() . '/assets/css' );
define('THEME_JS_URL', get_template_directory_uri() . '/assets/js' );
define('THEME_VERSION', wp_get_theme()->get( 'Version' ) );


function theme_files(){
  wp_enqueue_style("theme_main_styles", 'THEME_CSS_URL');
}

add_action("wp_enqueue_scripts", "theme_files");
   