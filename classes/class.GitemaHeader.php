<?php

/*
* This class manages the Header html part of the theme
*/
class GitemaHeader {

    // display logo based on admin variables
    public static function logo(){
        global $gitema;

        if( $gitema['custom-logo']['url'] ){ ?>
            <img class="logo" src="<?php echo $gitema['custom-logo']['url'] ?>" alt="" />
        <?php } else{ ?>
            <h1 class="h1-logo"><?php echo get_bloginfo('name'); ?></h1> 
       <?php }
        if( $gitema['header-tagline'] ){ ?>
            <h3 class="tagline-logo"><?php echo get_bloginfo('description'); ?></h3>
        <?php }
    }

    // display logo based on admin variables
    public static function contact(){
        global $gitema;

        if( $gitema['contact-button'] ){ ?>
            <a class="cta" href="<?= $gitema['contact-button-link'] ?>">
                <button><?= $gitema['contact-button-text'] ?></button>
            </a>
        <?php }
    }

}