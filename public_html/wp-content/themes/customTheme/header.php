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
    <header class="navbarname">
        <div>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/imgs/pngtree-palm-tree-silhouette-vector-png-image_6020890.jpg">
        <h1 class="text-center NAVBARTITLEBLOG"><?php bloginfo('name'); ?></h1></div>
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">
                    <?php
                    if (function_exists('bahamas_custom_logo_setup')) {
                        the_custom_logo();
                    } else { ?>
                        <a class="text-decoration-none">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php } ?>
                </a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center" id="main-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        )
                    );
                    ?>
                </div>

                <!-- <a href="https://nuotaconnoi.netsons.org/?page_id=28" type="button"
                    class="prenotaBtn btn btn-secondary btn-sm d-xs-none"> CONTATTACI </a> -->
            </div>
        </nav>
        <!-- ***** Menu End ***** -->
    </header>
    <!-- ***** Header Area End ***** -->