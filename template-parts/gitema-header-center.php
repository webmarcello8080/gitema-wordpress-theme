<header id="header_option_3">

    <div class="logo-wrapper" >
        <?= GitemaHeader::logo(); ?>
    </div>

    <nav>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
    <?= GitemaHeader::contact(); ?>
    
</header>