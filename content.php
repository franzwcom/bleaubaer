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
     
  <div class="row">
      <div class="col-md-12">
          <h1> <a class="letitle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php 
             // check if the post has a Post Thumbnail assigned to it.
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-responsive alignleft'));
              } 
           ?>
          <p><?php the_content(); ?></p>
          <hr>
           Author: <p> <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a> </p> <br>
          <p> Categories: <?php the_category(', '); ?></p> <br>
           <p><?php the_tags(); ?></p> <br>
           <p>Other posts by <?php the_author_posts_link(); ?></p> <br>
           <hr>
      </div>

  </div>
 

 </article>