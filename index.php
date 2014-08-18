<?php get_header(); ?>
    <img src="http://placekitten.com/1400/400" alt="" width="100%" height="auto" style="display: block">
    <div class="container">
        <div class="row">
            <div class="post-previews">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                    <?php get_template_part( 'partials/post', 'preview' ); ?>

                <?php endwhile; endif; wp_reset_postdata();?> 
            </div><!-- .post-previews -->
        </div><!-- .row -->
    </div><!-- .container -->
<?php get_footer(); ?>
