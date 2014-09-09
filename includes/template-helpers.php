<?php 

/**
 *  Setup display of site titles thusly:
 * 
 *    Page Title  |  Site Title  | Site Description (on home page/blog) |  Page # (on paginated pages) 
 */
function dnd_site_title(){
    global $page, $paged;

    wp_title( '|', true, 'right' ); 
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ){
        echo " | $site_description";
    }
    if ( $paged >= 2 || $page >= 2 ) {
        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    }
}

/**
 * [dnd_load_typekit description]
 * @return [type] [description]
 */
function dnd_load_typekit($js){
    ?>
    <script type="text/javascript" src="//use.typekit.net/<?php echo $js ?>.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php
}


/**
*   Returns a copyright year range for use in Copyright info
* 
*   @param string $start_copyright_year
*   @return string
*
*/
function dnd_copyright_range($start_copyright_year = "2014") {
    $current_year = (int) date('Y');
    
    // Don't display the range if the end year is the dndme as the start year, instead just display the year
    if( $start_copyright_year >= $current_year ) {
        return $current_year;
    } else {
        return $start_copyright_year . ' - ' . $current_year;
    }
}


/**
 * Formats the date for the blog posts.
 * @return [type] [description]
 */
function dnd_post_date(){
    global $post;
    echo get_the_date('m', $post->ID);?><br><?php
    echo get_the_date('y', $post->ID);
}


/**
 * Grabs the permalink and appends it to the Facebook Sharer service url
 * @return {String} Facebook Share URL
 */
function dnd_facebook_share(){
    global $post;

    $permalink = urlencode( get_permalink( $post->ID ) );
    $fb_url = "http://www.facebook.com/sharer/sharer.php?u=" . $permalink;

    return $fb_url;
}


/**
 * Appends share text to the Twitter Sharing service url
 * @return {String} Twitter Share URL
 */
function dnd_twitter_share(){
    global $post;

    $post_title = urlencode( get_the_title( $post ) );
    $twt_path = "http://twitter.com/share/?text=" . $post_title . ' ' ;

    return $twt_path;
}



/**
 * Takes an address string and appends it to a google map search url
 * @param  {String} $url search url
 * @return {String}      google maps url + search url
 */
function dnd_google_map_url($url){
    return 'http://maps.google.com/?q=' . $url;
}




