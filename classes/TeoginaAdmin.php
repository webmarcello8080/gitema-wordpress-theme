<?php
if ( !class_exists( 'TeoginaAdmin' ) ) {

    class TeoginaAdmin {

        public function __construct(){
            // Set menu on admin area
            add_action( 'admin_menu', array( $this, 'adminMenu' ) );
            
            // Set widget areas
            add_action('widgets_init', array( $this, 'widgetSetup' ));

            // Set menu areas
            add_action('init', array( $this, 'menuSetup' ));

            // Set hooks to activate post-thumbnails and custom-background
            add_theme_support('custom-background');
            add_theme_support('post-thumbnails');
        }

        /*
        * set admin menu for Theme settings
        */
        public function adminMenu() {

            add_menu_page(
                'Teogina', 
                'Teogina', 
                'manage_options', 
                'teogina_theme', 
                array( $this, 'adminPage' ), 
                'dashicons-wordpress-alt', 
                90
            );
            
            add_submenu_page(
                'teogina_theme',
                'Teogina Settings', 
                'Teogina Settings', 
                'manage_options',
                'teogina_theme_settings',
                array( $this, 'adminSettingsPage' )
            ); 
        }

        public function adminPage() {
            //show the form
            include_once( TEOGINA_PATH . '/views/admin-form.php' );
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
                    'description' => 'This is the Standard Sidebar',
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
                'primary'  => __( 'Desktop Horizontal Menu', 'theme' ),
                'footer'   => __( 'Footer Menu', 'theme' ),
            );

            register_nav_menus( $locations );
        }

    }
}