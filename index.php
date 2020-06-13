<?php
    get_header();
    echo '<h1>here</h1>';

    //global $redux_options;
    $layout = $gitema['homepage-element']['enabled'];

    if ($layout): foreach ($layout as $key=>$value) {

        switch($key) {

            case 'introduction': get_template_part( 'template-parts/gitema-home-introduction' );
            break;

            case 'blog': get_template_part( 'template-parts/gitema-home-blog' );
            break;

            case 'services': get_template_part( 'template-parts/gitema-home-services' );
            break;

        }

    }

    endif;

    get_template_part( 'template-parts/gitema-sidebar' );
    get_footer();
    
?>