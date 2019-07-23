<?php

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging
 */
<<<<<<< HEAD
error_reporting( 0 );
=======
error_reporting(0);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/** Set ABSPATH for execution */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( dirname( __FILE__ ) ) . '/' );
}

define( 'WPINC', 'wp-includes' );

require( ABSPATH . 'wp-admin/includes/noop.php' );
require( ABSPATH . WPINC . '/script-loader.php' );
require( ABSPATH . WPINC . '/version.php' );

$load = $_GET['load'];
if ( is_array( $load ) ) {
	$load = implode( '', $load );
}
$load = preg_replace( '/[^a-z0-9,_-]+/i', '', $load );
$load = array_unique( explode( ',', $load ) );

<<<<<<< HEAD
if ( empty( $load ) ) {
	exit;
}

$rtl            = ( isset( $_GET['dir'] ) && 'rtl' == $_GET['dir'] );
$expires_offset = 31536000; // 1 year
$out            = '';

$wp_styles = new WP_Styles();
wp_default_styles( $wp_styles );
=======
if ( empty($load) )
	exit;

$rtl = ( isset($_GET['dir']) && 'rtl' == $_GET['dir'] );
$expires_offset = 31536000; // 1 year
$out = '';

$wp_styles = new WP_Styles();
wp_default_styles($wp_styles);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

if ( isset( $_SERVER['HTTP_IF_NONE_MATCH'] ) && stripslashes( $_SERVER['HTTP_IF_NONE_MATCH'] ) === $wp_version ) {
	$protocol = $_SERVER['SERVER_PROTOCOL'];
	if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
		$protocol = 'HTTP/1.0';
	}
	header( "$protocol 304 Not Modified" );
	exit();
}

foreach ( $load as $handle ) {
<<<<<<< HEAD
	if ( ! array_key_exists( $handle, $wp_styles->registered ) ) {
		continue;
	}

	$style = $wp_styles->registered[ $handle ];
=======
	if ( !array_key_exists($handle, $wp_styles->registered) )
		continue;

	$style = $wp_styles->registered[$handle];
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	if ( empty( $style->src ) ) {
		continue;
	}

	$path = ABSPATH . $style->src;

	if ( $rtl && ! empty( $style->extra['rtl'] ) ) {
		// All default styles have fully independent RTL files.
		$path = str_replace( '.min.css', '-rtl.min.css', $path );
	}

	$content = get_file( $path ) . "\n";

	if ( strpos( $style->src, '/' . WPINC . '/css/' ) === 0 ) {
		$content = str_replace( '../images/', '../' . WPINC . '/images/', $content );
		$content = str_replace( '../js/tinymce/', '../' . WPINC . '/js/tinymce/', $content );
		$content = str_replace( '../fonts/', '../' . WPINC . '/fonts/', $content );
<<<<<<< HEAD
		$out    .= $content;
=======
		$out .= $content;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	} else {
		$out .= str_replace( '../images/', 'images/', $content );
	}
}

<<<<<<< HEAD
header( "Etag: $wp_version" );
header( 'Content-Type: text/css; charset=UTF-8' );
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $expires_offset ) . ' GMT' );
header( "Cache-Control: public, max-age=$expires_offset" );
=======
header("Etag: $wp_version");
header('Content-Type: text/css; charset=UTF-8');
header('Expires: ' . gmdate( "D, d M Y H:i:s", time() + $expires_offset ) . ' GMT');
header("Cache-Control: public, max-age=$expires_offset");
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

echo $out;
exit;
