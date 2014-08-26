<?php get_header(); ?>
<div class="beer-detail-bg" style="background-image: url(<?php the_field('background_image', 48); ?>);">
    <div class="container page-wrap" >
        <div class="row" >
            <div class="col-md-5 col-md-offset-1 " >
                <?php  while ( have_posts() ) : the_post(); ?>
                    

                        <div class="beer-meta" id="beer-<?php the_ID(); ?> ">
                            
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
                        


                    
                
                <?php  endwhile; // end of the loop. ?>
            </div><!-- cols -->
            

                     
       </div><!-- .row -->
       
        <div class="prev-next-links">
            <?php previous_post_link('%link', '<div class="previous-post"></div>'); ?> 
            <?php next_post_link('%link', '<div class="next-post"></div>'); ?> 
        </div>
      
            
    </div><!-- .container -->
</div><!-- beer-detail-bg -->
    
    
<?php get_footer(); ?>
