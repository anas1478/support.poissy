<?php
/**
 * Handles Comment Post to WordPress and prevents duplicate comment posting.
 *
 * @package WordPress
 */

if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	$protocol = $_SERVER['SERVER_PROTOCOL'];
	if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
		$protocol = 'HTTP/1.0';
	}

<<<<<<< HEAD
	header( 'Allow: POST' );
	header( "$protocol 405 Method Not Allowed" );
	header( 'Content-Type: text/plain' );
=======
	header('Allow: POST');
	header("$protocol 405 Method Not Allowed");
	header('Content-Type: text/plain');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	exit;
}

/** Sets up the WordPress Environment. */
<<<<<<< HEAD
require( dirname( __FILE__ ) . '/wp-load.php' );
=======
require( dirname(__FILE__) . '/wp-load.php' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

nocache_headers();

$comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
if ( is_wp_error( $comment ) ) {
	$data = intval( $comment->get_error_data() );
	if ( ! empty( $data ) ) {
<<<<<<< HEAD
		wp_die(
			'<p>' . $comment->get_error_message() . '</p>',
			__( 'Comment Submission Failure' ),
			array(
				'response'  => $data,
				'back_link' => true,
			)
		);
=======
		wp_die( '<p>' . $comment->get_error_message() . '</p>', __( 'Comment Submission Failure' ), array( 'response' => $data, 'back_link' => true ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	} else {
		exit;
	}
}

<<<<<<< HEAD
$user            = wp_get_current_user();
=======
$user = wp_get_current_user();
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
$cookies_consent = ( isset( $_POST['wp-comment-cookies-consent'] ) );

/**
 * Perform other actions when comment cookies are set.
 *
 * @since 3.4.0
 * @since 4.9.6 The `$cookies_consent` parameter was added.
 *
 * @param WP_Comment $comment         Comment object.
 * @param WP_User    $user            Comment author's user object. The user may not exist.
 * @param boolean    $cookies_consent Comment author's consent to store cookies.
 */
do_action( 'set_comment_cookies', $comment, $user, $cookies_consent );

$location = empty( $_POST['redirect_to'] ) ? get_comment_link( $comment ) : $_POST['redirect_to'] . '#comment-' . $comment->comment_ID;

<<<<<<< HEAD
// Add specific query arguments to display the awaiting moderation message.
if ( 'unapproved' === wp_get_comment_status( $comment ) && ! empty( $comment->comment_author_email ) ) {
	$location = add_query_arg(
		array(
			'unapproved'      => $comment->comment_ID,
			'moderation-hash' => wp_hash( $comment->comment_date_gmt ),
		),
		$location
	);
}

=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
/**
 * Filters the location URI to send the commenter after posting.
 *
 * @since 2.0.5
 *
 * @param string     $location The 'redirect_to' URI sent via $_POST.
 * @param WP_Comment $comment  Comment object.
 */
$location = apply_filters( 'comment_post_redirect', $location, $comment );

wp_safe_redirect( $location );
exit;
