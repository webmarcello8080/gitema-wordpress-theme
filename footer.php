  <!-- Footer -->
  <footer>
    <div class="container">
      <div>
        <p>this is the footer</p>
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          echo $image[0];
        
        if(function_exists('the_custom_logo')){
          the_custom_logo( );
        }

        echo $opt_name['custom_logo_gallery'];
        ?>

        


      </div>
    </div><!-- /.container -->
  </footer><!-- /footer -->
  
<?php wp_footer(); ?>

</body>
</html>