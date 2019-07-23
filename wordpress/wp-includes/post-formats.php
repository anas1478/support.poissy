<?php
/**
 * Post format functions.
 *
 * @package WordPress
 * @subpackage Post
 */

/**
 * Retrieve the format slug for a post
 *
 * @since 3.1.0
 *
 * @param int|object|null $post Post ID or post object. Optional, default is the current post from the loop.
 * @return string|false The format if successful. False otherwise.
 */
function get_post_format( $post = null ) {
<<<<<<< HEAD
	$post = get_post( $post );

	if ( ! $post ) {
		return false;
	}

	if ( ! post_type_supports( $post->post_type, 'post-formats' ) ) {
		return false;
	}

	$_format = get_the_terms( $post->ID, 'post_format' );

	if ( empty( $_format ) ) {
		return false;
	}

	$format = reset( $_format );

	return str_replace( 'post-format-', '', $format->slug );
=======
	if ( ! $post = get_post( $post ) )
		return false;

	if ( ! post_type_supports( $post->post_type, 'post-formats' ) )
		return false;

	$_format = get_the_terms( $post->ID, 'post_format' );

	if ( empty( $_format ) )
		return false;

	$format = reset( $_format );

	return str_replace('post-format-', '', $format->slug );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

/**
 * Check if a post has any of the given formats, or any format.
 *
 * @since 3.1.0
 *
 * @param string|array    $format Optional. The format or formats to check.
 * @param object|int|null $post   Optional. The post to check. If not supplied, defaults to the current post if used in the loop.
 * @return bool True if the post has any of the given formats (or any format, if no format specified), false otherwise.
 */
function has_post_format( $format = array(), $post = null ) {
	$prefixed = array();

	if ( $format ) {
		foreach ( (array) $format as $single ) {
			$prefixed[] = 'post-format-' . sanitize_key( $single );
		}
	}

	return has_term( $prefixed, 'post_format', $post );
}

/**
 * Assign a format to a post
 *
 * @since 3.1.0
 *
 * @param int|object $post   The post for which to assign a format.
 * @param string     $format A format to assign. Use an empty string or array to remove all formats from the post.
 * @return array|WP_Error|false WP_Error on error. Array of affected term IDs on success.
 */
function set_post_format( $post, $format ) {
	$post = get_post( $post );

<<<<<<< HEAD
	if ( ! $post ) {
		return new WP_Error( 'invalid_post', __( 'Invalid post.' ) );
	}

	if ( ! empty( $format ) ) {
		$format = sanitize_key( $format );
		if ( 'standard' === $format || ! in_array( $format, get_post_format_slugs() ) ) {
			$format = '';
		} else {
			$format = 'post-format-' . $format;
		}
=======
	if ( empty( $post ) )
		return new WP_Error( 'invalid_post', __( 'Invalid post.' ) );

	if ( ! empty( $format ) ) {
		$format = sanitize_key( $format );
		if ( 'standard' === $format || ! in_array( $format, get_post_format_slugs() ) )
			$format = '';
		else
			$format = 'post-format-' . $format;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	return wp_set_post_terms( $post->ID, $format, 'post_format' );
}

/**
 * Returns an array of post format slugs to their translated and pretty display versions
 *
 * @since 3.1.0
 *
 * @return array The array of translated post format names.
 */
function get_post_format_strings() {
	$strings = array(
		'standard' => _x( 'Standard', 'Post format' ), // Special case. any value that evals to false will be considered standard
<<<<<<< HEAD
		'aside'    => _x( 'Aside', 'Post format' ),
		'chat'     => _x( 'Chat', 'Post format' ),
		'gallery'  => _x( 'Gallery', 'Post format' ),
		'link'     => _x( 'Link', 'Post format' ),
		'image'    => _x( 'Image', 'Post format' ),
		'quote'    => _x( 'Quote', 'Post format' ),
		'status'   => _x( 'Status', 'Post format' ),
		'video'    => _x( 'Video', 'Post format' ),
		'audio'    => _x( 'Audio', 'Post format' ),
=======
		'aside'    => _x( 'Aside',    'Post format' ),
		'chat'     => _x( 'Chat',     'Post format' ),
		'gallery'  => _x( 'Gallery',  'Post format' ),
		'link'     => _x( 'Link',     'Post format' ),
		'image'    => _x( 'Image',    'Post format' ),
		'quote'    => _x( 'Quote',    'Post format' ),
		'status'   => _x( 'Status',   'Post format' ),
		'video'    => _x( 'Video',    'Post format' ),
		'audio'    => _x( 'Audio',    'Post format' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	);
	return $strings;
}

/**
 * Retrieves the array of post format slugs.
 *
 * @since 3.1.0
 *
 * @return array The array of post format slugs as both keys and values.
 */
function get_post_format_slugs() {
	$slugs = array_keys( get_post_format_strings() );
	return array_combine( $slugs, $slugs );
}

/**
 * Returns a pretty, translated version of a post format slug
 *
 * @since 3.1.0
 *
 * @param string $slug A post format slug.
 * @return string The translated post format name.
 */
function get_post_format_string( $slug ) {
	$strings = get_post_format_strings();
<<<<<<< HEAD
	if ( ! $slug ) {
		return $strings['standard'];
	} else {
		return ( isset( $strings[ $slug ] ) ) ? $strings[ $slug ] : '';
	}
=======
	if ( !$slug )
		return $strings['standard'];
	else
		return ( isset( $strings[$slug] ) ) ? $strings[$slug] : '';
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

/**
 * Returns a link to a post format index.
 *
 * @since 3.1.0
 *
 * @param string $format The post format slug.
 * @return string|WP_Error|false The post format term link.
 */
function get_post_format_link( $format ) {
<<<<<<< HEAD
	$term = get_term_by( 'slug', 'post-format-' . $format, 'post_format' );
	if ( ! $term || is_wp_error( $term ) ) {
		return false;
	}
=======
	$term = get_term_by('slug', 'post-format-' . $format, 'post_format' );
	if ( ! $term || is_wp_error( $term ) )
		return false;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	return get_term_link( $term );
}

/**
 * Filters the request to allow for the format prefix.
 *
 * @access private
 * @since 3.1.0
 *
 * @param array $qvs
 * @return array
 */
function _post_format_request( $qvs ) {
<<<<<<< HEAD
	if ( ! isset( $qvs['post_format'] ) ) {
		return $qvs;
	}
	$slugs = get_post_format_slugs();
	if ( isset( $slugs[ $qvs['post_format'] ] ) ) {
		$qvs['post_format'] = 'post-format-' . $slugs[ $qvs['post_format'] ];
	}
	$tax = get_taxonomy( 'post_format' );
	if ( ! is_admin() ) {
		$qvs['post_type'] = $tax->object_type;
	}
=======
	if ( ! isset( $qvs['post_format'] ) )
		return $qvs;
	$slugs = get_post_format_slugs();
	if ( isset( $slugs[ $qvs['post_format'] ] ) )
		$qvs['post_format'] = 'post-format-' . $slugs[ $qvs['post_format'] ];
	$tax = get_taxonomy( 'post_format' );
	if ( ! is_admin() )
		$qvs['post_type'] = $tax->object_type;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	return $qvs;
}

/**
 * Filters the post format term link to remove the format prefix.
 *
 * @access private
 * @since 3.1.0
 *
 * @global WP_Rewrite $wp_rewrite
 *
 * @param string $link
 * @param object $term
 * @param string $taxonomy
 * @return string
 */
function _post_format_link( $link, $term, $taxonomy ) {
	global $wp_rewrite;
	if ( 'post_format' != $taxonomy ) {
		return $link;
	}
	if ( $wp_rewrite->get_extra_permastruct( $taxonomy ) ) {
		return str_replace( "/{$term->slug}", '/' . str_replace( 'post-format-', '', $term->slug ), $link );
	} else {
		$link = remove_query_arg( 'post_format', $link );
		return add_query_arg( 'post_format', str_replace( 'post-format-', '', $term->slug ), $link );
	}
}

/**
 * Remove the post format prefix from the name property of the term object created by get_term().
 *
 * @access private
 * @since 3.1.0
 *
 * @param object $term
 * @return object
 */
function _post_format_get_term( $term ) {
	if ( isset( $term->slug ) ) {
		$term->name = get_post_format_string( str_replace( 'post-format-', '', $term->slug ) );
	}
	return $term;
}

/**
 * Remove the post format prefix from the name property of the term objects created by get_terms().
 *
 * @access private
 * @since 3.1.0
 *
 * @param array        $terms
 * @param string|array $taxonomies
 * @param array        $args
 * @return array
 */
function _post_format_get_terms( $terms, $taxonomies, $args ) {
	if ( in_array( 'post_format', (array) $taxonomies ) ) {
		if ( isset( $args['fields'] ) && 'names' == $args['fields'] ) {
			foreach ( $terms as $order => $name ) {
<<<<<<< HEAD
				$terms[ $order ] = get_post_format_string( str_replace( 'post-format-', '', $name ) );
=======
				$terms[$order] = get_post_format_string( str_replace( 'post-format-', '', $name ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			}
		} else {
			foreach ( (array) $terms as $order => $term ) {
				if ( isset( $term->taxonomy ) && 'post_format' == $term->taxonomy ) {
<<<<<<< HEAD
					$terms[ $order ]->name = get_post_format_string( str_replace( 'post-format-', '', $term->slug ) );
=======
					$terms[$order]->name = get_post_format_string( str_replace( 'post-format-', '', $term->slug ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				}
			}
		}
	}
	return $terms;
}

/**
 * Remove the post format prefix from the name property of the term objects created by wp_get_object_terms().
 *
 * @access private
 * @since 3.1.0
 *
 * @param array $terms
 * @return array
 */
function _post_format_wp_get_object_terms( $terms ) {
	foreach ( (array) $terms as $order => $term ) {
		if ( isset( $term->taxonomy ) && 'post_format' == $term->taxonomy ) {
<<<<<<< HEAD
			$terms[ $order ]->name = get_post_format_string( str_replace( 'post-format-', '', $term->slug ) );
=======
			$terms[$order]->name = get_post_format_string( str_replace( 'post-format-', '', $term->slug ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		}
	}
	return $terms;
}
