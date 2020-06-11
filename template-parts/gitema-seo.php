<?php
if( get_option('gitema_active_title') ){
    echo '<title>' . GitemaSeo::gitemaTitle() . '</title>';
}

if( get_option('gitema_active_metadescription') ){
    echo '<meta name="description" content="' . GitemaSeo::gitemaMetaDescription() . '" />';
}