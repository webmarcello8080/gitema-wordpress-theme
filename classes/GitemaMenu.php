<?php

/*
* This class manages the Admin Menu of the theme in the wordpress dashboard
*/
if ( !class_exists( 'GitemaMenu' ) ) {

    class GitemaMenu {

        public function __construct(){
            // Set menu on admin area
            add_action( 'admin_menu', array( $this, 'setMenu' ) );
        }

        /*
        * set admin menu for Theme settings
        */
        public function setMenu() {

            add_menu_page(
                'Gitema Theme Options', 
                'Gitema Theme', 
                'manage_options', 
                'gitema_theme', 
                null, 
                'dashicons-money', 
                90
            );
            
            //Generate Admin Sub Pages
            add_submenu_page( 'gitema_theme', 'Gitema Theme General Options', 'General', 'manage_options', 'gitema_theme', array( $this, 'displayPage' ) );
            add_submenu_page( 'gitema_theme', 'Gitema Theme SEO Options', 'SEO', 'manage_options', 'gitema_theme_seo', array( $this, 'displaySeoPage' ) );
            $hook = add_submenu_page( 'gitema_theme', 'Gitema Theme Background Options', 'Background', 'manage_options', 'gitema_theme_background', array( $this, 'displayBackgroundPage' ) );
            add_action('load-' . $hook, array( $this, 'displayBackgroundPage' ) );
            add_submenu_page( 'gitema_theme', 'Gitema Teo Form', 'Teo', 'manage_options', 'gitema_theme_teo', array( $this, 'displayTeo' ) );
        }

        /*
        * redirect to view pages
        */
        public function displayPage() {
            include_once( GITEMA_PATH . '/views/admin-form.php' );
        }

        public function displaySeoPage() {
            include_once( GITEMA_PATH . '/views/admin-seo-form.php' );
        }

        public function displayTeo() {
            include_once( GITEMA_PATH . '/views/admin-teo-form.php' );
        }

        public function displayBackgroundPage(){
            wp_redirect( get_site_url() . '/wp-admin/customize.php?autofocus%5Bcontrol%5D=background_image' ); 
        }

    }

}