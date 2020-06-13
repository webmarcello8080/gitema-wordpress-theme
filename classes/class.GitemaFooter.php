<?php

/*
* This class manages the Footer html part of the theme
*/
class GitemaFooter {

    // display main section of the footer based on admin variables
    public static function main(){
        global $gitema;

        for( $i = 1; $i <= $gitema['footer-section-number']; $i++) { ?>
            <div class="footer-section" >
                FOOTER-SECTION-<?= $i ?>
                <?php dynamic_sidebar( 'footer-section-' . $i ); ?>
            </div>
        <?php }
    }

    // display copyright based on admin variables
    public static function copyright(){
        global $gitema;

        ?>
        <div class="footer-copyright">
            <?= $gitema['footer-copyright'] ?>
        </div>
        <?php
    }

}