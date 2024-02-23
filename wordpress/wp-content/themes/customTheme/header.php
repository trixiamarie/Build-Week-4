<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"> <!-- Controllo il charset dal pannello di WP -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?>
    </title>
    <?php wp_head() ?><!--  Hook che gestisce caricamente nell'header della pagina -->
</head>

<body>


    <!-- ***** Header Area Start ***** -->
    <header>
        <nav class="main-nav">
            
            <!-- ***** Logo Start ***** -->
            <?php 
                if (function_exists('bahamas_custom_logo_setup')) {
                    the_custom_logo();
                } else { ?>
                    <a class="text-decoration-none"><?php bloginfo( 'name' ); ?> </a> 
                <?php } ?>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <div class="menuDx d-flex align-items-center">
                <div>
                    <?php
                    $primaryMenu = (
                        array(
                            'theme_location' => 'primary',
                            'container' => 'div',
                            'container_class' => 'main-menu',
                            'menu_class' => 'nav-menu',
                            'menu_id' => 'primary-menu',
                            'fallback_cb' => 'my_custom_fallback_menu',
                            'depth' => 2,
                            'echo' => false,
                        )
                    );
                    wp_nav_menu($primaryMenu);
                    ?>
                </div>
                <button type="button" class="prenotaBtn btn btn-secondary btn-sm"> prenota sta vacanza </button>
            </div>

            <!-- ***** Menu End ***** -->
        </nav>
    </header>
    <!-- ***** Header Area End ***** -->