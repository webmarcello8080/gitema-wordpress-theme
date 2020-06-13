Teo:<br/>
* display logo only if it's loaded, otherwise display website name, bloginfo( ‘name’ ); <br/>
* then display Tagline if required, bloginfo( ‘description’ ); <br/>
* display contact button only if it's required, <br/>
* the menu is displayed dynamically with wp_nav_menu(array('theme_location'=>'primary')); <br/>
* fix the header with css if required, <br/>
* don't worry about header background... we will do it later in dynamic CSS <br/>
thanks.
<header id="header_option_1">

    <div class="logo-wrapper" >
        <?= GitemaHeader::logo(); ?>
    </div>

    <nav>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
    <?= GitemaHeader::contact(); ?>
</header>