<?php global $gitema; ?>

<?php if( $gitema['seo-title'] ){ ?>
    <title><?= GitemaSeo::title() ?></title>
<?php } ?>

<?php if( $gitema['seo-metadescription'] ){ ?>
    <meta name="description" content="<?= GitemaSeo::metaDescription() ?>" />
<?php } ?>