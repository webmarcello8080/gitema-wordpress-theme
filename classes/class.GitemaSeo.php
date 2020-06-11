<?php

/*
* This class manages the SEO part of the theme
*/
class GitemaSeo {

    // display title based on page type
    public static function gitemaTitle(){
        if (  is_home() || is_front_page() ) {
            return $title = get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
        }
        else {
            return $title = wp_title('', false) . ' | ' . get_bloginfo( 'name' );
        }
    }

    // display description based on page
    public static function gitemaMetaDescription(){
        if (  is_single() || is_page() ) {
            return $description = wp_strip_all_tags( get_the_excerpt(), true );
        }
        else {
            return $description = get_bloginfo( 'description' );
        }
    }

}