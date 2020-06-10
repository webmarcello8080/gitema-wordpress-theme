<?php

/*
* This class manages the SEO part of the theme
*/
if ( !class_exists( 'GitemaSeo' ) ) {

    class GitemaSeo {

        public function __construct(){

            //call register settings function
            add_action( 'admin_init', array( $this, 'registerSetting' ) );

        }

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

        public function registerSetting() {
            // register our settings
            register_setting( 'gitema-seo-settings-group', 'gitema_active_title' );
            register_setting( 'gitema-seo-settings-group', 'gitema_active_metadescription' );
        }
    }
}