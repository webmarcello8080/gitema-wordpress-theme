  <div class="container">
    <?= GitemaFooter::main(); ?>
  </div>

  <div class="footer-menu">
    <?php wp_nav_menu(array('theme_location'=>'footer')); ?>
  </div>

  <?= GitemaFooter::copyright(); ?>