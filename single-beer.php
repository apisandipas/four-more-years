<?php get_header(); ?>
<div class="beer-detail-bg" style="background-image: url(<?php the_field('background_image'); ?>);">
    <div class="container" height="100%">
        <div class="row" height="100%">
            <div class="col-md-5 col-md-offset-1" height="100%">
                <?php  while ( have_posts() ) : the_post(); ?>
                    

                    <div class="beer-meta-wrap">
                        <div class="beer-meta">
                            
                            <h2 class="post-title"><?php the_title(); ?></h2>  

                            <div class="beer-desc"><?php the_content(); ?></div> 
                            
                            <?php if ( get_field('hops') ): ?>
                                <div class="beer-hops">
                                    <span class="beer-label">Hops:</span>&nbsp;&nbsp;<?php the_field('hops'); ?>
                                </div>
                            <?php endif; ?>
                            
                            <?php if ( get_field('malts') ): ?>
                                <div class="beer-malts">
                                    <span class="beer-label">Malts:</span>&nbsp;&nbsp;<?php the_field('malts'); ?>
                                </div>
                            <?php endif; ?>
                        
                            <table class="table table-bordered">
                                <tbody>
                                    <?php if ( get_field('abv') && get_field('ibus') ): ?>
                                    <tr>
                                        <td>
                                            <span class="abv">ABV </span>
                                            <?php the_field('abv'); ?>%
                                        </td>
                                        <td>
                                            <span class="abv">IBUs</span> 
                                            <?php the_field('ibus'); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <tr>
                                        <td colspan="2" class="find">
                                            <a  style="display: block;" target="_blank" href="http://www.beermenus.com/search?q=Aquanaut <?php the_title(); ?>">
                                                <span class="marker"></span> 
                                                Find <?php the_title(); ?>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div><!-- beer-meta -->
                    </div><!-- beer-meta-wrap -->


                   <!--  <div class="prev-next-links">
                        <?php //previous_post_link('%link', '<div class="previous-post">Back</div>'); ?> 
                        <?php //next_post_link('%link', '<div class="next-post">Next</div>'); ?> 
                    </div> -->
                     
                
                <?php  endwhile; // end of the loop. ?>
           </div><!-- cols -->
       </div><!-- .row -->
    </div><!-- .container -->
</div><!-- beer-detail-bg -->
    
    
<?php get_footer(); ?>
