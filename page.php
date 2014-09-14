<?php 
/*
|--------------------------------------------------------------------------
| page.php
|--------------------------------------------------------------------------
|
| 
| 
| 
|
*/
 ?>

 <?php get_header() ?>

	 <?php while( have_posts() ) : the_post(); ?>
	 	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?> >
           <h1><?php the_title(); ?></h1>
           <?php the_content(); ?>
           
           <?php wp_link_pages(); ?>
	 	</article>
	 	   <?php comments_template(); ?> 
	 <?php endwhile; ?>


 <?php get_footer(); ?>