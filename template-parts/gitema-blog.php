<?php global $gitema; ?>
<div id="content" role="main">

<h1 class="page-title"><?php
    printf( $gitema['blog-title'],  single_cat_title( '', false ) );
?></h1>

<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <a href="<?= get_permalink() ?>"> 
            <h1 class="entry-title">
                <?php the_title(); ?>
            </h1>
        </a>
        
        <div class="entry-info">
            <?= GitemaBlog::info(); ?>
        </div>

        <div class="entry-image">
            <?= GitemaBlog::image(); ?>
        </div>

        <div class="entry-excerpt">
            <?= GitemaBlog::except(); ?>
        </div>

    </article><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

<?php 
if( $gitema['blog-sidebar'] ){
    get_template_part( 'template-parts/gitema-sidebar' ); 
} 
?>

</div><!-- #content -->