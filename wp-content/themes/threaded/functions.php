<?php
/**
 *	@package threaded-theme
 *  @since 1.0.0
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

// general
require_once 'includes/define.php';
require_once 'includes/styles.php';
require_once 'includes/scripts.php';
require_once 'includes/navs.php';
require_once 'includes/supports.php';
require_once 'includes/thumbnails.php';

// // CPT
// require_once 'includes/post-types.php';
// require_once 'includes/custom-taxonomy.php';

// // additional
// require_once 'includes/acf.php';
// require_once 'includes/actions.php';
// require_once 'includes/filters.php';
// require_once 'includes/clean.php';  
// require_once 'includes/security.php';
require_once 'includes/custom-functions.php';

// // optional
// require_once 'includes/ajax.php';
// require_once 'includes/shortcodes.php';
// require_once 'includes/widgets.php';
