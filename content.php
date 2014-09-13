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


 <article id="post-<?php the_ID(); ?>" <?php post_class('col-md-8'); ?>>
     
   



        <div class="panel panel-default">
              <div class="panel-heading">
                <a class="letitle panel-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
              
              <div class="panel-body">
                  <?php 
                       // check if the post has a Post Thumbnail assigned to it.
                        if ( has_post_thumbnail() ) {
                          the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-responsive alignleft'));
                        } 
                  ?>
                  <p><?php the_content(); ?></p>
                     <hr>
                     Author: <p> <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a> </p>
                     <p> Categories:</p><h3><span class="label label-default le-label"><?php the_category(', '); ?></span></h3> 
                     <h3><span class="label label-primary le-label"><?php the_tags(); ?></span></h3><br>
                     <p>Other posts by <?php the_author_posts_link(); ?></p>
                     <hr>
                     <?php comments_template(); ?> 
                     
              </div>
          </div>


 

 </article>



