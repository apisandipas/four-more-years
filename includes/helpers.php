<?php 

/**
*   Dump and die
*
*   @param $msg - optional (string)  - text output
*   @param $data - required (Object or Array) 
*/
function dd($data, $kill = true){
    if (is_array($data)){
        echo "<pre>"; print_r($data); echo "</pre>";
        $kill ? exit() : '';
    } elseif (is_object($data)){
        echo "<pre>"; var_dump($data); echo "</pre>";
        $kill ? exit() : '';
    }
}

/**
 *  Gets slug by Post ID
 * @param  {Int}    $id the Post ID
 * @return {String} the post's post_name attribute.
 */
function get_slug_by_id($id) {
    if ( !isset( $id ) ) return;

    $post_data = get_post( $id, ARRAY_A );
    $slug = $post_data['post_name'];
    return $slug; 
}


/**
*   General Labels for Custom Post types.
*
*   @param  string $singular 
*   @param  string $plural (optional)
*   @return array
*
*/
function bp_auto_labels( $singular, $plural = '' ) {
    if ( empty( $plural ) )
        $plural = $singular . 's';
 
    return array(
        'name' => $plural,
        'singular_name' => $singular,
        'search_items' => 'Search ' . $plural,
        'all_items' => 'All ' . $plural,
        'edit_item' => 'Edit ' . $plural,
        'add_new_item' => 'Add New ' . $plural,
        'menu_name' => $plural,
        'new_item' => 'New ' . $singular,
        'view_item' => 'View ' . $plural,
        'not_found' => 'No ' . $plural . ' found',
        'not_found_in_trash' => 'No ' . $plural . ' found in Trash',
        'parent_item_colon' => '',
    );
}

