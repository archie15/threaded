<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 */

if ( ! function_exists( 'threaded_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function threaded_register_navigations() {
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Top menu', 'threaded' ),
				'footer_1' => esc_html__( 'Footer Menu 1', 'threaded' ),
				'footer_2' => esc_html__( 'Footer Menu 2', 'threaded' )
			)
		);
	}
}
add_action( 'after_setup_theme', 'threaded_register_navigations' );
