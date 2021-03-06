<?php

/*
* This class manages the form element that admin-menu will import
*/
class GitemaForm {

    public static function general(){

        $generalForm = array(
            array(         
                'id'       => 'body-background',
                'type'     => 'background',
                'title'    => __('Body Background', 'gitema'),
                'compiler' => array('body'),
                'subtitle'     => __('This part defines the body background.', 'gitema')
                ),
            array(
                    'id'          => 'header-typography',
                    'type'        => 'typography', 
                    'title'       => __('Header Typography', 'gitema'),
                    'compiler' => array('h1','h2','h3','h4','h5','h6'),
                    'google'      => false, 
                    'font-backup' => true,
                    'units'       =>'px',
                    'font-size'   => false,
                    'line-height' => false,
                    'subtitle'    => __('This section defines the Typografy of H1, H2... H6 tags.', 'gitema'),
                    'default'     => array(
                        'color'       => '#333', 
                        'font-style'  => '700', 
                        'font-family' => 'Abel'
                    ),
                ),
            array(
                    'id'          => 'body-typography',
                    'type'        => 'typography', 
                    'title'       => __('Body Typography', 'gitema'),
                    'compiler' => array('body', 'body p'),
                    'google'      => false, 
                    'font-backup' => true,
                    'units'       =>'px',
                    'subtitle'    => __('This section defines the Typografy of body.', 'gitema'),
                    'default'     => array(
                        'color'       => '#333', 
                        'font-style'  => '400', 
                        'font-family' => 'Abel', 
                        'font-size'   => '15px', 
                        'line-height' => '20px'
                    ),
                ),
        );

        return $generalForm;
    }

    public static function header(){

        $headerForm = array(
            array(
                'id'       => 'header-background',
                'type'     => 'background',
                'compiler' => array('header'),
                'title'    => __('Header Background', 'gitema'),
                'subtitle'     => __('This part defines the header background.', 'gitema'),
                ),
            array(
                'id'       => 'custom-logo',
                'type'     => 'media',
                'title'    => __('Website Logo', 'gitema'),
                'subtitle'     => __('Your website logo.', 'gitema'),
            ),
            array(
                    'id'       => 'logo-position',
                    'type'     => 'image_select',
                    'title'    => __('Logo Position', 'gitema'), 
                    'subtitle' => __('Select the position of the Logo in the header.', 'gitema'),
                    'width' => '64px',
                    'height' => '64px',
                    'options'  => array(
                        'left'      => array(
                            'alt'   => 'Logo on the Left', 
                            'img'   => GITEMA_URL . '/assets/img/left-arrow.png'
                        ),
                        'center'      => array(
                            'alt'   => 'Logo on the Center', 
                            'img'  => GITEMA_URL . '/assets/img/center-arrow.png'
                        ),
                        'right'      => array(
                            'alt'   => 'Logo on the Rigth', 
                            'img'  => GITEMA_URL . '/assets/img/right-arrow.png'
                        ),
                        'top'      => array(
                            'alt'   => 'Logo on the Top', 
                            'img'   => GITEMA_URL . '/assets/img/top-arrow.png'
                        ),
                        'bottom'      => array(
                            'alt'   => 'Logo on the Bottom', 
                            'img'  => GITEMA_URL . '/assets/img/bottom-arrow.png'
                        )
                    ),
                    'default' => 'left'
                ),
            array(
                    'id'       => 'fixed-header',
                    'type'     => 'switch',
                    'title'    => __('Fix the Header', 'gitema'), 
                    'subtitle'     => __('If this is ON, the header is fixed on the top of the website.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'header-tagline',
                    'type'     => 'switch',
                    'title'    => __('Tagline on header', 'gitema'), 
                    'subtitle'     => __('If this is ON, the Tagline appears underneath the logo.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'contact-button',
                    'type'     => 'switch',
                    'title'    => __('Contact Button on header', 'gitema'), 
                    'subtitle'     => __('If this is ON, the Contact Button appears on header.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'contact-button-link',
                    'type'     => 'text',
                    'title'    => __('Contact Button Link', 'gitema'),
                    'subtitle' => __('Where the Contact Button on header leads.', 'gitema'),
            ),
            array(
                    'id'       => 'contact-button-text',
                    'type'     => 'text',
                    'title'    => __('Contact Button Text', 'gitema'),
                    'subtitle' => __('Text inside the Contact Button.', 'gitema'),
                    'default'  => 'Contact'
                )
        );

        return $headerForm;
    }

    public static function homepage(){

        $homepageForm = array(
            array(
                'id'      => 'homepage-element',
                'type'    => 'sorter',
                'title'   => 'Homepage Layout Manager',
                'desc'    => 'Organize how you want the layout to appear on the homepage',
                'options' => array(
                    'enabled'  => array(
                        'introduction' => 'Introduction Section',
                        'blog'     => 'Blog Section',
                        'services'   => 'Services'
                    ),
                    'disabled' => array(
                    )
                ),
            )
        );

        return  $homepageForm;
    }

    public static function blog(){

        $blogForm = array(
            array(
                    'id'       => 'blog-title',
                    'type'     => 'text',
                    'title'    => __('Blog Header Title', 'gitema'),
                    'subtitle' => __('This is Title of the Blog page, it appears on the top of the page.', 'gitema'),
                    'desc'     => __('%s is swapped with the result of the Wordpress function single_cat_title()', 'gitema'),
                    'default'  => 'Category Archives: %s'
            ),
            array(
                    'id'       => 'blog-sidebar',
                    'type'     => 'switch',
                    'title'    => __('Sidebar in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the sidebar in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-author',
                    'type'     => 'switch',
                    'title'    => __('Post Author in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Author in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-date',
                    'type'     => 'switch',
                    'title'    => __('Post Date in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Date in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'blog-excerpt-section',
                'type' => 'section',
                'title' => __('Post Excerpt', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'blog-excerpt',
                    'type'     => 'switch',
                    'title'    => __('Excerpt in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the excerpt in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-read-more',
                    'type'     => 'text',
                    'title'    => __('Read More Text', 'gitema'),
                    'subtitle' => __('This is the text of the link that appears after excerpt.', 'gitema'),
                    'default'  => 'Read More'
            ),
            array(
                'id'     => 'blog-excerpt-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'blog-comment-section',
                'type' => 'section',
                'title' => __('Post Comment', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'blog-comment',
                    'type'     => 'switch',
                    'title'    => __('Post Comment number in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Comment number in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-no-comment-text',
                    'type'     => 'text',
                    'title'    => __('No Comments Text', 'gitema'),
                    'subtitle' => __('This is the text that appears in case of no comment in the post.', 'gitema'),
                    'default'  => 'No Comment yet'
            ),
            array(
                    'id'       => 'blog-one-comment-text',
                    'type'     => 'text',
                    'title'    => __('One Comment Text', 'gitema'),
                    'subtitle' => __('This is the text that appears in case of one comment in the post.', 'gitema'),
                    'default'  => '1 Comment'
            ),
            array(
                    'id'       => 'blog-more-comment-text',
                    'type'     => 'text',
                    'title'    => __('More than one Comment Text', 'gitema'),
                    'subtitle' => __('This is the text that appears in case of more than one comment in the post.', 'gitema'),
                    'default'  => 'Comments'
            ),
            array(
                'id'     => 'blog-comment-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'blog-categories-section',
                'type' => 'section',
                'title' => __('Post Categories Tags', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'blog-categories',
                    'type'     => 'switch',
                    'title'    => __('Post Categories in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Categories in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-tags',
                    'type'     => 'switch',
                    'title'    => __('Post Tags in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Tags in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-categories-tags-separator',
                    'type'     => 'text',
                    'title'    => __('Categories and Tags Separator', 'gitema'),
                    'subtitle' => __('This appears between Categories and between Tags in Blog page .', 'gitema'),
                    'default'  => ' - '
            ),
            array(
                'id'     => 'blog-categories-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'blog-image-section',
                'type' => 'section',
                'title' => __('Post Image', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'blog-image',
                    'type'     => 'switch',
                    'title'    => __('Post Featured Image in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Featured Image in Blog page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'blog-image-size',
                    'type'     => 'select',
                    'title'    => __('Post Featured Image Size in Blog Page', 'redux-framework-demo'), 
                    'subtitle' => __('Choose the Post Featured Image Size in Blog page', 'redux-framework-demo'),
                    // Must provide key => value pairs for select options
                    'options'  => array(
                        'thumbnail' => 'Thumbnail',
                        'medium' => 'Medium',
                        'medium_large' => 'Medium Large',
                        'large' => 'Large',
                        'full' => 'Full'
                    ),
                    'default'  => 'medium',
                ),
            array(
                'id'     => 'blog-image-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        );

        return  $blogForm;
    }

    public static function comment(){

        $commentForm = array(
            array(
                'id' => 'comment-text-section',
                'type' => 'section',
                'title' => __('Comment Text', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'comment-one-text',
                    'type'     => 'text',
                    'title'    => __('One Comment text', 'gitema'),
                    'subtitle' => __('This is the text that appear with only one comment on the bottom of the post.', 'gitema'),
                    'desc'     => __('Where %1$s is the comment number and %2$s is the post title.', 'gitema'),
                    'default'  => 'One thought on "%2$s"'
            ),
            array(
                    'id'       => 'comment-more-text',
                    'type'     => 'text',
                    'title'    => __('More Than One Comment text', 'gitema'),
                    'subtitle' => __('This is the text that appear with more than one comment on the bottom of the post.', 'gitema'),
                    'desc'     => __('Where %1$s is the comment number and %2$s is the post title.', 'gitema'),
                    'default'  => '%1$s thoughts on "%2$s"'
            ),
            array(
                    'id'       => 'comment-closed-text',
                    'type'     => 'text',
                    'title'    => __('Comment Closed text', 'gitema'),
                    'subtitle' => __('This is the text that appear when the comment are closed.', 'gitema'),
                    'default'  => 'Comments are closed.'
            ),
            array(
                'id'     => 'comment-text-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'comment-design-section',
                'type' => 'section',
                'title' => __('Comment Design', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'        => 'comment-max-depth',
                    'type'      => 'slider',
                    'title'     => __('Comment Max Depth', 'gitema'),
                    'subtitle'  => __('The maximum comments depth (int).', 'gitema'),
                    "default"   => 4,
                    "min"       => 1,
                    "step"      => 1,
                    "max"       => 10,
                    'display_value' => 'label'
                ),
            array(
                    'id'       => 'comment-type',
                    'type'     => 'select',
                    'title'    => __('Comment Type', 'gitema'), 
                    'subtitle' => __('Type of comments to list.', 'gitema'),
                    'options'  => array(
                        'all' => 'All',
                        'comment' => 'Comment',
                        'pingback' => 'Pingback',
                        'trackback' => 'Trackback',
                        'pings' => 'Pings',
                    ),
                    'default'  => 'all',
                ),
            array(
                    'id'        => 'comment-avatar-size',
                    'type'      => 'slider',
                    'title'     => __('Comment Avatar Size', 'gitema'),
                    'subtitle'  => __('Height and width dimensions of the avatar size (int).', 'gitema'),
                    "default"   => 32,
                    "min"       => 10,
                    "step"      => 1,
                    "max"       => 250,
                    'display_value' => 'text'
                ),
            array(
                    'id'       => 'comment-format',
                    'type'     => 'select',
                    'title'    => __('Comment Format', 'gitema'), 
                    'subtitle' => __('How to format the comments list.', 'gitema'),
                    'options'  => array(
                        'html5' => 'Html5',
                        'xhtml' => 'Xhtml'
                    ),
                    'default'  => 'html5',
                ),
            array(
                'id'     => 'comment-design-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        );

        return $commentForm;
    }

    public static function post(){

        $postForm = array(
            array(
                    'id'       => 'post-sidebar',
                    'type'     => 'switch',
                    'title'    => __('Sidebar in Post Page', 'gitema'), 
                    'subtitle'     => __('Display the sidebar in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'post-author',
                    'type'     => 'switch',
                    'title'    => __('Post Author in Post Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Author in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'post-date',
                    'type'     => 'switch',
                    'title'    => __('Post Date in Post Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Date in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                'id' => 'post-categories-section',
                'type' => 'section',
                'title' => __('Post Categories Tags', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'post-categories',
                    'type'     => 'switch',
                    'title'    => __('Post Categories in Blog Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Categories in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'post-tags',
                    'type'     => 'switch',
                    'title'    => __('Post Tags in Post Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Tags in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'post-categories-tags-separator',
                    'type'     => 'text',
                    'title'    => __('Categories and Tags Separator', 'gitema'),
                    'subtitle' => __('This appears between Categories and between Tags in Post page .', 'gitema'),
                    'default'  => ' - '
            ),
            array(
                'id'     => 'post-categories-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
            array(
                'id' => 'post-image-section',
                'type' => 'section',
                'title' => __('Post Image', 'gitema'),
                'indent' => true 
            ),
            array(
                    'id'       => 'post-image',
                    'type'     => 'switch',
                    'title'    => __('Post Featured Image in Post Page', 'gitema'), 
                    'subtitle'     => __('Display the Post Featured Image in Post page.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'post-image-size',
                    'type'     => 'select',
                    'title'    => __('Post Featured Image Size in Post Page', 'redux-framework-demo'), 
                    'subtitle' => __('Choose the Post Featured Image Size in Post page', 'redux-framework-demo'),
                    // Must provide key => value pairs for select options
                    'options'  => array(
                        'thumbnail' => 'Thumbnail',
                        'medium' => 'Medium',
                        'medium_large' => 'Medium Large',
                        'large' => 'Large',
                        'full' => 'Full'
                    ),
                    'default'  => 'medium',
                ),
            array(
                'id'     => 'post-image-section-end',
                'type'   => 'section',
                'indent' => false,
            ),
        );

        return  $postForm;
    }


    public static function footer(){

        $footerForm = array(
            array(
                'id'       => 'footer-section-number',
                'type'     => 'button_set',
                'title'    => __('Number of sections', 'gitema'),
                'subtitle' => __('The number of sections on the footer', 'gitema'),
                //Must provide key => value pairs for options
                'options' => array(
                    '1' => '1', 
                    '2' => '2', 
                    '3' => '3',
                    '4' => '4'
                ), 
                'default' => '4'
            ),
            array(
                'id'=>'footer-copyright',
                'type' => 'textarea',
                'title' => __('Footer Copyright', 'gitema'), 
                'subtitle' => __('The Footer Copyright appears on the bottom of the footer', 'gitema'),
                'validate' => 'html_custom',
                'default' => '© 2020 Copyright: Gitema by Marcello, Teo, Gina.',
                'allowed_html' => array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'br' => array(),
                    'em' => array(),
                    'strong' => array()
                )
            )
        );

        return $footerForm;
    }

    public static function seo(){

        $seoForm = array(
            array(
                    'id'       => 'seo-title',
                    'type'     => 'switch',
                    'title'    => __('Active Title in head', 'gitema'), 
                    'subtitle'     => __('HTML tag "Title" appears on the head of the website.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'seo-metadescription',
                    'type'     => 'switch',
                    'title'    => __('Active MetaDescription in head', 'gitema'), 
                    'subtitle'     => __('HTML tag "Meta Description" appears on the head of the website.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
                )
        );

        return $seoForm;
    }

}