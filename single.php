<?php 

 /*
 |--------------------------------------------------------------------------
 | single.php  page 
 |--------------------------------------------------------------------------
 |
 | 
 | 
 | 
 |
 */
  ?>

   <?php get_header() ?>
   
      <?php get_template_part( 'nav' );   ?>

      <?php get_template_part( 'header_image' ); ?>

		 <?php while( have_posts() ) : the_post(); ?>

		  	 <?php 
			  	  /*
			 	 |--------------------------------------------------------------------------
			 	 | getting the post format for the template part
			 	 |--------------------------------------------------------------------------
			 	 */
		  	      get_template_part('content', get_post_format() ); 
		  	 ?>

		 	 <?php comments_template(); ?>
		 <?php endwhile; ?>

 <?php get_template_part( 'footer_page' ); ?>

 <?php get_footer(); ?>