<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
<<<<<<< HEAD
define( 'WP_USE_THEMES', true );
=======
define('WP_USE_THEMES', true);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
