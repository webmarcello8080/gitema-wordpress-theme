<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php global $gitema; ?>
    <?php get_template_part( 'template-parts/gitema-seo' ); ?>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <pre>
    <?php var_dump($gitema); ?>
    </pre>
    <?php get_template_part( 'template-parts/gitema-header' ); ?>

