<?php
/**
 * Comment Moderation Administration Screen.
 *
 * Redirects to edit-comments.php?comment_status=moderated.
 *
 * @package WordPress
 * @subpackage Administration
 */
require_once( dirname( dirname( __FILE__ ) ) . '/wp-load.php' );
<<<<<<< HEAD
wp_redirect( admin_url( 'edit-comments.php?comment_status=moderated' ) );
=======
wp_redirect( admin_url('edit-comments.php?comment_status=moderated') );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
exit;
