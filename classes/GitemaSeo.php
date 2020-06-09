<?php

/*
* This class manages the SEO part of the theme
*/
if ( !class_exists( 'GitemaSeo' ) ) {

    class GitemaSeo {

        public static function gitemaTitle(){
            if (  is_home() || is_front_page() ) {
                return $title = get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
            }
            else {
                return $title = wp_title('') . ' | ' . get_bloginfo( 'name' );
            }
        }

        public static function gitemaMetaDescription(){
            if (  is_single() || is_page() ) {
                return $description = wp_strip_all_tags( get_the_excerpt(), true );
            }
            else {
                return $description = get_bloginfo( 'description' );
            }
        }
    }
}