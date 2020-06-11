<?php

/**
 * REQUIRED FILES
 * Include required files.
 */
if (!class_exists('ReduxFramework') && file_exists( get_template_directory() . '/inc/ReduxCore/framework.php')){
    require_once ( get_template_directory() . '/inc/ReduxCore/framework.php');
}
if (!isset($redux_demo) && file_exists( get_template_directory() . '/inc/ReduxCore/config.php')){
    require_once ( get_template_directory() . '/inc/ReduxCore/config.php'); 
}

require get_template_directory() . '/inc/constants.php';
require get_template_directory() . '/inc/unqueue-files.php';
require get_template_directory() . '/inc/cleanup-html.php';

// import classes
foreach ( glob( GITEMA_PATH .'/classes/*.php') as $filename)
{
    include_once $filename;
}
new GitemaAdmin;

// Customize h1 tags
function customize_h1( $wp_customize){
    $wp_customize->add_setting('gtm_h1_color', array(
        "default" => "#006ec3",
        "transport" => 'refresh',
    ));
    $wp_customize->add_section('gtm_standard_colors', array(
        'title' => __('Standard Colors', 'gitema'),
        'priority' => 30,
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gtm_h1_color_control', array(
        'label' => __('H1 Color', "gitema"),
        'section' => 'gtm_standard_colors',
        'settings' => 'gtm_h1_color',
    )));
}

add_action('customize_register', 'customize_h1');

// Output Customize CSS
function customize_css(){
    ?>
    <style>
    h1{
        color: <?php echo get_theme_mod('gtm_h1_color') ?>
    }
    </style>

<?php }

add_action('wp_head', 'customize_css');