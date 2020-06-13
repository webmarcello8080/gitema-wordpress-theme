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
                'subtitle'     => __('This part defines the body background.', 'gitema'),
                'default'  => array(
                    'background-color' => '#1e73be',
                    )
                ),
            array(
                    'id'          => 'header-typography',
                    'type'        => 'typography', 
                    'title'       => __('Header Typography', 'gitema'),
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
                    'google'      => false, 
                    'font-backup' => true,
                    'units'       =>'px',
                    'subtitle'    => __('This section defines the Typografy of body.', 'gitema'),
                    'default'     => array(
                        'color'       => '#333', 
                        'font-style'  => '400', 
                        'font-family' => 'Abel', 
                        'google'      => true,
                        'font-size'   => '15px', 
                        'line-height' => '40'
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
                    'default' => '2'
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