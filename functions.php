<?php 

define('SA_VERSION_NUMBER', '0.0.1');

require_once dirname(__FILE__). '/includes/bootstrap.php';


/**
 * General configuration for the theme
 */
  add_action( 'after_setup_theme', 'sa_setup' );
 function sa_setup(){

    // ———————————————————————————————-
    // Set image sizes
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    // ———————————————————————————————-
    add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 312, 415 ); // Default thumbnail size

 }



/**
 * Enqueue theme stylesheet files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
add_action( 'wp_enqueue_scripts', 'sa_enqueue_styles' );
function sa_enqueue_styles() {
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/style.css', array(), SA_VERSION_NUMBER, 'all' );
}


/**
 * Enqueue theme Javascript files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 */
add_action( 'wp_enqueue_scripts', 'sa_enqueue_scripts' );
function sa_enqueue_scripts() {
    wp_enqueue_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), SA_VERSION_NUMBER);
    wp_enqueue_script( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), SA_VERSION_NUMBER);
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), SA_VERSION_NUMBER,  true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), SA_VERSION_NUMBER,  true );
}

/**
 *  Register Navigation Menus
 *
 */
add_action( 'init', 'navigation_menus' );
function navigation_menus() {

    $locations = array(
        'Primary' => __( 'Primary', 'sa'),
    );
    register_nav_menus( $locations );
}
