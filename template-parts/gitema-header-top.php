<header id="header_option_4">
    <?php if($gitema['custom-logo']['url']){ ?>
        <img class="logo" src="<?php echo $gitema['custom-logo']['url'] ?>" alt="" />
    <?php
    } else{
        ?>
       <h1 class="h1-logo"><?php echo get_bloginfo(‘name’); ?></h1> 
       <?php
    }
    
    ?>
    <div class="navbar">
        <nav>
            <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
        </nav>
        <a class="cta" href="<?= $gitema['contact-button-link'] ?>">
        <button>Contact</button>
        </a>
    </div>
</header>