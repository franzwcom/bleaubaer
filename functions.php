<?php 


/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
| some functions and stuff 
| 
| 
| 
|
*/



/* ==========================================================================
   separator :Removing meta generator
   ========================================================================== */

remove_action('wp_head', 'wp_generator');


/* ==========================================================================
   separator : End Removing meta generator
   ========================================================================== */


add_theme_support( 'automatic-feed-links');
//add_theme_support( 'post-thumbnails' );
///

if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
}


/*
|--------------------------------------------------------------------------
| custom background
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

$defaults = array(
	'default-color'          => '',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

/*
|--------------------------------------------------------------------------
| End custom background
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Register Custom Navigation Walker
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/
register_nav_menus( array(
    'primary'        => __( 'Primary Menu', 'BleauBaer' ),
    'secondary-menu' => __( 'Secondary Menu', 'BleauBaer' ),
	'tertiary-menu'  => __( 'Tertiary Menu', 'BleauBaer' )
) );


require_once('wp_bootstrap_navwalker.php');

/*
/ Sources: 
/ * wp-bootstrap-navwalker 
/   A custom WordPress nav walker class to fully implement the Twitter Bootstrap 3.0+ 
/   navigation style in a custom theme using the WordPress built in menu manager.  http://goo.gl/gHrogD
/ 
/ * Goodbye, headaches. Hello, menus! by Justin Tadlock http://goo.gl/VYdUtD
/
|--------------------------------------------------------------------------
| End Register Custom Navigation Walker
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Custom headers
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/
	$defaults = array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'random-default'         => false,
		'width'                  => 1143,
		'height'                 => 352,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);

	add_theme_support( 'custom-header', $defaults );



/*
|--------------------------------------------------------------------------
| End Custom headers
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| post formats
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/

 add_theme_support( 'post-formats',

 	    array(
 	    	'gallery',
 	    	'link',
 	    	'image',
 	    	'quote',
 	    	'video',
 	    	'audio'
 	    	)


  );



/*
|--------------------------------------------------------------------------
| End post formats
|--------------------------------------------------------------------------
*/




 ?>
