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
                    'desc'     => __('Marcelo, Lets use those for now... Can you find the icons', 'gitema'),
                    'width' => '64px',
                    'height' => '64px',
                    'options'  => array(
                        '1'      => array(
                            'alt'   => 'Logo on the Left', 
                            'img'   => ReduxFramework::$_url.'assets/img/left-arrow.png'
                        ),
                        '2'      => array(
                            'alt'   => 'Logo on the Top', 
                            'img'   => ReduxFramework::$_url.'assets/img/top-arrow.png'
                        ),
                        '3'      => array(
                            'alt'   => 'Logo on the Bottom', 
                            'img'  => ReduxFramework::$_url.'assets/img/bottom-arrow.png'
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
        );

        return $headerForm;
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