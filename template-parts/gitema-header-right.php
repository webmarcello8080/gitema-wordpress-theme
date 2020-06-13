<header id="header_option_2">

    <div class="logo-wrapper" >
        <?= GitemaHeader::logo(); ?>
    </div>

    <nav>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
    <?= GitemaHeader::contact(); ?>

</header>