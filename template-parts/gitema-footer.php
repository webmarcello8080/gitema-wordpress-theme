<?php global $gitema; ?>

  <div class="container">
        <?php for( $i = 1; $i <= $gitema['footer-section-number']; $i++) { ?>
            <div class="footer-section" >
                FOOTER-SECTION-<?= $i ?>
                <?php dynamic_sidebar( 'footer-section-' . $i ); ?>
            </div>
        <?php } ?>
  </div>

  <div class="footer-menu">
    <?php wp_nav_menu(array('theme_location'=>'footer')); ?>
  </div>

  <div class="footer-copyright">
    <?= $gitema['footer-copyright'] ?>
  </div>