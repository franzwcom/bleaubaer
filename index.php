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
   <?php get_header(); ?>

 <div class="main-content col-md-8" role="main">
 	

 

		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    <?php  get_template_part('content', get_post_format() ); ?>


		 <?php endwhile; ?>

		    <?php get_template_part('content', 'none' ); ?>

		 <?php endif; ?>


 </div> <!-- end "main-content col-md-8" role="main" -->


 <?php get_footer(); ?>