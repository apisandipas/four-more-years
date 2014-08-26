<?php get_header(); ?>
<img src="http://placekitten.com/1400/400" alt="" width="100%" height="auto" style="display: block">
<div class="container">
    <div class="row">
        
        <div class="page-overlap page-wrap">
             
            <?php  if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <h2 class="post-title"><?php the_title(); ?></h2>  
                <?php the_content(); ?>
           

                <div class="social-share">
                    <a href="<?php echo sa_facebook_share(); ?>" role="button" class="facebook-share btn btn-default" data-window-title="Share on Facebook">
                        <span class="facebook-sm"></span> Share
                    </a>
                    <a href="<?php echo sa_twitter_share(); ?>" role="button" class="twitter-share btn btn-default" data-window-title="Share on Twitter">
                        <span class="twitter-sm"></span> Tweet
                    </a>
                </div>

            <?php  endwhile; // end of the loop. ?>

            <div class="prev-next-links">
                <?php previous_post_link('%link', '<div class="previous-post"></div>'); ?> 
                <?php next_post_link('%link', '<div class="next-post"></div>'); ?> 
            </div>
            <?php endif; ?>

        </div><!-- page-overlap-->
   </div><!-- .row -->
</div><!-- .container -->

    
    
<?php get_footer(); ?>
