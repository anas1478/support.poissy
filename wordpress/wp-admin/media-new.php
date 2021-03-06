<?php
/**
 * Manage media uploaded file.
 *
 * There are many filters in here for media. Plugins can extend functionality
 * by hooking into the filters.
 *
 * @package WordPress
 * @subpackage Administration
 */

/** Load WordPress Administration Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

<<<<<<< HEAD
if ( ! current_user_can( 'upload_files' ) ) {
	wp_die( __( 'Sorry, you are not allowed to upload files.' ) );
}

wp_enqueue_script( 'plupload-handlers' );
=======
if (!current_user_can('upload_files'))
	wp_die(__('Sorry, you are not allowed to upload files.'));

wp_enqueue_script('plupload-handlers');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

$post_id = 0;
if ( isset( $_REQUEST['post_id'] ) ) {
	$post_id = absint( $_REQUEST['post_id'] );
<<<<<<< HEAD
	if ( ! get_post( $post_id ) || ! current_user_can( 'edit_post', $post_id ) ) {
		$post_id = 0;
	}
}

if ( $_POST ) {
	if ( isset( $_POST['html-upload'] ) && ! empty( $_FILES ) ) {
		check_admin_referer( 'media-form' );
=======
	if ( ! get_post( $post_id ) || ! current_user_can( 'edit_post', $post_id ) )
		$post_id = 0;
}

if ( $_POST ) {
	if ( isset($_POST['html-upload']) && !empty($_FILES) ) {
		check_admin_referer('media-form');
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		// Upload File button was clicked
		$upload_id = media_handle_upload( 'async-upload', $post_id );
		if ( is_wp_error( $upload_id ) ) {
			wp_die( $upload_id );
		}
	}
	wp_redirect( admin_url( 'upload.php' ) );
	exit;
}

<<<<<<< HEAD
$title       = __( 'Upload New Media' );
$parent_file = 'upload.php';

get_current_screen()->add_help_tab(
	array(
		'id'      => 'overview',
		'title'   => __( 'Overview' ),
		'content' =>
				 '<p>' . __( 'You can upload media files here without creating a post first. This allows you to upload files to use with posts and pages later and/or to get a web link for a particular file that you can share. There are three options for uploading files:' ) . '</p>' .
				 '<ul>' .
					 '<li>' . __( '<strong>Drag and drop</strong> your files into the area below. Multiple files are allowed.' ) . '</li>' .
					 '<li>' . __( 'Clicking <strong>Select Files</strong> opens a navigation window showing you files in your operating system. Selecting <strong>Open</strong> after clicking on the file you want activates a progress bar on the uploader screen.' ) . '</li>' .
					 '<li>' . __( 'Revert to the <strong>Browser Uploader</strong> by clicking the link below the drag and drop box.' ) . '</li>' .
				 '</ul>',
	)
);
get_current_screen()->set_help_sidebar(
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' .
	'<p>' . __( '<a href="https://codex.wordpress.org/Media_Add_New_Screen">Documentation on Uploading Media Files</a>' ) . '</p>' .
	'<p>' . __( '<a href="https://wordpress.org/support/">Support Forums</a>' ) . '</p>'
=======
$title = __('Upload New Media');
$parent_file = 'upload.php';

get_current_screen()->add_help_tab( array(
'id'		=> 'overview',
'title'		=> __('Overview'),
'content'	=>
	'<p>' . __('You can upload media files here without creating a post first. This allows you to upload files to use with posts and pages later and/or to get a web link for a particular file that you can share. There are three options for uploading files:') . '</p>' .
	'<ul>' .
		'<li>' . __('<strong>Drag and drop</strong> your files into the area below. Multiple files are allowed.') . '</li>' .
		'<li>' . __('Clicking <strong>Select Files</strong> opens a navigation window showing you files in your operating system. Selecting <strong>Open</strong> after clicking on the file you want activates a progress bar on the uploader screen.') . '</li>' .
		'<li>' . __('Revert to the <strong>Browser Uploader</strong> by clicking the link below the drag and drop box.') . '</li>' .
	'</ul>'
) );
get_current_screen()->set_help_sidebar(
	'<p><strong>' . __('For more information:') . '</strong></p>' .
	'<p>' . __('<a href="https://codex.wordpress.org/Media_Add_New_Screen">Documentation on Uploading Media Files</a>') . '</p>' .
	'<p>' . __('<a href="https://wordpress.org/support/">Support Forums</a>') . '</p>'
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
);

require_once( ABSPATH . 'wp-admin/admin-header.php' );

$form_class = 'media-upload-form type-form validate';

<<<<<<< HEAD
if ( get_user_setting( 'uploader' ) || isset( $_GET['browser-uploader'] ) ) {
	$form_class .= ' html-uploader';
}
=======
if ( get_user_setting('uploader') || isset( $_GET['browser-uploader'] ) )
	$form_class .= ' html-uploader';
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
?>
<div class="wrap">
	<h1><?php echo esc_html( $title ); ?></h1>

<<<<<<< HEAD
	<form enctype="multipart/form-data" method="post" action="<?php echo admin_url( 'media-new.php' ); ?>" class="<?php echo esc_attr( $form_class ); ?>" id="file-form">
=======
	<form enctype="multipart/form-data" method="post" action="<?php echo admin_url('media-new.php'); ?>" class="<?php echo esc_attr( $form_class ); ?>" id="file-form">
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	<?php media_upload_form(); ?>

	<script type="text/javascript">
	var post_id = <?php echo $post_id; ?>, shortform = 3;
	</script>
	<input type="hidden" name="post_id" id="post_id" value="<?php echo $post_id; ?>" />
<<<<<<< HEAD
	<?php wp_nonce_field( 'media-form' ); ?>
=======
	<?php wp_nonce_field('media-form'); ?>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	<div id="media-items" class="hide-if-no-js"></div>
	</form>
</div>

<?php
include( ABSPATH . 'wp-admin/admin-footer.php' );
