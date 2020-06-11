<?php

/*
* This class manages the Admin part of the theme in the wordpress dashboard
*/
class GitemaAdmin {

    public function __construct(){
        
        // Set widget areas
        add_action('widgets_init', array( $this, 'widgetSetup' ));

        // Set menu areas
        add_action('init', array( $this, 'menuSetup' ));

        // Set hooks to activate post-thumbnails
        add_theme_support('post-thumbnails');
        
        // Remove sections from Customise part
        add_action( 'customize_register', array( $this, 'removeSections' ) );
        
        // Add custom logo support
        add_action( 'after_setup_theme', array( $this, 'gitema_custom_logo' )  );
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

    public function gitema_custom_logo(){
        $defaults = array(
            'height'=> 100,
            'width' => 100,
            'flex-height'=> true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support( 'custom-logo', $defaults );
    }
}