<?php
/**
 * Noop functions for load-scripts.php and load-styles.php.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */

/**
 * @ignore
 */
function __() {}

/**
 * @ignore
 */
function _x() {}

/**
 * @ignore
 */
function add_filter() {}

/**
 * @ignore
 */
function esc_attr() {}

/**
 * @ignore
 */
function apply_filters() {}

/**
 * @ignore
 */
function get_option() {}

/**
 * @ignore
 */
function is_lighttpd_before_150() {}

/**
 * @ignore
 */
function add_action() {}

/**
 * @ignore
 */
function did_action() {}

/**
 * @ignore
 */
function do_action_ref_array() {}

/**
 * @ignore
 */
function get_bloginfo() {}

/**
 * @ignore
 */
<<<<<<< HEAD
function is_admin() {
	return true;}
=======
function is_admin() {return true;}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/**
 * @ignore
 */
function site_url() {}

/**
 * @ignore
 */
function admin_url() {}

/**
 * @ignore
 */
function home_url() {}

/**
 * @ignore
 */
function includes_url() {}

/**
 * @ignore
 */
function wp_guess_url() {}

if ( ! function_exists( 'json_encode' ) ) :
<<<<<<< HEAD
	/**
	 * @ignore
	 */
	function json_encode() {}
=======
/**
 * @ignore
 */
function json_encode() {}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
endif;

function get_file( $path ) {

<<<<<<< HEAD
	if ( function_exists( 'realpath' ) ) {
=======
	if ( function_exists('realpath') ) {
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$path = realpath( $path );
	}

	if ( ! $path || ! @is_file( $path ) ) {
		return '';
	}

	return @file_get_contents( $path );
<<<<<<< HEAD
}
=======
}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
