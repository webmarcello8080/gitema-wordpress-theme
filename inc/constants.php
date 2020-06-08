<?php

/* Define theme constant */
define('TEOGINA_URL', get_template_directory_uri() );
define('TEOGINA_PATH', get_template_directory() );
define('TEOGINA_CSS_URL', get_template_directory_uri() . '/assets/css' );
define('TEOGINA_JS_URL', get_template_directory_uri() . '/assets/js' );
define('TEOGINA_VERSION', wp_get_theme()->get( 'Version' ) );