<?php

/*
* This class manages the Admin part of the theme in the wordpress dashboard
*/
if ( !class_exists( 'GitemaAdmin' ) ) {

    class GitemaAdmin {

        protected $menu;
        protected $seo;

        public function __construct(){
            $this->menu = new GitemaMenu;
            $this->seo = new GitemaSeo;
            
            // Set widget areas
            add_action('widgets_init', array( $this, 'widgetSetup' ));

            // Set menu areas
            add_action('init', array( $this, 'menuSetup' ));

            // Set hooks to activate post-thumbnails and custom-background
            add_theme_support('custom-background');
            add_theme_support('post-thumbnails');

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