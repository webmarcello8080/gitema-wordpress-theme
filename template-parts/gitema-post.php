<?php global $gitema; ?>
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
    <div class="main">
        <div class="post">
            <h1 class="post-title"><?php the_title();?></h1>

            <div class="post-info">
                <?= GitemaPost::info(); ?>
            </div>

            <div class="post-image">
                <?= GitemaPost::image(); ?>
            </div>

            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="post-comment">
            <?php comments_template(); ?>
        </div> 

    </div>
<?php endwhile; ?>

<?php 
if( $gitema['post-sidebar'] ){
    get_template_part( 'template-parts/gitema-sidebar' ); 
} 
?>

</div><!-- #content -->