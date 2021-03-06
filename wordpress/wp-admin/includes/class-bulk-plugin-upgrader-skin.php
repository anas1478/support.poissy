<?php
/**
 * Upgrader API: Bulk_Plugin_Upgrader_Skin class
 *
 * @package WordPress
 * @subpackage Upgrader
 * @since 4.6.0
 */

/**
 * Bulk Plugin Upgrader Skin for WordPress Plugin Upgrades.
 *
 * @since 3.0.0
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php.
 *
 * @see Bulk_Upgrader_Skin
 */
class Bulk_Plugin_Upgrader_Skin extends Bulk_Upgrader_Skin {
<<<<<<< HEAD
	public $plugin_info = array(); // Plugin_Upgrader::bulk_upgrade() will fill this in.

	public function add_strings() {
		parent::add_strings();
		/* translators: 1: name of plugin being updated, 2: number of updating plugin, 3: total number of plugins being updated */
		$this->upgrader->strings['skin_before_update_header'] = __( 'Updating Plugin %1$s (%2$d/%3$d)' );
	}

	/**
	 * @param string $title
	 */
	public function before( $title = '' ) {
		parent::before( $this->plugin_info['Title'] );
	}

	/**
	 * @param string $title
	 */
	public function after( $title = '' ) {
		parent::after( $this->plugin_info['Title'] );
=======
	public $plugin_info = array(); // Plugin_Upgrader::bulk() will fill this in.

	public function add_strings() {
		parent::add_strings();
		$this->upgrader->strings['skin_before_update_header'] = __('Updating Plugin %1$s (%2$d/%3$d)');
	}

	/**
	 *
	 * @param string $title
	 */
	public function before($title = '') {
		parent::before($this->plugin_info['Title']);
	}

	/**
	 *
	 * @param string $title
	 */
	public function after($title = '') {
		parent::after($this->plugin_info['Title']);
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$this->decrement_update_count( 'plugin' );
	}

	/**
	 */
	public function bulk_footer() {
		parent::bulk_footer();
<<<<<<< HEAD
		$update_actions = array(
			'plugins_page' => '<a href="' . self_admin_url( 'plugins.php' ) . '" target="_parent">' . __( 'Return to Plugins page' ) . '</a>',
			'updates_page' => '<a href="' . self_admin_url( 'update-core.php' ) . '" target="_parent">' . __( 'Return to WordPress Updates page' ) . '</a>',
		);
		if ( ! current_user_can( 'activate_plugins' ) ) {
			unset( $update_actions['plugins_page'] );
		}
=======
		$update_actions =  array(
			'plugins_page' => '<a href="' . self_admin_url( 'plugins.php' ) . '" target="_parent">' . __( 'Return to Plugins page' ) . '</a>',
			'updates_page' => '<a href="' . self_admin_url( 'update-core.php' ) . '" target="_parent">' . __( 'Return to WordPress Updates page' ) . '</a>'
		);
		if ( ! current_user_can( 'activate_plugins' ) )
			unset( $update_actions['plugins_page'] );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

		/**
		 * Filters the list of action links available following bulk plugin updates.
		 *
		 * @since 3.0.0
		 *
<<<<<<< HEAD
		 * @param string[] $update_actions Array of plugin action links.
		 * @param array    $plugin_info    Array of information for the last-updated plugin.
		 */
		$update_actions = apply_filters( 'update_bulk_plugins_complete_actions', $update_actions, $this->plugin_info );

		if ( ! empty( $update_actions ) ) {
			$this->feedback( implode( ' | ', (array) $update_actions ) );
		}
=======
		 * @param array $update_actions Array of plugin action links.
		 * @param array $plugin_info    Array of information for the last-updated plugin.
		 */
		$update_actions = apply_filters( 'update_bulk_plugins_complete_actions', $update_actions, $this->plugin_info );

		if ( ! empty($update_actions) )
			$this->feedback(implode(' | ', (array)$update_actions));
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}
}
