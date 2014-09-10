<?php 

define('DND_VERSION_NUMBER', '0.0.1');

require_once dirname(__FILE__). '/includes/bootstrap.php';


/**
 * General configuration for the theme
 */
add_action( 'after_setup_theme', 'dnd_setup' );
 function dnd_setup(){

    // ———————————————————————————————-
    // Set image sizes
    // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
    // http://codex.wordpress.org/Function_Reference/add_image_size
    // ———————————————————————————————-
    // add_theme_support( 'post-thumbnails' );
    // set_post_thumbnail_size( 308, 308 , true); // Used in the Beer and Product grids. poorly named :>
    // add_image_size('product-detail', 450, 450, true); // Used in the Product detail pages.
    // add_image_size('background-image', 2200, 800); // Used for full-sized bg images


 }



/**
 * Enqueue theme stylesheet files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_style
 */
add_action( 'wp_enqueue_scripts', 'dnd_enqueue_styles' );
function dnd_enqueue_styles() {
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/style.css', array(), DND_VERSION_NUMBER, 'all' );
}


/**
 * Enqueue theme Javascript files
 *
 * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
 */
add_action( 'wp_enqueue_scripts', 'dnd_enqueue_scripts' );
function dnd_enqueue_scripts() {
    wp_enqueue_script( 'modernizr', '//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js', array(), DND_VERSION_NUMBER);
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), DND_VERSION_NUMBER,  true );
    wp_enqueue_script( 'form-handler', get_template_directory_uri() . '/assets/js/form-handler.js', array('script'), DND_VERSION_NUMBER, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery', 'plugins'), DND_VERSION_NUMBER,  true );

}


/**
 *  Register Navigation Menus
 *
 */
add_action( 'init', 'navigation_menus' );
function navigation_menus() {

    $locations = array(
        'Primary' => __( 'Primary', 'dnd'),
    );
    register_nav_menus( $locations );
}


/**
*  Create a options page ia ACF Options page plugin
*/
// if( function_exists('acf_add_options_sub_page') )
// {
//     acf_add_options_sub_page( 'General' );
//     // acf_add_options_sub_page( 'Social Media' );
// }

/**
 *  Whitelist of Post Types to add the drag and drop reorder 
 */
// add_filter( 'metronet_reorder_post_types', 'slug_set_reorder' );
// function slug_set_reorder( $post_types ) {
//     $post_types = array( 'beer', 'product' );
//     return $post_types;
// }
