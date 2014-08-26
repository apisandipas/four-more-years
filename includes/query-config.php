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
    
    
    // in the beer archive.. and in the product archive (Store) 
    if ( $query->is_main_query() 
            && $query->is_post_type_archive('beer') 
            || $query->is_post_type_archive('product')
            || $query->is_post_type_archive('event') ) {

        // Show all the posts...
        $query->set( 'nopaging', true );
        $query->set( 'order',   'ASC' );
    
    }

    return $query;
       
}
