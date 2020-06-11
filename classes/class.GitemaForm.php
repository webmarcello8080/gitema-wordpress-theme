<?php

/*
* This class manages the form element that admin-menu will import
*/
class GitemaForm {

    public static function seo(){
        $seoForm = array(
            array(
                    'id'       => 'seo_title',
                    'type'     => 'checkbox',
                    'title'    => __('Active Title in head', 'gitema'), 
                    'subtitle' => __('No validation can be done on this field type', 'gitema'),
                    'desc'     => __('This is the description field, again good for additional info.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
            ),
            array(
                    'id'       => 'seo_metadescription',
                    'type'     => 'checkbox',
                    'title'    => __('Active MetaDescription in head', 'gitema'), 
                    'subtitle' => __('No validation can be done on this field type', 'gitema'),
                    'desc'     => __('This is the description field, again good for additional info.', 'gitema'),
                    'default'  => '1'// 1 = on | 0 = off
                )
        );

        return $seoForm;
    }

}