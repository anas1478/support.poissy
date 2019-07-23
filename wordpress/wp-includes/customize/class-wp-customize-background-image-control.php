<?php
/**
 * Customize API: WP_Customize_Background_Image_Control class
 *
 * @package WordPress
 * @subpackage Customize
 * @since 4.4.0
 */

/**
 * Customize Background Image Control class.
 *
 * @since 3.4.0
 *
 * @see WP_Customize_Image_Control
 */
class WP_Customize_Background_Image_Control extends WP_Customize_Image_Control {
	public $type = 'background';

	/**
	 * Constructor.
	 *
	 * @since 3.4.0
	 * @uses WP_Customize_Image_Control::__construct()
	 *
	 * @param WP_Customize_Manager $manager Customizer bootstrap instance.
	 */
	public function __construct( $manager ) {
<<<<<<< HEAD
		parent::__construct(
			$manager,
			'background_image',
			array(
				'label'   => __( 'Background Image' ),
				'section' => 'background_image',
			)
		);
=======
		parent::__construct( $manager, 'background_image', array(
			'label'    => __( 'Background Image' ),
			'section'  => 'background_image',
		) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}

	/**
	 * Enqueue control related scripts/styles.
	 *
	 * @since 4.1.0
	 */
	public function enqueue() {
		parent::enqueue();

		$custom_background = get_theme_support( 'custom-background' );
<<<<<<< HEAD
		wp_localize_script(
			'customize-controls',
			'_wpCustomizeBackground',
			array(
				'defaults' => ! empty( $custom_background[0] ) ? $custom_background[0] : array(),
				'nonces'   => array(
					'add' => wp_create_nonce( 'background-add' ),
				),
			)
		);
=======
		wp_localize_script( 'customize-controls', '_wpCustomizeBackground', array(
			'defaults' => ! empty( $custom_background[0] ) ? $custom_background[0] : array(),
			'nonces' => array(
				'add' => wp_create_nonce( 'background-add' ),
			),
		) );
>>>>>>> 05075d87e9e3af44152a5ca6f3621177d0ace274
	}
}
