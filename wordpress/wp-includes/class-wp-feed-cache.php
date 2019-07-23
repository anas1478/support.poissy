<?php
/**
 * Feed API: WP_Feed_Cache class
 *
 * @package WordPress
 * @subpackage Feed
 * @since 4.7.0
 */

/**
 * Core class used to implement a feed cache.
 *
 * @since 2.8.0
 *
 * @see SimplePie_Cache
 */
class WP_Feed_Cache extends SimplePie_Cache {

	/**
	 * Creates a new SimplePie_Cache object.
	 *
	 * @since 2.8.0
	 *
	 * @param string $location  URL location (scheme is used to determine handler).
	 * @param string $filename  Unique identifier for cache object.
	 * @param string $extension 'spi' or 'spc'.
	 * @return WP_Feed_Cache_Transient Feed cache handler object that uses transients.
	 */
<<<<<<< HEAD
	public function create( $location, $filename, $extension ) {
		return new WP_Feed_Cache_Transient( $location, $filename, $extension );
=======
	public function create($location, $filename, $extension) {
		return new WP_Feed_Cache_Transient($location, $filename, $extension);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}
}
