<?php

# Hook predefiniti di wordpress per inserire fogli di stile o script esterni
function load_bootstrap() {
    // carica lo stile css di bootstrap
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css'); // vado a leggere un eventuale file CSS custom
}
function load_bootstrap_scripts() {
    // carica lo script js di bootstrap
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom-script.js'); // vado a leggere un eventuale file CSS custom
}

// Hook predefiniti di wordpress per aggiunre azioni al nostro template
add_action('wp_enqueue_scripts', 'load_bootstrap');
add_action('wp_enqueue_scripts', 'load_bootstrap_scripts' );


// =======================================
// Customize LOGO => https://developer.wordpress.org/themes/functionality/custom-logo/
// =======================================

//Abilita l'utilizzo di un loghino personalizzato.
add_theme_support( 'custom-logo' );
//Possiamo configurare cinque parametri passando gli argomenti alla add_theme_support()funzione utilizzando un array:
function bahamas_custom_logo_setup() {
	$bahamas_logo = array(
		'height'               => 50,
		'width'                => 50,
		'header-text'          => 'site-title', /* => Classi di elementi da nascondere. Può passare qui un array di nomi di classi per tutti gli elementi che costituiscono il testo dell'intestazione che potrebbe essere sostituito da un logo. */
		'unlink-homepage-logo' => true,        /* will no longer link to the homepage when visitors are on that page */
	);
	add_theme_support( 'custom-logo', $bahamas_logo );
}
add_action( 'init', 'bahamas_custom_logo_setup');


// =======================================
// Customize Menus
// =======================================
function bahamas_menu() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu'  => __( 'Footer Menu'),
        )
    );
}
add_action('init', 'bahamas_menu');

//funzione di fallback, visualizza il meno quando quello specificato (tipo primary menu) non esiste
function my_custom_fallback_menu() {
    echo '<ul class="nav-menu">';
    wp_list_pages(array(
      'title_li' => '',
      'depth' => 1,
    ));
    echo '</ul>';
  }

// add_filter => modifica una funzionalità esistente di wordpress. 



//-------------------- CODICE GREGORIO -----------------------------------

function customTheme_theme_support(){
    add_theme_support("post-thumbnails");
}
add_action("after_setup_theme","customTheme_theme_support");


//--------------------FINE CODICE GREGORIO -----------------------------------


// ---------------------------------------- CODICE TRIXIA ----------------------------------------------
require_once('pluginTrixia.php');
// -------------------------------------- FINE CODICE TRIXIA -------------------------------------
