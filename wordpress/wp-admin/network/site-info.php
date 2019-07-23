<?php
/**
 * Edit Site Info Administration Screen
 *
 * @package WordPress
 * @subpackage Multisite
 * @since 3.1.0
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

if ( ! current_user_can( 'manage_sites' ) ) {
	wp_die( __( 'Sorry, you are not allowed to edit this site.' ) );
}

get_current_screen()->add_help_tab( get_site_screen_help_tab_args() );
get_current_screen()->set_help_sidebar( get_site_screen_help_sidebar_content() );

$id = isset( $_REQUEST['id'] ) ? intval( $_REQUEST['id'] ) : 0;

if ( ! $id ) {
<<<<<<< HEAD
	wp_die( __( 'Invalid site ID.' ) );
=======
	wp_die( __('Invalid site ID.') );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}

$details = get_site( $id );
if ( ! $details ) {
	wp_die( __( 'The requested site does not exist.' ) );
}

if ( ! can_edit_network( $details->site_id ) ) {
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 );
}

$parsed_scheme = parse_url( $details->siteurl, PHP_URL_SCHEME );
<<<<<<< HEAD
$is_main_site  = is_main_site( $id );
=======
$is_main_site = is_main_site( $id );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

if ( isset( $_REQUEST['action'] ) && 'update-site' == $_REQUEST['action'] ) {
	check_admin_referer( 'edit-site' );

	switch_to_blog( $id );

	// Rewrite rules can't be flushed during switch to blog.
	delete_option( 'rewrite_rules' );

<<<<<<< HEAD
	$blog_data           = wp_unslash( $_POST['blog'] );
=======
	$blog_data = wp_unslash( $_POST['blog'] );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	$blog_data['scheme'] = $parsed_scheme;

	if ( $is_main_site ) {
		// On the network's main site, don't allow the domain or path to change.
		$blog_data['domain'] = $details->domain;
<<<<<<< HEAD
		$blog_data['path']   = $details->path;
=======
		$blog_data['path'] = $details->path;
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	} else {
		// For any other site, the scheme, domain, and path can all be changed. We first
		// need to ensure a scheme has been provided, otherwise fallback to the existing.
		$new_url_scheme = parse_url( $blog_data['url'], PHP_URL_SCHEME );

		if ( ! $new_url_scheme ) {
			$blog_data['url'] = esc_url( $parsed_scheme . '://' . $blog_data['url'] );
		}
		$update_parsed_url = parse_url( $blog_data['url'] );

		// If a path is not provided, use the default of `/`.
		if ( ! isset( $update_parsed_url['path'] ) ) {
			$update_parsed_url['path'] = '/';
		}

		$blog_data['scheme'] = $update_parsed_url['scheme'];
		$blog_data['domain'] = $update_parsed_url['host'];
<<<<<<< HEAD
		$blog_data['path']   = $update_parsed_url['path'];
	}

	$existing_details     = get_site( $id );
=======
		$blog_data['path'] = $update_parsed_url['path'];
	}

	$existing_details = get_site( $id );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	$blog_data_checkboxes = array( 'public', 'archived', 'spam', 'mature', 'deleted' );
	foreach ( $blog_data_checkboxes as $c ) {
		if ( ! in_array( $existing_details->$c, array( 0, 1 ) ) ) {
			$blog_data[ $c ] = $existing_details->$c;
		} else {
			$blog_data[ $c ] = isset( $_POST['blog'][ $c ] ) ? 1 : 0;
		}
	}

	update_blog_details( $id, $blog_data );

	// Maybe update home and siteurl options.
	$new_details = get_site( $id );

<<<<<<< HEAD
	$old_home_url    = trailingslashit( esc_url( get_option( 'home' ) ) );
=======
	$old_home_url = trailingslashit( esc_url( get_option( 'home' ) ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	$old_home_parsed = parse_url( $old_home_url );

	if ( $old_home_parsed['host'] === $existing_details->domain && $old_home_parsed['path'] === $existing_details->path ) {
		$new_home_url = untrailingslashit( esc_url_raw( $blog_data['scheme'] . '://' . $new_details->domain . $new_details->path ) );
		update_option( 'home', $new_home_url );
	}

<<<<<<< HEAD
	$old_site_url    = trailingslashit( esc_url( get_option( 'siteurl' ) ) );
=======
	$old_site_url = trailingslashit( esc_url( get_option( 'siteurl' ) ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	$old_site_parsed = parse_url( $old_site_url );

	if ( $old_site_parsed['host'] === $existing_details->domain && $old_site_parsed['path'] === $existing_details->path ) {
		$new_site_url = untrailingslashit( esc_url_raw( $blog_data['scheme'] . '://' . $new_details->domain . $new_details->path ) );
		update_option( 'siteurl', $new_site_url );
	}

	restore_current_blog();
<<<<<<< HEAD
	wp_redirect(
		add_query_arg(
			array(
				'update' => 'updated',
				'id'     => $id,
			),
			'site-info.php'
		)
	);
=======
	wp_redirect( add_query_arg( array( 'update' => 'updated', 'id' => $id ), 'site-info.php' ) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	exit;
}

if ( isset( $_GET['update'] ) ) {
	$messages = array();
	if ( 'updated' == $_GET['update'] ) {
		$messages[] = __( 'Site info updated.' );
	}
}

/* translators: %s: site name */
$title = sprintf( __( 'Edit Site: %s' ), esc_html( $details->blogname ) );

<<<<<<< HEAD
$parent_file  = 'sites.php';
=======
$parent_file = 'sites.php';
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
$submenu_file = 'sites.php';

require( ABSPATH . 'wp-admin/admin-header.php' );

?>

<div class="wrap">
<h1 id="edit-site"><?php echo $title; ?></h1>
<p class="edit-site-actions"><a href="<?php echo esc_url( get_home_url( $id, '/' ) ); ?>"><?php _e( 'Visit' ); ?></a> | <a href="<?php echo esc_url( get_admin_url( $id ) ); ?>"><?php _e( 'Dashboard' ); ?></a></p>
<?php

<<<<<<< HEAD
network_edit_site_nav(
	array(
		'blog_id'  => $id,
		'selected' => 'site-info',
	)
);
=======
network_edit_site_nav( array(
	'blog_id'  => $id,
	'selected' => 'site-info'
) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

if ( ! empty( $messages ) ) {
	foreach ( $messages as $msg ) {
		echo '<div id="message" class="updated notice is-dismissible"><p>' . $msg . '</p></div>';
	}
}
?>
<form method="post" action="site-info.php?action=update-site">
	<?php wp_nonce_field( 'edit-site' ); ?>
<<<<<<< HEAD
	<input type="hidden" name="id" value="<?php echo esc_attr( $id ); ?>" />
	<table class="form-table">
		<?php
		// The main site of the network should not be updated on this page.
		if ( $is_main_site ) :
			?>
=======
	<input type="hidden" name="id" value="<?php echo esc_attr( $id ) ?>" />
	<table class="form-table">
		<?php
		// The main site of the network should not be updated on this page.
		if ( $is_main_site ) : ?>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		<tr class="form-field">
			<th scope="row"><?php _e( 'Site Address (URL)' ); ?></th>
			<td><?php echo esc_url( $parsed_scheme . '://' . $details->domain . $details->path ); ?></td>
		</tr>
<<<<<<< HEAD
			<?php
			// For any other site, the scheme, domain, and path can all be changed.
		else :
			?>
=======
		<?php
		// For any other site, the scheme, domain, and path can all be changed.
		else : ?>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		<tr class="form-field form-required">
			<th scope="row"><?php _e( 'Site Address (URL)' ); ?></th>
			<td><input name="blog[url]" type="text" id="url" value="<?php echo $parsed_scheme . '://' . esc_attr( $details->domain ) . esc_attr( $details->path ); ?>" /></td>
		</tr>
		<?php endif; ?>

		<tr class="form-field">
<<<<<<< HEAD
			<th scope="row"><label for="blog_registered"><?php _ex( 'Registered', 'site' ); ?></label></th>
			<td><input name="blog[registered]" type="text" id="blog_registered" value="<?php echo esc_attr( $details->registered ); ?>" /></td>
		</tr>
		<tr class="form-field">
			<th scope="row"><label for="blog_last_updated"><?php _e( 'Last Updated' ); ?></label></th>
			<td><input name="blog[last_updated]" type="text" id="blog_last_updated" value="<?php echo esc_attr( $details->last_updated ); ?>" /></td>
=======
			<th scope="row"><label for="blog_registered"><?php _ex( 'Registered', 'site' ) ?></label></th>
			<td><input name="blog[registered]" type="text" id="blog_registered" value="<?php echo esc_attr( $details->registered ) ?>" /></td>
		</tr>
		<tr class="form-field">
			<th scope="row"><label for="blog_last_updated"><?php _e( 'Last Updated' ); ?></label></th>
			<td><input name="blog[last_updated]" type="text" id="blog_last_updated" value="<?php echo esc_attr( $details->last_updated ) ?>" /></td>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		</tr>
		<?php
		$attribute_fields = array( 'public' => __( 'Public' ) );
		if ( ! $is_main_site ) {
			$attribute_fields['archived'] = __( 'Archived' );
			$attribute_fields['spam']     = _x( 'Spam', 'site' );
			$attribute_fields['deleted']  = __( 'Deleted' );
		}
		$attribute_fields['mature'] = __( 'Mature' );
		?>
		<tr>
			<th scope="row"><?php _e( 'Attributes' ); ?></th>
			<td>
			<fieldset>
<<<<<<< HEAD
			<legend class="screen-reader-text"><?php _e( 'Set site attributes' ); ?></legend>
			<?php foreach ( $attribute_fields as $field_key => $field_label ) : ?>
				<label><input type="checkbox" name="blog[<?php echo $field_key; ?>]" value="1" <?php checked( (bool) $details->$field_key, true ); ?> <?php disabled( ! in_array( $details->$field_key, array( 0, 1 ) ) ); ?> />
=======
			<legend class="screen-reader-text"><?php _e( 'Set site attributes' ) ?></legend>
			<?php foreach ( $attribute_fields as $field_key => $field_label ) : ?>
				<label><input type="checkbox" name="blog[<?php echo $field_key; ?>]" value="1" <?php checked( (bool) $details->$field_key, true ); disabled( ! in_array( $details->$field_key, array( 0, 1 ) ) ); ?> />
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
				<?php echo $field_label; ?></label><br/>
			<?php endforeach; ?>
			<fieldset>
			</td>
		</tr>
	</table>
	<?php submit_button(); ?>
</form>

</div>
<?php
require( ABSPATH . 'wp-admin/admin-footer.php' );
