<?php 


/*
|--------------------------------------------------------------------------
| index file: main page
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/
 ?>
   <?php get_header(); // the header ?>

   <?php //get_template_part( 'nav' );   ?>

 <div class="main-content col-md-8" role="main">
 	

 

		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <?php  get_template_part('content'); ?>
              

		 <?php endwhile; else:?>

		    <?php _e('&lsquo; No posts were found. sorry !!' ); ?>

		 <?php endif; ?>

 <?php comments_template(); ?> 

 </div> <!-- end "main-content col-md-8" role="main" -->


 <?php get_footer(); // the footer ?>