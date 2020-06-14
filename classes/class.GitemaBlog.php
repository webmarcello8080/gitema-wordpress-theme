<?php

/*
* This class manages the Blog parts of the theme
*/
class GitemaBlog {

    // display the post except
    public static function except(){
        global $gitema;

        $gitemaExcept = the_excerpt();
        $gitemaExcept .= '<a class="entry-read-more" href="'. get_permalink() . '">' . $gitema['blog-read-more'] . '</a>';

        return $gitemaExcept;
    }

    // display the post info
    public static function info(){
        global $gitema;

        $gitemaInfo = '';
        if( $gitema['blog-author'] ){
            $gitemaInfo .= self::author();
        }

        if( $gitema['blog-date'] ){
            $gitemaInfo .= self::date();
        }

        if( $gitema['blog-comment'] ){
            $gitemaInfo .= self::comment();
        }

        if( $gitema['blog-categories'] ){
            $gitemaInfo .= self::categories();
        }

        if( $gitema['blog-tags'] ){
            $gitemaInfo .= self::tags();
        }

        return $gitemaInfo;
    }

    // display the post author
    public static function author(){
        $gitemaAuthor = '<span class="entry-author">' . get_the_author() . '</span>';

        return $gitemaAuthor;
    }

    // display the post author
    public static function date(){
        $gitemaDate = '<span class="entry-date">' . get_the_date() . '</span>';

        return $gitemaDate;
    }

    // display the post number of comments
    public static function comment(){
        global $gitema;

        $gitemaComment = '<span class="entry-comment">' . get_comments_number_text($gitema['blog-no-comment-text'], $gitema['blog-one-comment-text'], $gitema['blog-more-comment-text']) . '</span>';
        return $gitemaComment;
    }

    // display the post categories with link
    public static function categories(){
        global $gitema;

        $gitemaCategory = '<span class="entry-categories">';
        $gitemaCategory .= get_the_category_list( $gitema['blog-categories-tags-separator'] );
        $gitemaCategory .= '</span>';

        return $gitemaCategory;
    }

    // display the post tags with link
    public static function tags(){
        global $gitema;

        $gitemaTags = '<span class="entry-tags">';
        $gitemaTags .= get_the_tag_list( '', $gitema['blog-categories-tags-separator'] );
        $gitemaTags .= '</span>';

        return $gitemaTags;
    }

    // display the post iamges
    public static function image(){
        global $gitema;
        global $post_id;

        $gitemaImage = '';
        if( $gitema['blog-image'] ){
            if ( has_post_thumbnail() ){
                $gitemaImage = '<a href="' . get_permalink() . '" title="' . esc_attr( get_the_title()) . '" >';
                $gitemaImage .= get_the_post_thumbnail( $post_id , $gitema['blog-image-size'] );
                $gitemaImage .= '</a>';
            }
        }

        return $gitemaImage;
    }
}