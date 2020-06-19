<?php if ( have_comments() ) : ?>

    <?php GitemaComment::title(); ?>

    <?php GitemaComment::list(); ?>

    <?php GitemaComment::navigation(); ?>

    <?php GitemaComment::noComment(); ?>

<?php endif; // have_comments() ?>

<?php comment_form(); ?>