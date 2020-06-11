<?php

/*
* This class manages the form element that admin-menu will import
*/
class GitemaForm {

    public static function general(){

        $generalForm = array(
            array(         
                'id'       => 'background',
                'type'     => 'background',
                'title'    => __('Body Background', 'gitema'),
                'subtitle' => __('Body background with image, color, etc.', 'gitema'),
                'desc'     => __('This is the description field, again good for additional info.', 'gitema'),
                'default'  => array(
                    'background-color' => '#1e73be',
                )
            )
        );

        return $generalForm;
    }

    public static function header(){

        $headerForm = array(
            array(
                'id'       => 'header-background',
                'type'     => 'media', 
                'url'      => true,
                'title'    => __('Header Background', 'gitema'),
                'desc'     => __('Basic media uploader with disabled URL input field.', 'gitema'),
                'subtitle' => __('Upload any media using the WordPress native uploader', 'gitema'),
                'default'  => array(
                    'url'=>'http://s.wordpress.org/style/images/codeispoetry.png'
                )
            )
        );

        return $headerForm;
    }

    public static function seo(){

        $seoForm = array(
            array(
                    'id'       => 'seo_title',
                    'type'     => 'switch',
                    'title'    => __('Active Title in head', 'gitema'), 
                    'subtitle' => __('No validation can be done on this field type', 'gitema'),
                    'desc'     => __('This is the description field, again good for additional info.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'seo_metadescription',
                    'type'     => 'switch',
                    'title'    => __('Active MetaDescription in head', 'gitema'), 
                    'subtitle' => __('No validation can be done on this field type', 'gitema'),
                    'desc'     => __('This is the description field, again good for additional info.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
                )
        );

        return $seoForm;
    }

}