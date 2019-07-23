<?php
/**
 * Session API: WP_User_Meta_Session_Tokens class
 *
 * @package WordPress
 * @subpackage Session
 * @since 4.7.0
 */

/**
 * Meta-based user sessions token manager.
 *
 * @since 4.0.0
<<<<<<< HEAD
 *
 * @see WP_Session_Tokens
=======
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
 */
class WP_User_Meta_Session_Tokens extends WP_Session_Tokens {

	/**
<<<<<<< HEAD
	 * Retrieves all sessions of the user.
	 *
	 * @since 4.0.0
	 *
	 * @return array Sessions of the user.
=======
	 * Get all sessions of a user.
	 *
	 * @since 4.0.0
	 *
	 * @return array Sessions of a user.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	protected function get_sessions() {
		$sessions = get_user_meta( $this->user_id, 'session_tokens', true );

		if ( ! is_array( $sessions ) ) {
			return array();
		}

		$sessions = array_map( array( $this, 'prepare_session' ), $sessions );
		return array_filter( $sessions, array( $this, 'is_still_valid' ) );
	}

	/**
	 * Converts an expiration to an array of session information.
	 *
	 * @param mixed $session Session or expiration.
	 * @return array Session.
	 */
	protected function prepare_session( $session ) {
		if ( is_int( $session ) ) {
			return array( 'expiration' => $session );
		}

		return $session;
	}

	/**
<<<<<<< HEAD
	 * Retrieves a session based on its verifier (token hash).
	 *
	 * @since 4.0.0
	 *
	 * @param string $verifier Verifier for the session to retrieve.
=======
	 * Retrieve a session by its verifier (token hash).
	 *
	 * @since 4.0.0
	 *
	 * @param string $verifier Verifier of the session to retrieve.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @return array|null The session, or null if it does not exist
	 */
	protected function get_session( $verifier ) {
		$sessions = $this->get_sessions();

		if ( isset( $sessions[ $verifier ] ) ) {
			return $sessions[ $verifier ];
		}

		return null;
	}

	/**
<<<<<<< HEAD
	 * Updates a session based on its verifier (token hash).
	 *
	 * @since 4.0.0
	 *
	 * @param string $verifier Verifier for the session to update.
=======
	 * Update a session by its verifier.
	 *
	 * @since 4.0.0
	 *
	 * @param string $verifier Verifier of the session to update.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param array  $session  Optional. Session. Omitting this argument destroys the session.
	 */
	protected function update_session( $verifier, $session = null ) {
		$sessions = $this->get_sessions();

		if ( $session ) {
			$sessions[ $verifier ] = $session;
		} else {
			unset( $sessions[ $verifier ] );
		}

		$this->update_sessions( $sessions );
	}

	/**
<<<<<<< HEAD
	 * Updates the user's sessions in the usermeta table.
=======
	 * Update a user's sessions in the usermeta table.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @since 4.0.0
	 *
	 * @param array $sessions Sessions.
	 */
	protected function update_sessions( $sessions ) {
		if ( $sessions ) {
			update_user_meta( $this->user_id, 'session_tokens', $sessions );
		} else {
			delete_user_meta( $this->user_id, 'session_tokens' );
		}
	}

	/**
<<<<<<< HEAD
	 * Destroys all sessions for this user, except the single session with the given verifier.
=======
	 * Destroy all session tokens for a user, except a single session passed.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @since 4.0.0
	 *
	 * @param string $verifier Verifier of the session to keep.
	 */
	protected function destroy_other_sessions( $verifier ) {
		$session = $this->get_session( $verifier );
		$this->update_sessions( array( $verifier => $session ) );
	}

	/**
<<<<<<< HEAD
	 * Destroys all session tokens for the user.
=======
	 * Destroy all session tokens for a user.
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 *
	 * @since 4.0.0
	 */
	protected function destroy_all_sessions() {
		$this->update_sessions( array() );
	}

	/**
<<<<<<< HEAD
	 * Destroys all sessions for all users.
	 *
	 * @since 4.0.0
=======
	 * Destroy all session tokens for all users.
	 *
	 * @since 4.0.0
	 * @static
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 */
	public static function drop_sessions() {
		delete_metadata( 'user', 0, 'session_tokens', false, true );
	}
}
