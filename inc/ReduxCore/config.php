<?php

$opt_name = "gitema";

$theme = wp_get_theme();

$args = array(
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name') ,
    'display_version' => $theme->get('Version') ,
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_title' => esc_html__('Gitema Theme', 'gitema'),
    'page_title' => esc_html__('Gitema Theme', 'gitema') ,
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => true,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => true,
    'update_notice' => false,
    'customizer' => false,
    'page_priority' => null,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'dashicons-money',
    'page_slug' => 'gitema_options',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => false
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Seo', 'gitema') ,
    'id' => esc_html__('giteme-seo', ' gitema') ,
    'icon' => 'el el-home',
    'fields' => array(
            array(
                'id'       => 'active_title',
                'type'     => 'checkbox',
                'title'    => __( 'Activate Title in head', 'gitema' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'gitema' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'active_metadescription',
                'type'     => 'checkbox',
                'title'    => __( 'Activate Meta Description in head', 'gitema' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'gitema' ),
                'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id'       => 'opt-color-title',
                'type'     => 'color',
                'output'   => array( '.site-title' ),
                'title'    => __( 'Site Title Color', 'gitema' ),
                'subtitle' => __( 'Pick a title color for the theme (default: #000).', 'gitema' ),
                'default'  => '#000000',
            )
    )
));