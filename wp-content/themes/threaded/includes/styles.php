<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS Assets
 * ------------------------------------------------------------------------
 */

if ( ! function_exists( 'threaded_register_styles' ) ) {
	/**
	 * Registers theme's CSS styles.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function threaded_register_styles() {
		wp_enqueue_style( 'threaded-style', get_stylesheet_uri(), array(), _S_VERSION );
		//wp_enqueue_style( 'theme-bootstrap', get_template_directory_uri() . '/dist/vendor.css', array(), _S_VERSION );
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/dist/global.css', array(), _S_VERSION );

		if (is_page() || is_single() || is_category() || is_home()) {
			wp_enqueue_style( 'theme-page', get_template_directory_uri() . '/dist/default_page.css', array(), _S_VERSION );
		}
	}
}
add_action( 'wp_enqueue_scripts', 'threaded_register_styles' );
