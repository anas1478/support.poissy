<?php
/**
 * List Table API: WP_Post_Comments_List_Table class
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */

/**
 * Core class used to implement displaying post comments in a list table.
 *
 * @since 3.1.0
 * @access private
 *
 * @see WP_Comments_List_Table
 */
class WP_Post_Comments_List_Table extends WP_Comments_List_Table {

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @return array
	 */
	protected function get_column_info() {
		return array(
			array(
<<<<<<< HEAD
				'author'  => __( 'Author' ),
				'comment' => _x( 'Comment', 'column name' ),
=======
				'author'   => __( 'Author' ),
				'comment'  => _x( 'Comment', 'column name' ),
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
			),
			array(),
			array(),
			'comment',
		);
	}

	/**
<<<<<<< HEAD
	 * @return array
	 */
	protected function get_table_classes() {
		$classes   = parent::get_table_classes();
=======
	 *
	 * @return array
	 */
	protected function get_table_classes() {
		$classes = parent::get_table_classes();
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
		$classes[] = 'wp-list-table';
		$classes[] = 'comments-box';
		return $classes;
	}

	/**
<<<<<<< HEAD
=======
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param bool $output_empty
	 */
	public function display( $output_empty = false ) {
		$singular = $this->_args['singular'];

<<<<<<< HEAD
		wp_nonce_field( 'fetch-list-' . get_class( $this ), '_ajax_fetch_list_nonce' );
		?>
<table class="<?php echo implode( ' ', $this->get_table_classes() ); ?>" style="display:none;">
	<tbody id="the-comment-list"
		<?php
		if ( $singular ) {
			echo " data-wp-lists='list:$singular'";
		}
		?>
		>
		<?php
		if ( ! $output_empty ) {
			$this->display_rows_or_placeholder();
		}
		?>
	</tbody>
</table>
		<?php
	}

	/**
=======
		wp_nonce_field( "fetch-list-" . get_class( $this ), '_ajax_fetch_list_nonce' );
?>
<table class="<?php echo implode( ' ', $this->get_table_classes() ); ?>" style="display:none;">
	<tbody id="the-comment-list"<?php
		if ( $singular ) {
			echo " data-wp-lists='list:$singular'";
		} ?>>
		<?php if ( ! $output_empty ) {
			$this->display_rows_or_placeholder();
		} ?>
	</tbody>
</table>
<?php
	}

	/**
	 *
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	 * @param bool $comment_status
	 * @return int
	 */
	public function get_per_page( $comment_status = false ) {
		return 10;
	}
}
