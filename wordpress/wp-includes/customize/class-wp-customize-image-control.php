<?php
/**
 * Customize API: WP_Customize_Image_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */

/**
 * Customize Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Upload_Control
 */
class WP_Customize_Image_Control extends WP_Customize_Upload_Control {
<<<<<<< HEAD
	public $type      = 'image';
=======
	public $type = 'image';
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	public $mime_type = 'image';

	/**
	 * @since 3.4.2
	 * @deprecated 4.1.0
	 */
	public function prepare_control() {}

	/**
	 * @since 3.4.0
	 * @deprecated 4.1.0
	 *
	 * @param string $id
	 * @param string $label
	 * @param mixed $callback
	 */
	public function add_tab( $id, $label, $callback ) {
		_deprecated_function( __METHOD__, '4.1.0' );
<<<<<<< HEAD
	}
=======
    }
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	/**
	 * @since 3.4.0
	 * @deprecated 4.1.0
	 *
	 * @param string $id
	 */
	public function remove_tab( $id ) {
		_deprecated_function( __METHOD__, '4.1.0' );
<<<<<<< HEAD
	}
=======
    }
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274

	/**
	 * @since 3.4.0
	 * @deprecated 4.1.0
	 *
	 * @param string $url
	 * @param string $thumbnail_url
	 */
	public function print_tab_image( $url, $thumbnail_url = null ) {
		_deprecated_function( __METHOD__, '4.1.0' );
<<<<<<< HEAD
	}
=======
    }
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
}
