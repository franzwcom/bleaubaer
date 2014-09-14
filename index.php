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

   <?php get_template_part( 'nav' );   ?>


 

		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <?php  get_template_part('content', get_post_format() ); ?>
              

		 <?php endwhile;?>

		  <?php else: ?>

		    <?php  get_template_part('content', 'none' ); ?>

		 <?php endif; ?>

 




 <?php get_footer(); // the footer ?>