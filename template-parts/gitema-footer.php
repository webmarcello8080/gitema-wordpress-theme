<?php global $gitema; ?>
  <!-- Footer Links -->
  <div class="container">
        <?php for( $i = 1; $i <= $gitema['footer-section-number']; $i++) { ?>
            <div class="footer-section footer-section-<?= $i ?>" >
                FOOTER-SECTION-<?= $i ?>
            </div>
        <?php } ?>
  </div>
  <!-- Footer Links -->

  <div class="footer-menu">
    <?php wp_nav_menu(array('theme_location'=>'footer')); ?>
  </div>
  <!-- Copyright -->
  <div class="footer-copyright">
    <?= $gitema['footer-copyright'] ?>
  </div>
  <!-- Copyright -->
