<?php

/*
* This file manages the Admin Menu of the theme in the wordpress dashboard
*/

Redux::setSection($opt_name, array(
    'title' => esc_html__('General', 'gitema') ,
    'id' => esc_html__('gitema-general', ' gitema') ,
    'icon' => 'el el-home',
    'fields' => GitemaForm::general(),
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'gitema') ,
    'id' => esc_html__('gitema-header', ' gitema') ,
    'icon' => 'el el-arrow-up',
    'fields' => GitemaForm::header(),
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Homepage', 'gitema') ,
    'id' => esc_html__('gitema-homepage', ' gitema') ,
    'icon' => 'el el-home-alt'
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Blog', 'gitema') ,
    'id' => esc_html__('gitema-blog', ' gitema') ,
    'icon' => 'el el-wordpress'
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'gitema') ,
    'id' => esc_html__('gitema-footer', ' gitema') ,
    'icon' => 'el el-website'
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('SEO', 'gitema') ,
    'id' => esc_html__('gitema-seo', ' gitema') ,
    'icon' => 'el el-globe-alt',
    'fields' => GitemaForm::seo(),
    )
);

Redux::setSection($opt_name, array(
    'id'       => 'custom_logo',
    'type'     => 'section',
    'title'    => __('Logo', 'redux-framework-demo'), 
    'subtitle' => __('Select or upload a image for you logo', 'gitema'),
    'desc'     => __('This image will show on your navbar', 'gitema'),
    'icon' => 'el el-picture',
    'fields' => array(
        array(
            'id'       => 'custom_logo_gallery',
            'type'     => 'gallery',
            'title'    => __('Logo', 'redux-framework-demo'), 
            'subtitle' => __('Select or upload a image for you logo', 'gitema'),
            'desc'     => __('This image will show on your navbar', 'gitema'),
        ),
        array(
            'id' => 'selected_logo',
            'type' => 'image-select',
            'title' => __( 'Select a image' , 'redux_docs_generator' ),
            'desc' => __( 'This image will show on the navbar' , 'redux_docs_generator' ),
            'class' => 'logo',
            // 'options'  => array(
            //     '1'      => array(
            //         'alt'   => '1 Column', 
            //         'img'   => $opt_name['custom_logo_gallery']
            //     ),
            //     '2'      => array(
            //         'alt'   => '2 Column Left', 
            //         'img'   => $opt_name['custom_logo_gallery']
            //     ),
            //     '3'      => array(
            //         'alt'   => '2 Column Right', 
            //         'img'  => $opt_name['custom_logo_gallery']
            //     ),
            // ),
            // 'default' => '1'
        )   )
    )  
    
);


