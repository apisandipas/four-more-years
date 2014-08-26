<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="beer-grid page-wrap">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="beer" id="beer-<?php the_ID(); ?>" style="">
                    <a href="<?php the_permalink(); ?>">
                        <img src="http://placekitten.com/308/308">
                        <div class="beer-meta" style="text-align:center;">
                            <div class="beer-name"><?php the_title(); ?></div>  
                            <?php //if ( get_field('beer_type') ): ?>
                                <div class="beer-type"><?php echo esc_html( the_field('beer_type') ); ?>&nbsp;</div>  
                            <?php //endif; ?>
                        </div>
                    </a>
                </div>

            <?php endwhile; endif; ?>
        </div>
   </div><!-- .row -->
</div><!-- .container -->    
<?php get_footer(); ?>
