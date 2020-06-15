<?php

/*
* This class manages the Admin part of the theme in the wordpress dashboard
*/
class GitemaAdmin {

    public function __construct(){
        new GitemaHtml;
        
        // Set widget areas
        add_action('widgets_init', array( $this, 'widgetSetup' ));

        // Set menu areas
        add_action('init', array( $this, 'menuSetup' ));

        // Set hooks to activate post-thumbnails
        add_theme_support('post-thumbnails');
        
        // Remove sections from Customise part
        add_action( 'customize_register', array( $this, 'removeSections' ) );
        
        // Compile dynamic CSS using redux framework
        add_filter('redux/options/gitema/compiler', array( $this, 'compilerDynamicCss' ) , 10, 4);

    }

    /*
    * set widgets and widget positions
    */
    public function widgetSetup() {
        
        // define widget area for sidebar
        register_sidebar( 
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar-1',
                'class' => 'sidebar-custom',
                'description' => __( 'This is the Gitema Sidebar', 'gitema' ),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h1 class="widget-title">',
                'after_title'   => '</h1>',
            )
        );

        // First footer widget area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'First Footer Widget Area', 'gitema' ),
            'id' => 'footer-section-1',
            'description' => __( 'The first footer widget area', 'gitema' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );
    
        // Second Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Second Footer Widget Area', 'gitema' ),
            'id' => 'footer-section-2',
            'description' => __( 'The second footer widget area', 'gitema' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );
    
        // Third Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Third Footer Widget Area', 'gitema' ),
            'id' => 'footer-section-3',
            'description' => __( 'The third footer widget area', 'gitema' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );
    
        // Fourth Footer Widget Area, located in the footer. Empty by default.
        register_sidebar( array(
            'name' => __( 'Fourth Footer Widget Area', 'gitema' ),
            'id' => 'footer-section-4',
            'description' => __( 'The fourth footer widget area', 'gitema' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ) );
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

    /*
    * Create dynamic CSS in '/assets/css/dynamic.css' based on form values
    */
    public function compilerDynamicCss($options, $css, $changed_values) {
        global $wp_filesystem;

        $filename = GITEMA_PATH . '/assets/css/dynamic.css';

        if( empty( $wp_filesystem ) ) {
            require_once( ABSPATH .'/wp-admin/includes/file.php' );
            WP_Filesystem();
        }

        if( $wp_filesystem ) {
            $wp_filesystem->put_contents(
                $filename,
                $css,
                FS_CHMOD_FILE // predefined mode settings for WP files
            );
        }
    }
}