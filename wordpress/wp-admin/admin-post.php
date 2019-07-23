<?php
/**
 * WordPress Generic Request (POST/GET) Handler
 *
 * Intended for form submission handling in themes and plugins.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** We are located in WordPress Administration Screens */
if ( ! defined( 'WP_ADMIN' ) ) {
	define( 'WP_ADMIN', true );
}

<<<<<<< HEAD
if ( defined( 'ABSPATH' ) ) {
	require_once( ABSPATH . 'wp-load.php' );
} else {
	require_once( dirname( dirname( __FILE__ ) ) . '/wp-load.php' );
}
=======
if ( defined('ABSPATH') )
	require_once(ABSPATH . 'wp-load.php');
else
	require_once( dirname( dirname( __FILE__ ) ) . '/wp-load.php' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/** Allow for cross-domain requests (from the front end). */
send_origin_headers();

<<<<<<< HEAD
require_once( ABSPATH . 'wp-admin/includes/admin.php' );
=======
require_once(ABSPATH . 'wp-admin/includes/admin.php');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

nocache_headers();

/** This action is documented in wp-admin/admin.php */
do_action( 'admin_init' );

$action = empty( $_REQUEST['action'] ) ? '' : $_REQUEST['action'];

<<<<<<< HEAD
if ( ! is_user_logged_in() ) {
	if ( empty( $action ) ) {
		/**
		 * Fires on a non-authenticated admin post request where no action is supplied.
=======
if ( ! wp_validate_auth_cookie() ) {
	if ( empty( $action ) ) {
		/**
		 * Fires on a non-authenticated admin post request where no action was supplied.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 *
		 * @since 2.6.0
		 */
		do_action( 'admin_post_nopriv' );
	} else {
		/**
		 * Fires on a non-authenticated admin post request for the given action.
		 *
		 * The dynamic portion of the hook name, `$action`, refers to the given
		 * request action.
		 *
		 * @since 2.6.0
		 */
		do_action( "admin_post_nopriv_{$action}" );
	}
} else {
	if ( empty( $action ) ) {
		/**
<<<<<<< HEAD
		 * Fires on an authenticated admin post request where no action is supplied.
=======
		 * Fires on an authenticated admin post request where no action was supplied.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		 *
		 * @since 2.6.0
		 */
		do_action( 'admin_post' );
	} else {
		/**
		 * Fires on an authenticated admin post request for the given action.
		 *
		 * The dynamic portion of the hook name, `$action`, refers to the given
		 * request action.
		 *
		 * @since 2.6.0
		 */
		do_action( "admin_post_{$action}" );
	}
}
