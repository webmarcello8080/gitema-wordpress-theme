<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?= GitemaSeo::gitemaTitle(); ?></title>
    <meta name="description" content="<?= GitemaSeo::gitemaMetaDescription(); ?>">

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>