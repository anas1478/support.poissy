<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

<<<<<<< HEAD
if ( ! isset( $wp_did_header ) ) {
=======
if ( !isset($wp_did_header) ) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	$wp_did_header = true;

	// Load the WordPress library.
<<<<<<< HEAD
	require_once( dirname( __FILE__ ) . '/wp-load.php' );
=======
	require_once( dirname(__FILE__) . '/wp-load.php' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once( ABSPATH . WPINC . '/template-loader.php' );

}
