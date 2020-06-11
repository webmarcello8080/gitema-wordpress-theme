<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/config.php';

Redux::setArgs( $opt_name, $args );

new GitemaAdmin;
