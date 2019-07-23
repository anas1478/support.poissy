<?php
/**
 * Action handler for Multisite administration panels.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.0.0
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

<<<<<<< HEAD
$action = ( isset( $_GET['action'] ) ) ? $_GET['action'] : '';

if ( empty( $action ) ) {
=======
if ( empty( $_GET['action'] ) ) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	wp_redirect( network_admin_url() );
	exit;
}

/**
 * Fires just before the action handler in several Network Admin screens.
 *
 * This hook fires on multiple screens in the Multisite Network Admin,
 * including Users, Network Settings, and Site Settings.
 *
 * @since 3.0.0
 */
do_action( 'wpmuadminedit' );

/**
 * Fires the requested handler action.
 *
<<<<<<< HEAD
 * The dynamic portion of the hook name, `$action`, refers to the name
 * of the requested action derived from the `GET` request.
 *
 * @since 3.1.0
 */
do_action( "network_admin_edit_{$action}" );
=======
 * The dynamic portion of the hook name, `$_GET['action']`, refers to the name
 * of the requested action.
 *
 * @since 3.1.0
 */
do_action( 'network_admin_edit_' . $_GET['action'] );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

wp_redirect( network_admin_url() );
exit();
