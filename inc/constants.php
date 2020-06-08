<?php

/* Define theme constant */
define('GITEMA_URL', get_template_directory_uri() );
define('GITEMA_PATH', get_template_directory() );
define('GITEMA_CSS_URL', get_template_directory_uri() . '/assets/css' );
define('GITEMA_JS_URL', get_template_directory_uri() . '/assets/js' );
define('GITEMA_VERSION', wp_get_theme()->get( 'Version' ) );