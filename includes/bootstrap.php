<?php 
/**
 *  Theme Helpers
 */
require  __DIR__ . '/helpers.php';
require  __DIR__ . '/template-helpers.php';


/**
 *   3rd party libs
 */
require  __DIR__ . '/lib/bootstrap-walker.php';


/**
 *  Load 'Features'
 */
add_action( 'after_setup_theme', 'sa_load_features' );
function sa_load_features(){
    $path = __DIR__ . '/features/';

    $features = array(
        'wp-head-cleanup',
        'customize-admin',
        'no-image-dimensions',
        'slug-in-body-class'
    );

    foreach ( $features as $feature ) {
        require $path.$feature.'.php';
    }
}


/**
 *  Load 'Custom Post Types'
 */
add_action( 'after_setup_theme', 'sa_load_cpt' );
function sa_load_cpt(){
    $path = __DIR__ . '/custom-post-types/';

    $types = array(
        'events',
        'beers',
        'products'
    );

    foreach ( $types as $type ) {
        require $path.$type.'.php';
    }
}


