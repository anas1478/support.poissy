<?php
/**
 * Install plugin network administration panel.
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.1.0
 */

<<<<<<< HEAD
if ( isset( $_GET['tab'] ) && ( 'plugin-information' == $_GET['tab'] ) ) {
	define( 'IFRAME_REQUEST', true );
}
=======
if ( isset( $_GET['tab'] ) && ( 'plugin-information' == $_GET['tab'] ) )
	define( 'IFRAME_REQUEST', true );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

require( ABSPATH . 'wp-admin/plugin-install.php' );
