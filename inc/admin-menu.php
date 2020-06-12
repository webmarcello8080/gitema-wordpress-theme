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
    'id'       => 'custom_logo_section',
    'type'     => 'section',
    'title'    => __('Logo', 'redux-framework-demo'), 
    'subtitle' => __('Select or upload a image for you logo', 'gitema'),
    'desc'     => __('This image will show on your navbar', 'gitema'),
    'icon' => 'el el-picture',
    'fields' => array(
        array(
            'id'       => 'custom_logo',
            'type'     => 'media', 
            'library_filter' => array(
                'jpg'
            )
        ),
    )  
    )
);


