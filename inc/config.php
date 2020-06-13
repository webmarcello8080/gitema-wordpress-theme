<?php

/* Define theme constant */
define('GITEMA_URL', get_template_directory_uri() );
define('GITEMA_PATH', get_template_directory() );
define('GITEMA_CSS_URL', get_template_directory_uri() . '/assets/css' );
define('GITEMA_JS_URL', get_template_directory_uri() . '/assets/js' );
define('GITEMA_VERSION', wp_get_theme()->get( 'Version' ) );

/* Import Redux framework and framework config */
if (!class_exists('ReduxFramework') && file_exists( GITEMA_PATH . '/inc/ReduxCore/framework.php')){
    include ( GITEMA_PATH . '/inc/ReduxCore/framework.php');
}
if (!isset($redux_demo) && file_exists( GITEMA_PATH . '/inc/ReduxCore/config.php')){
    include ( GITEMA_PATH . '/inc/ReduxCore/config.php'); 
}

/* Import classes */
foreach ( glob( GITEMA_PATH .'/classes/*.php') as $filename)
{
    include_once $filename;
}

require GITEMA_PATH . '/inc/admin-menu.php';