<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="product-grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="product" id="product-<?php the_ID(); ?>" style="">
                    <a href="<?php the_permalink(); ?>">
                        <!-- <img src="http://placekitten.com/308/308"> -->
                        <?php the_post_thumbnail(); ?>
                        <div class="product-meta" style="text-align:center;">
                            <div class="product-name"><?php the_title(); ?></div>  
                            <?php if ( get_field('product_price') ): ?>
                                <div class="product-price">$<?php echo esc_html( the_field('product_price') ); ?></div>  
                            <?php endif; ?>
                        </div>
                    </a>
                </div>

            <?php endwhile; endif; ?> 
        </div>
   </div><!-- .row -->
</div><!-- .container -->    
<?php get_footer(); ?>
