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
     <?php get_template_part( 'nav' );   ?>
     <?php get_template_part( 'header_image' ); ?>

	 <?php while( have_posts() ) : the_post(); ?>
	 	<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?> >
           <h1><?php the_title(); ?></h1>
            <?php 
                   // check if the post has a Post Thumbnail assigned to it.
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-responsive alignleft'));
                    } 
            ?>
           <?php the_content(); ?>
           
           <?php wp_link_pages(); ?>
	 	</article>
	 	   <?php comments_template(); ?> 
	 <?php endwhile; ?>

 <?php //get_template_part( 'footer_page' ); ?>
 <?php get_footer(); ?>