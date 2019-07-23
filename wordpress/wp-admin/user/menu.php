<?php
/**
 * Build User Administration Menu.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.1.0
 */

<<<<<<< HEAD
$menu[2] = array( __( 'Dashboard' ), 'exist', 'index.php', '', 'menu-top menu-top-first menu-icon-dashboard', 'menu-dashboard', 'dashicons-dashboard' );

$menu[4] = array( '', 'exist', 'separator1', '', 'wp-menu-separator' );

$menu[70] = array( __( 'Profile' ), 'exist', 'profile.php', '', 'menu-top menu-icon-users', 'menu-users', 'dashicons-admin-users' );
=======
$menu[2] = array(__('Dashboard'), 'exist', 'index.php', '', 'menu-top menu-top-first menu-icon-dashboard', 'menu-dashboard', 'dashicons-dashboard');

$menu[4] = array( '', 'exist', 'separator1', '', 'wp-menu-separator' );

$menu[70] = array( __('Profile'), 'exist', 'profile.php', '', 'menu-top menu-icon-users', 'menu-users', 'dashicons-admin-users' );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

$menu[99] = array( '', 'exist', 'separator-last', '', 'wp-menu-separator' );

$_wp_real_parent_file['users.php'] = 'profile.php';
<<<<<<< HEAD
$compat                            = array();
$submenu                           = array();

require_once( ABSPATH . 'wp-admin/includes/menu.php' );
=======
$compat = array();
$submenu = array();

require_once(ABSPATH . 'wp-admin/includes/menu.php');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
