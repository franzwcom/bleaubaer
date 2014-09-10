<?php 


/*
|--------------------------------------------------------------------------
| content.php
|--------------------------------------------------------------------------
|  default template for displaying content
| 
| 
| 
|
*/


 ?>


 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     
    <header class="entry-header"> <?php
     	 if ( has_post_thumbnail() && ! post_password_required() ) : ?>
     	 <figure class="entry-thumbnail"><?php the_post_thumbnail(); ?></figure>
     	<?php endif; 

     	if ( is_single() ) : ?>

     	  <h1><?php the_title(); ?></h1>

     	<?php else : ?>

     		<h1>  <a href=" <?php the_permalink(); ?>"  rel="bookmark">  <?php the_title(); ?> </a></h1>

         <?php endif; ?>
     
    </header>
 
 </article>