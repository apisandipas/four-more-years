<?php 
/* ------------------------------------------------------------------
    Custom Post Type - Events
------------------------------------------------------------------ */

add_action( 'init', 'events_custom_init' );
function events_custom_init() {
    

    $args = array(
        'labels'             => bp_auto_labels( 'Event' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true, 
        'show_in_menu'       => true, 
        'query_var'          => true,
        'rewrite'            => array( 'slug' => "events" ),
        'show_in_nav_menus'  => true,
        'capability_type'    => 'post',
        'has_archive'        => true, 
        'hierarchical'       => true,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-tickets'
    ); 

    register_post_type( 'event', $args );

}


