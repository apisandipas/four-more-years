<?php get_header(); ?>
    <img src="http://placekitten.com/1400/400" alt="" width="100%" height="auto" style="display: block">
    <div class="container">
        <div class="row">
            <div class="post-previews">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <?php get_template_part( 'partials/post', 'preview' ); ?>

                <?php endwhile; ?>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="prev-next-links">
                            <div class="pull-left"><?php previous_posts_link('<div class="previous-post"></div>'); ?></div>  
                            <div class="pull-right"><?php next_posts_link('<div class="next-post"></div>'); ?></div>
                        </div> 
                    </div>
                </div>
            <?php endif; wp_reset_postdata();?> 
            </div><!-- .post-previews -->
        </div><!-- .row -->
       
    </div><!-- .container -->
<?php get_footer(); ?>
