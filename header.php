<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="<?= THEME_CSS_URL ?>/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="<?= THEME_JS_URL ?>/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="<?= THEME_JS_URL ?>/bootstrap.min.js"></script>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>