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
    'icon' => 'el el-home-alt',
    'fields' => GitemaForm::homepage(),
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Blog', 'gitema') ,
    'id' => esc_html__('gitema-blog', ' gitema') ,
    'icon' => 'el el-wordpress',
    'fields' => GitemaForm::blog(),
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Article', 'gitema') ,
    'id' => esc_html__('gitema-article', ' gitema') ,
    'icon' => 'el el-tasks'
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Footer', 'gitema') ,
    'id' => esc_html__('gitema-footer', ' gitema') ,
    'icon' => 'el el-website',
    'fields' => GitemaForm::footer(),
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('Social Network', 'gitema') ,
    'id' => esc_html__('gitema-social-network', ' gitema') ,
    'icon' => 'el el-network'
    )
);

Redux::setSection($opt_name, array(
    'title' => esc_html__('SEO', 'gitema') ,
    'id' => esc_html__('gitema-seo', ' gitema') ,
    'icon' => 'el el-globe-alt',
    'fields' => GitemaForm::seo(),
    )
);
