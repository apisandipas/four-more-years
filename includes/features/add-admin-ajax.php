<?php 
function add_admin_ajax_path(){
    echo '<script>';
    echo 'window.ajaxUrl = "' . admin_url('/admin-ajax.php') .'"';
    echo '</script>';
}
add_action( 'wp_print_scripts', 'add_admin_ajax_path' );
