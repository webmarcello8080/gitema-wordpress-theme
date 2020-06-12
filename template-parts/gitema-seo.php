<?php global $gitema; ?>

<?php if( $gitema['seo-title'] ){ ?>
    <title><?= GitemaSeo::gitemaTitle() ?></title>
<?php } ?>

<?php if( $gitema['seo-metadescription'] ){ ?>
    <meta name="description" content="<?= GitemaSeo::gitemaMetaDescription() ?>" />
<?php } ?>