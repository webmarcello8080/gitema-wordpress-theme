  <!-- Footer -->
  <footer>
    <div class="container">
      <div>
        <p>this is the footer</p>
        <?php global $gitema; ?>
        <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          echo $image[0];
        
        if(function_exists('the_custom_logo')){
          the_custom_logo( );
        }

        echo $gitema['custom_logo']['url']
        ?>
        <img src="<?php echo $gitema['custom_logo']['url'] ?>" alt="">
        

        


      </div>
    </div><!-- /.container -->
  </footer><!-- /footer -->
  
<?php wp_footer(); ?>

</body>
</html>