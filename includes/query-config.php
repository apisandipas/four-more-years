<?php 

/**
 * Regular query configuration and filtering
 *
 */
add_filter( 'pre_get_posts', 'an_pre_get_posts', 25 );

/**
 * [an_pre_get_posts description]
 * @return [type] [description]
 */
function an_pre_get_posts( $query ) {

    // Don't mess around with admin queries
    if ( is_admin() )  return $query;
    
    
    // in the beer, product and event archive
    if ( $query->is_main_query() 
            && $query->is_post_type_archive('beer') 
            || $query->is_post_type_archive('product')
            || $query->is_post_type_archive('event') ) {

        // Show all the posts...
        $query->set( 'nopaging', true );
        $query->set( 'order',   'ASC' );
    
    }

    // in JUST the beer and product archives
    if ( $query->is_main_query() 
            && $query->is_post_type_archive('beer') 
            || $query->is_post_type_archive('product') ) {

        // Set to use menu order so beer and products can 
        // be ordered by drag and drop interface via Metronet Reorder Posts Plugin
        $query->set( 'orderby',   'menu_order' );
    
    }

    return $query;
       
}
