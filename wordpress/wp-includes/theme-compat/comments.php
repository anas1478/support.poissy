<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
<<<<<<< HEAD
=======
 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
 */
_deprecated_file(
	/* translators: %s: template name */
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: template name */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
);

// Do not delete these lines
<<<<<<< HEAD
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die( 'Please do not load this page directly. Thanks!' );
}

if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e( 'This post is password protected. Enter the password to view comments.' ); ?></p>
	<?php
	return;
}
=======
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.'); ?></p>
	<?php
		return;
	}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments">
		<?php
<<<<<<< HEAD
		if ( 1 == get_comments_number() ) {
			/* translators: %s: post title */
			printf( __( 'One response to %s' ), '&#8220;' . get_the_title() . '&#8221;' );
		} else {
			/* translators: 1: number of comments, 2: post title */
			printf(
				_n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
				number_format_i18n( get_comments_number() ),
				'&#8220;' . get_the_title() . '&#8221;'
			);
		}
=======
			if ( 1 == get_comments_number() ) {
				/* translators: %s: post title */
				printf( __( 'One response to %s' ),  '&#8220;' . get_the_title() . '&#8221;' );
			} else {
				/* translators: 1: number of comments, 2: post title */
				printf( _n( '%1$s response to %2$s', '%1$s responses to %2$s', get_comments_number() ),
					number_format_i18n( get_comments_number() ),  '&#8220;' . get_the_title() . '&#8221;' );
			}
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		?>
	</h3>

	<div class="navigation">
<<<<<<< HEAD
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link(); ?></div>
		<div class="alignright"><?php next_comments_link(); ?></div>
	</div>
<?php else : // this is displayed if there are no comments so far ?>
=======
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ol class="commentlist">
	<?php wp_list_comments();?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

<<<<<<< HEAD
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
=======
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.'); ?></p>
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	<?php endif; ?>
<?php endif; ?>

<?php comment_form(); ?>
