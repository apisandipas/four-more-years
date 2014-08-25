<?php 
/* ------------------------------------------------------------------
    Custom Post Type - Beers
------------------------------------------------------------------ */

add_action( 'init', 'products_custom_init' );
function products_custom_init() {
    

    $args = array(
        'labels'             => bp_auto_labels( 'Product' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true, 
        'show_in_menu'       => true, 
        'query_var'          => true,
        'rewrite'            => array( 'slug' => "store", 'with_front' => false ),
        'show_in_nav_menus'  => true,
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-products'
    ); 

    register_post_type( 'product', $args );

}


