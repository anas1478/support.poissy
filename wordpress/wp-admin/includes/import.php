<?php
/**
 * WordPress Administration Importer API.
 *
 * @package WordPress
 * @subpackage Administration
 */

/**
 * Retrieve list of importers.
 *
 * @since 2.0.0
 *
 * @global array $wp_importers
 * @return array
 */
function get_importers() {
	global $wp_importers;
	if ( is_array( $wp_importers ) ) {
		uasort( $wp_importers, '_usort_by_first_member' );
	}
	return $wp_importers;
}

/**
 * Sorts a multidimensional array by first member of each top level member
 *
 * Used by uasort() as a callback, should not be used directly.
 *
 * @since 2.9.0
 * @access private
 *
 * @param array $a
 * @param array $b
 * @return int
 */
function _usort_by_first_member( $a, $b ) {
	return strnatcasecmp( $a[0], $b[0] );
}

/**
 * Register importer for WordPress.
 *
 * @since 2.0.0
 *
 * @global array $wp_importers
 *
 * @param string   $id          Importer tag. Used to uniquely identify importer.
 * @param string   $name        Importer name and title.
 * @param string   $description Importer description.
 * @param callable $callback    Callback to run.
 * @return WP_Error Returns WP_Error when $callback is WP_Error.
 */
function register_importer( $id, $name, $description, $callback ) {
	global $wp_importers;
<<<<<<< HEAD
	if ( is_wp_error( $callback ) ) {
		return $callback;
	}
	$wp_importers[ $id ] = array( $name, $description, $callback );
=======
	if ( is_wp_error( $callback ) )
		return $callback;
	$wp_importers[$id] = array ( $name, $description, $callback );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

/**
 * Cleanup importer.
 *
 * Removes attachment based on ID.
 *
 * @since 2.0.0
 *
 * @param string $id Importer ID.
 */
function wp_import_cleanup( $id ) {
	wp_delete_attachment( $id );
}

/**
 * Handle importer uploading and add attachment.
 *
 * @since 2.0.0
 *
 * @return array Uploaded file's details on success, error message on failure
 */
function wp_import_handle_upload() {
	if ( ! isset( $_FILES['import'] ) ) {
		return array(
<<<<<<< HEAD
			'error' => __( 'File is empty. Please upload something more substantial. This error could also be caused by uploads being disabled in your php.ini or by post_max_size being defined as smaller than upload_max_filesize in php.ini.' ),
		);
	}

	$overrides                 = array(
		'test_form' => false,
		'test_type' => false,
	);
	$_FILES['import']['name'] .= '.txt';
	$upload                    = wp_handle_upload( $_FILES['import'], $overrides );
=======
			'error' => __( 'File is empty. Please upload something more substantial. This error could also be caused by uploads being disabled in your php.ini or by post_max_size being defined as smaller than upload_max_filesize in php.ini.' )
		);
	}

	$overrides = array( 'test_form' => false, 'test_type' => false );
	$_FILES['import']['name'] .= '.txt';
	$upload = wp_handle_upload( $_FILES['import'], $overrides );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	if ( isset( $upload['error'] ) ) {
		return $upload;
	}

	// Construct the object array
	$object = array(
<<<<<<< HEAD
		'post_title'     => basename( $upload['file'] ),
		'post_content'   => $upload['url'],
		'post_mime_type' => $upload['type'],
		'guid'           => $upload['url'],
		'context'        => 'import',
		'post_status'    => 'private',
=======
		'post_title' => basename( $upload['file'] ),
		'post_content' => $upload['url'],
		'post_mime_type' => $upload['type'],
		'guid' => $upload['url'],
		'context' => 'import',
		'post_status' => 'private'
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	);

	// Save the data
	$id = wp_insert_attachment( $object, $upload['file'] );

	/*
	 * Schedule a cleanup for one day from now in case of failed
	 * import or missing wp_import_cleanup() call.
	 */
	wp_schedule_single_event( time() + DAY_IN_SECONDS, 'importer_scheduled_cleanup', array( $id ) );

<<<<<<< HEAD
	return array(
		'file' => $upload['file'],
		'id'   => $id,
	);
=======
	return array( 'file' => $upload['file'], 'id' => $id );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

/**
 * Returns a list from WordPress.org of popular importer plugins.
 *
 * @since 3.5.0
 *
 * @return array Importers with metadata for each.
 */
function wp_get_popular_importers() {
	include( ABSPATH . WPINC . '/version.php' ); // include an unmodified $wp_version

<<<<<<< HEAD
	$locale            = get_user_locale();
	$cache_key         = 'popular_importers_' . md5( $locale . $wp_version );
	$popular_importers = get_site_transient( $cache_key );

	if ( ! $popular_importers ) {
		$url     = add_query_arg(
			array(
				'locale'  => $locale,
				'version' => $wp_version,
			),
			'http://api.wordpress.org/core/importers/1.1/'
		);
=======
	$locale = get_user_locale();
	$cache_key = 'popular_importers_' . md5( $locale . $wp_version );
	$popular_importers = get_site_transient( $cache_key );

	if ( ! $popular_importers ) {
		$url = add_query_arg( array(
			'locale'  => $locale,
			'version' => $wp_version,
		), 'http://api.wordpress.org/core/importers/1.1/' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$options = array( 'user-agent' => 'WordPress/' . $wp_version . '; ' . home_url( '/' ) );

		if ( wp_http_supports( array( 'ssl' ) ) ) {
			$url = set_url_scheme( $url, 'https' );
		}

<<<<<<< HEAD
		$response          = wp_remote_get( $url, $options );
=======
		$response = wp_remote_get( $url, $options );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$popular_importers = json_decode( wp_remote_retrieve_body( $response ), true );

		if ( is_array( $popular_importers ) ) {
			set_site_transient( $cache_key, $popular_importers, 2 * DAY_IN_SECONDS );
		} else {
			$popular_importers = false;
		}
	}

	if ( is_array( $popular_importers ) ) {
		// If the data was received as translated, return it as-is.
<<<<<<< HEAD
		if ( $popular_importers['translated'] ) {
			return $popular_importers['importers'];
		}

		foreach ( $popular_importers['importers'] as &$importer ) {
			// phpcs:ignore WordPress.WP.I18n.LowLevelTranslationFunction,WordPress.WP.I18n.NonSingularStringLiteralText
			$importer['description'] = translate( $importer['description'] );
			if ( $importer['name'] != 'WordPress' ) {
				// phpcs:ignore WordPress.WP.I18n.LowLevelTranslationFunction,WordPress.WP.I18n.NonSingularStringLiteralText
				$importer['name'] = translate( $importer['name'] );
			}
=======
		if ( $popular_importers['translated'] )
			return $popular_importers['importers'];

		foreach ( $popular_importers['importers'] as &$importer ) {
			$importer['description'] = translate( $importer['description'] );
			if ( $importer['name'] != 'WordPress' )
				$importer['name'] = translate( $importer['name'] );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		}
		return $popular_importers['importers'];
	}

	return array(
		// slug => name, description, plugin slug, and register_importer() slug
<<<<<<< HEAD
		'blogger'     => array(
			'name'        => __( 'Blogger' ),
=======
		'blogger' => array(
			'name' => __( 'Blogger' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts, comments, and users from a Blogger blog.' ),
			'plugin-slug' => 'blogger-importer',
			'importer-id' => 'blogger',
		),
<<<<<<< HEAD
		'wpcat2tag'   => array(
			'name'        => __( 'Categories and Tags Converter' ),
=======
		'wpcat2tag' => array(
			'name' => __( 'Categories and Tags Converter' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Convert existing categories to tags or tags to categories, selectively.' ),
			'plugin-slug' => 'wpcat2tag-importer',
			'importer-id' => 'wp-cat2tag',
		),
		'livejournal' => array(
<<<<<<< HEAD
			'name'        => __( 'LiveJournal' ),
=======
			'name' => __( 'LiveJournal' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts from LiveJournal using their API.' ),
			'plugin-slug' => 'livejournal-importer',
			'importer-id' => 'livejournal',
		),
		'movabletype' => array(
<<<<<<< HEAD
			'name'        => __( 'Movable Type and TypePad' ),
=======
			'name' => __( 'Movable Type and TypePad' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts and comments from a Movable Type or TypePad blog.' ),
			'plugin-slug' => 'movabletype-importer',
			'importer-id' => 'mt',
		),
<<<<<<< HEAD
		'opml'        => array(
			'name'        => __( 'Blogroll' ),
=======
		'opml' => array(
			'name' => __( 'Blogroll' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import links in OPML format.' ),
			'plugin-slug' => 'opml-importer',
			'importer-id' => 'opml',
		),
<<<<<<< HEAD
		'rss'         => array(
			'name'        => __( 'RSS' ),
=======
		'rss' => array(
			'name' => __( 'RSS' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts from an RSS feed.' ),
			'plugin-slug' => 'rss-importer',
			'importer-id' => 'rss',
		),
<<<<<<< HEAD
		'tumblr'      => array(
			'name'        => __( 'Tumblr' ),
=======
		'tumblr' => array(
			'name' => __( 'Tumblr' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts &amp; media from Tumblr using their API.' ),
			'plugin-slug' => 'tumblr-importer',
			'importer-id' => 'tumblr',
		),
<<<<<<< HEAD
		'wordpress'   => array(
			'name'        => 'WordPress',
=======
		'wordpress' => array(
			'name' => 'WordPress',
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			'description' => __( 'Import posts, pages, comments, custom fields, categories, and tags from a WordPress export file.' ),
			'plugin-slug' => 'wordpress-importer',
			'importer-id' => 'wordpress',
		),
	);
}
