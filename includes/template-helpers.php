<?php 

/**
 *  Setup display of site titles thusly:
 * 
 *    Page Title  |  Site Title  | Site Description (on home page/blog) |  Page # (on paginated pages) 
 */
function sa_site_title(){
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
 * [sa_load_typekit description]
 * @return [type] [description]
 */
function sa_load_typekit($js){
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
function sa_copyright_range($start_copyright_year = "2014") {
    $current_year = (int) date('Y');
    
    // Don't display the range if the end year is the same as the start year, instead just display the year
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
function sa_post_date(){
    global $post;
    echo get_the_date('m', $post->ID);?><br><?php
    echo get_the_date('y', $post->ID);
}


/**
 * Grabs the permalink and appends it to the Facebook Sharer service url
 * @return {String} Facebook Share URL
 */
function sa_facebook_share(){
    global $post;

    $permalink = urlencode( get_permalink( $post->ID ) );
    $fb_url = "http://www.facebook.com/sharer/sharer.php?u=" . $permalink;

    return $fb_url;
}


/**
 * Appends share text to the Twitter Sharing service url
 * @return {String} Twitter Share URL
 */
function sa_twitter_share(){
    global $post;

    $post_title = urlencode( get_the_title( $post ) );
    $twt_path = "http://twitter.com/share/?text=Aquanaut Brewing Company presents: " . $post_title . ' ' ;

    return $twt_path;
}

function sa_address_to_map_url(){
    $line1 = esc_html( get_field( 'address_line_1', 'option' ) );
    $line2 = esc_html( get_field( 'address_line_2', 'option' ) );

    return 'http://maps.google.com/?q=' . $line1 . ' ' . $line2;
}
