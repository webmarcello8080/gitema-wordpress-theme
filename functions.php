<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/constants.php';
require get_template_directory() . '/inc/unqueue-files.php';
require get_template_directory() . '/inc/cleanup-html.php';

// import classes
foreach ( glob( GITEMA_PATH .'/classes/*.php') as $filename)
{
    include_once $filename;
}
new GitemaAdmin;

