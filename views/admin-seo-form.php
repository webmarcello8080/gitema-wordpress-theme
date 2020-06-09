<div class="wrap">
 
    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

    <?php settings_errors(); ?>
    <form method="post" action="options.php">
        <?php settings_fields( 'gitema-seo-settings-group' ); ?>
        <?php do_settings_sections( 'gitema-seo-settings-group' ); ?>

        <table class="form-table">
            <tr valign="top">
            <th scope="row">Activate "Title" html tag on head:</th>
            <td><input type="checkbox" name="gitema_active_title" value="1" <?= (get_option('gitema_active_title') == 1 ? 'checked' : '');?> /></td>
            </tr>
            
            <tr valign="top">
            <th scope="row">Activate "Meta Description" html tag on head:</th>
            <td><input type="checkbox" name="gitema_active_metadescription" value="1" <?= (get_option('gitema_active_metadescription') == 1 ? 'checked' : '');?> /></td>
            </tr>
            
        </table>

        <?php submit_button(); ?>

    </form>

</div><!-- .wrap -->