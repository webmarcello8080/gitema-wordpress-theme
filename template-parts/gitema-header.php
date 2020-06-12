<?php global $gitema; ?>
Teo:<br/>
* display logo only if it's loaded, <br/>
* then display Tagline if required, <br/>
* display contact button only if it's required, <br/>
* the menu is displayed dynamically with wp_nav_menu(array('theme_location'=>'primary')); <br/>
* fix the header with css if required, <br/>
* don't worry about header background... we will do it later in dynamic CSS <br/>
thanks.
<header id="header_option_2">
        <img src="<?php echo $gitema['custom-logo']['url'] ?>" alt="" />
    <nav>
        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    </nav>
    <a class="cta" href="#">
    <button>Contact</button>
    </a>
</header>