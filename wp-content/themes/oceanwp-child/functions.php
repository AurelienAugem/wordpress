<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

/********************************** Menu de l'en-tête **********************************/
//Enregistrement du menu 
function create_menu_header(){
    register_nav_menu('menu-header',__('Menu Header'));
}
add_action( 'init', 'create_menu_header' );
//Vérification des droits de l'utilisateur actuel
function is_admin_user() {
    return current_user_can( 'manage_options' );
}
//Inclusion du lien admin dans le menu
function planty_add_header_button($adminButton, $menuHeader){

    if(is_admin_user() && $menuHeader->theme_location == 'menu-header'){

        $lien = '<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-47"><a href="http://localhost/wordpress/wp-admin/">Admin</a></li>';
        $adminButton .= $lien;

    }
    return $adminButton;
}

add_filter('show_admin_bar', '__return_false');
add_filter('wp_nav_menu_items', 'planty_add_header_button', 10, 2);


/******************************* Shortcode pour les formulaires de commande *************************/

function select_vente(){
    echo 
        
        "<div class=\"buy\">
            <input class=\"sold-items\" type=\"search\" placeholder=\"0\">
            <div class=\"plus-minus\">
                <input class=\"plus-button\" type=\"submit\" value=\"+\">
                <input class=\"minus-button\" type=\"submit\" value=\"-\">
            </div>
            <input class=\"ok-button\" type=\"submit\" value=\"OK\">
        
        </div>";
}

add_shortcode('commande', 'select_vente');
