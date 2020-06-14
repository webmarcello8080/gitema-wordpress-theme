<?php global $gitema; ?>
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
        <h1 class="entry-title">
            <a href="<?= get_permalink() ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        
        
        <div class="entry-info">
            <?= GitemaBlog::info(); ?>
        </div>

        <div class="entry-image">
            <?= GitemaBlog::image(); ?>
        </div>

        <?php if( $gitema['blog-excerpt'] ){ ?>
            <div class="entry-excerpt">
                <?= GitemaBlog::except(); ?>
            </div>
        <?php } ?>

    </article><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

<?php 
if( $gitema['blog-sidebar'] ){
    get_template_part( 'template-parts/gitema-sidebar' ); 
} 
?>

</div><!-- #content -->