<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 *
 *	@package threaded
 *  @since 1.0.0
 *	@link https://developer.wordpress.org/reference/functions/add_image_size/
 *
 */

if ( ! function_exists( 'threaded_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function threaded_register_thumbnails() {
        add_image_size( '1920-auto', 1920);
        add_image_size( '1920-auto-2x', 1920*2);
        add_image_size( '160-auto', 160);
        add_image_size('160-auto-2x', 160*2);
	}
}
add_action( 'after_setup_theme', 'threaded_register_thumbnails' );
