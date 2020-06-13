<header id="header_option_4">

    <div class="logo-wrapper" >
        <?= GitemaHeader::logo(); ?>
    </div>

    <div class="navbar">
        <nav>
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        </nav>
        <?= GitemaHeader::contact(); ?>
    </div>
</header>