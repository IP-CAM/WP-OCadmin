<?php
/**
* Plugin Name: WP OCadmin
* Plugin URI: http://nosite.nl/
* Description: Manage your OpenCart direct from your Wordpress Admin.
* Version: 1.0rc1
* Author: Tim @ nosite.nl
* Author URI: http://nosite.nl
* License: GPL3
*/
add_action( 'admin_menu', 'register_wp_oc_admin' );

function register_wp_oc_admin(){
    add_menu_page( 'OC Admin', 'OCadmin', 'manage_options', 'wp_oc_admin', 'wp_oc_admin', '' , 6 );
}

function wp_oc_admin(){
    echo '<iframe width="100%" height="800px" src="http://nosite.nl/oc/admin/"></iframe>';
}
?>
