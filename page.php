<?php get_header(); ?>
<div class="container">
    <div class="row">
        
        <div class="page">
             
            <?php  while ( have_posts() ) : the_post(); ?>
        
            <?php  endwhile; // end of the loop. ?>
        
        </div>
   </div><!-- .row -->
</div><!-- .container -->

    
    
<?php get_footer(); ?>
