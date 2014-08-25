<?php get_header(); ?>

    <div class="container">
        <div class="product row">
                
                <?php  while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-4 col-md-offset-2">
                        <?php the_post_thumbnail('product-detail'); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="product-title"><?php the_title(); ?></div>

                        <?php if ( get_field('product_price') ): ?>
                            <div class="product-price">$<?php echo esc_html( the_field('product_price') ); ?></div>  
                        <?php endif; ?>

                        <div class="product-desc"><?php the_content(); ?></div>   

                        <a href="#" class="product-button btn-block">Buy Now</a>
                    </div>

                <?php  endwhile; // end of the loop. ?>

                    <div class="prev-next-links">
                        <?php previous_post_link('%link', '<div class="previous-post">Back</div>'); ?> 
                        <?php next_post_link('%link', '<div class="next-post">Next</div>'); ?> 
                    </div> 
                     
                
       </div><!-- .row -->
    </div><!-- .container -->

    
    
<?php get_footer(); ?>
