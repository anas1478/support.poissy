<?php
/**
 * Feed API
 *
 * @package WordPress
 * @subpackage Feed
 */

_deprecated_file( basename( __FILE__ ), '4.7.0', 'fetch_feed()' );

if ( ! class_exists( 'SimplePie', false ) ) {
	require_once( ABSPATH . WPINC . '/class-simplepie.php' );
}

require_once( ABSPATH . WPINC . '/class-wp-feed-cache.php' );
require_once( ABSPATH . WPINC . '/class-wp-feed-cache-transient.php' );
require_once( ABSPATH . WPINC . '/class-wp-simplepie-file.php' );
<<<<<<< HEAD
require_once( ABSPATH . WPINC . '/class-wp-simplepie-sanitize-kses.php' );
=======
require_once( ABSPATH . WPINC . '/class-wp-simplepie-sanitize-kses.php' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
