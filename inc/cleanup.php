<?php

/*
 * clean up useless html/inline css code from head 
 */

/* remove version string from js and css */
function gitema_remove_wp_version_strings( $src ) {
	
    global $wp_version;
	parse_str( parse_url($src, PHP_URL_QUERY), $query );
	if ( !empty( $query['ver'] ) && $query['ver'] === $wp_version ) {
		$src = remove_query_arg( 'ver', $src );
	}
	return $src;
	
}
add_filter( 'script_loader_src', 'gitema_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'gitema_remove_wp_version_strings' );

/* remove metatag generator from header */
function gitema_remove_meta_version() {
	return '';
}
add_filter( 'the_generator', 'gitema_remove_meta_version' );

// remove emoji inline css
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );