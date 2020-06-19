<?php

/*
* This class manages the Comment html part of the theme
*/
class GitemaComment {

    // display title section in the comment section
    public static function title(){
        global $gitema;

        ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( $gitema['comment-one-text'], $gitema['comment-more-text'], get_comments_number(), 'comments title', 'gitema' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
        <?php

    }

    // display no comment section in the comment section in case the comments are closed
    public static function noComment(){
        global $gitema;

        if ( ! comments_open() && get_comments_number() ) : ?>
            <p class="no-comments"><?php _e( $gitema['comment-closed-text'] , 'gitema' ); ?></p>
        <?php endif;

    }

    // display comment navigation section on the commnet section
    public static function navigation(){
        global $gitema;

        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'gitema' ); ?></h1>
                <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'gitema' ) ); ?></div>
                <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'gitema' ) ); ?></div>
            </nav>
        <?php endif; 

    }

    // display the comment list on the commnet section
    public static function list(){
        global $gitema;

        ?>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'max_depth' => $gitema['comment-max-depth'],
                    'type' => $gitema['comment-type'],
                    'format' => $gitema['comment-format'],
                    'avatar_size' => $gitema['comment-avatar-size'],
                ) );
            ?>
        </ol>
        <?php

    }

}