<?php
/**
 * WordPress Options Header.
 *
 * Displays updated message, if updated variable is part of the URL query.
 *
 * @package WordPress
 * @subpackage Administration
 */

wp_reset_vars( array( 'action' ) );

if ( isset( $_GET['updated'] ) && isset( $_GET['page'] ) ) {
	// For back-compat with plugins that don't use the Settings API and just set updated=1 in the redirect.
<<<<<<< HEAD
	add_settings_error( 'general', 'settings_updated', __( 'Settings saved.' ), 'updated' );
=======
	add_settings_error('general', 'settings_updated', __('Settings saved.'), 'updated');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

settings_errors();
