<?php
/**
 * Add Link Administration Screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

<<<<<<< HEAD
if ( ! current_user_can( 'manage_links' ) ) {
	wp_die( __( 'Sorry, you are not allowed to add links to this site.' ) );
}

$title       = __( 'Add New Link' );
$parent_file = 'link-manager.php';

wp_reset_vars( array( 'action', 'cat_id', 'link_id' ) );

wp_enqueue_script( 'link' );
wp_enqueue_script( 'xfn' );

if ( wp_is_mobile() ) {
	wp_enqueue_script( 'jquery-touch-punch' );
}
=======
if ( ! current_user_can('manage_links') )
	wp_die(__('Sorry, you are not allowed to add links to this site.'));

$title = __('Add New Link');
$parent_file = 'link-manager.php';

wp_reset_vars( array('action', 'cat_id', 'link_id' ) );

wp_enqueue_script('link');
wp_enqueue_script('xfn');

if ( wp_is_mobile() )
	wp_enqueue_script( 'jquery-touch-punch' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

$link = get_default_link_to_edit();
include( ABSPATH . 'wp-admin/edit-link-form.php' );

require( ABSPATH . 'wp-admin/admin-footer.php' );
