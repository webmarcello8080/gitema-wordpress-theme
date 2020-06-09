<?php

/*
* This class manages the Admin part of the theme in the wordpress dashboard
*/
if ( !class_exists( 'GitemaAdmin' ) ) {

    class GitemaAdmin {

        public function __construct(){
            // Set menu on admin area
            add_action( 'admin_menu', array( $this, 'adminMenu' ) );
            
            // Set widget areas
            add_action('widgets_init', array( $this, 'widgetSetup' ));

            // Set menu areas
            add_action('init', array( $this, 'menuSetup' ));

            // Remove sections from Customise part
            add_action( 'customize_register', array( $this, 'removeSections' ) );

            // Set hooks to activate post-thumbnails and custom-background
            add_theme_support('custom-background');
            add_theme_support('post-thumbnails');
        }

        /*
        * set admin menu for Theme settings
        */
        public function adminMenu() {

            add_menu_page(
                'Gitema Theme Options', 
                'Gitema', 
                'manage_options', 
                'gitema_theme', 
                null, 
                'dashicons-money', 
                90
            );
            
            //Generate Admin Sub Pages
            add_submenu_page( 'gitema_theme', 'Gitema Theme Options', 'General', 'manage_options', 'gitema_theme', array( $this, 'adminPage' ) );
            add_submenu_page( 'gitema_theme', 'Gitema Theme Options', 'SEO', 'manage_options', 'gitema_theme_seo', array( $this, 'adminSeo' ) );
            $hook = add_submenu_page( 'gitema_theme', 'Gitema Theme Options', 'Background', 'manage_options', 'gitema_theme_background', array( $this, 'backgroundPage' ) );
            add_action('load-' . $hook, array( $this, 'backgroundPage' ) );
        }

        /*
        * redirect to view page
        */
        public function adminPage() {
            include_once( GITEMA_PATH . '/views/admin-form.php' );
        }

        public function adminSeo() {
            include_once( GITEMA_PATH . '/views/admin-seo-form.php' );
        }

        public function backgroundPage(){
            wp_redirect( get_site_url() . '/wp-admin/customize.php?autofocus%5Bcontrol%5D=background_image' ); 
        }

        /*
        * set widgets and widget positions
        */
        public function widgetSetup() {
            
            register_sidebar( 
                array(
                    'name' => 'Sidebar',
                    'id' => 'sidebar-1',
                    'class' => 'sidebar-custom',
                    'description' => __( 'This is the Standard Sidebar', 'gitema' ),
                    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</aside>',
                    'before_title'  => '<h1 class="widget-title">',
                    'after_title'   => '</h1>',
                )
            );
        }

        /*
        * set menus and menu names
        */
        public function menuSetup() {
            
            add_theme_support('menus');
            
            $locations = array(
                'primary'  => __( 'Desktop Horizontal Menu', 'gitema' ),
                'footer'   => __( 'Footer Menu', 'gitema' ),
            );

            register_nav_menus( $locations );
        }


        /*
        * Remove the following section from customize section in admin area
        */
        public function removeSections( $wp_customize ) {

            $wp_customize->remove_section("colors");

        }

    }
}