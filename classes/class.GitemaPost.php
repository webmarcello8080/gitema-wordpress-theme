<?php

/*
* This class manages the Post parts of the theme
*/
class GitemaPost {

    // display the post information
    public static function info(){
        global $gitema;

        $gitemaInfo = '';
        if( $gitema['post-author'] ){
            $gitemaInfo .= self::author();
        }

        if( $gitema['post-date'] ){
            $gitemaInfo .= self::date();
        }

        if( $gitema['post-categories'] ){
            $gitemaInfo .= self::categories();
        }

        if( $gitema['post-tags'] ){
            $gitemaInfo .= self::tags();
        }

        return $gitemaInfo;

    }

    // display the post author
    public static function author(){
        $gitemaAuthor = '<span class="post-author">' . get_the_author() . '</span>';

        return $gitemaAuthor;
    }

    // display the post author
    public static function date(){
        $gitemaDate = '<span class="post-date">' . get_the_date() . '</span>';

        return $gitemaDate;
    }

    // display the post categories with link
    public static function categories(){
        global $gitema;

        $gitemaCategory = '<span class="post-categories">';
        $gitemaCategory .= get_the_category_list( $gitema['post-categories-tags-separator'] );
        $gitemaCategory .= '</span>';

        return $gitemaCategory;
    }

    // display the post tags with link
    public static function tags(){
        global $gitema;

        $gitemaTags = '<span class="post-tags">';
        $gitemaTags .= get_the_tag_list( '', $gitema['post-categories-tags-separator'] );
        $gitemaTags .= '</span>';

        return $gitemaTags;
    }

    // display the post iamges
    public static function image(){
        global $gitema;
        global $post_id;

        $gitemaImage = '';
        if( $gitema['post-image'] ){
            if ( has_post_thumbnail() ){

                $gitemaImage = '<a href="' . get_permalink() . '" title="' . esc_attr( get_the_title()) . '" >';
                $gitemaImage .= get_the_post_thumbnail( $post_id , $gitema['post-image-size'] );
                $gitemaImage .= '</a>';

            }
        }

        return $gitemaImage;
    }
}