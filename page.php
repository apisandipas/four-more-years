<?php get_header(); ?>
<img src="http://placekitten.com/1400/400" alt="" width="100%" height="auto" style="display: block">
<div class="container">
    <div class="row">
        
        <div class="page-overlap">
             
            <?php  while ( have_posts() ) : the_post(); ?>
                <h2 class="post-title"><?php the_title(); ?></h2>  
                <?php the_content(); ?>
                <?php  //get_template_part( 'content', 'page' ); ?>
            <?php  endwhile; // end of the loop. ?>
        
        </div>
   </div><!-- .row -->
</div><!-- .container -->

    
    
<?php get_footer(); ?>
