<?php 

/**
 * Regular query configuration and filtering
 *
 */
add_filter( 'pre_get_posts', 'dnd_pre_get_posts', 25 );

/**
 * [an_pre_get_posts description]
 * @return [type] [description]
 */
function dnd_pre_get_posts( $query ) {

    // Don't mess around with admin queries
    if ( is_admin() )  return $query;
    
    

    return $query;
       
}
