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


 ?>


 