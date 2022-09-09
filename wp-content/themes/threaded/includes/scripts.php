<?php
/**
 * ------------------------------------------------------------------------
 * Theme's JavaScript Assets
 * ------------------------------------------------------------------------
 */

if ( ! function_exists( 'threaded_register_scripts' ) ) {
	/**
	 * Registers theme's JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function threaded_register_scripts() {
		wp_enqueue_script( 'theme-chunks', get_template_directory_uri() . '/dist/runtime.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'theme-vendor', get_template_directory_uri() . '/dist/vendor.js', array(), _S_VERSION, true );  
		wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/dist/global.js', array(), _S_VERSION, true );       
	}
}
add_action( 'wp_enqueue_scripts', 'threaded_register_scripts', 10, 2);
