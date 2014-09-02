<?php get_header(); ?>
<div class="event-back" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/boilers.jpg); ">
    <div class="container">
        <div class="row">
         <?php if ( have_posts() ): ?>
            <?php $j = 0; while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 <?php if (++$j % 2 == 1): ?>col-md-offset-2 <?php endif; ?> event">

                    <h2 class="event-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>    
                    </h2>  
                    
                    <?php the_content(); ?>
                    
                    <div class="event-details">
                        <div class="inner">
                            <h5>Event Details</h5>
                            
                            <?php if ( get_field('date') ): ?>
                                <div><strong>Date</strong> 
                                    <?php echo sa_formatted_event_date() ?>
                                </div>
                            <?php endif ?>
                            
                            <?php if ( get_field( 'time' ) ): ?>
                                <div><strong>Time</strong> 
                                    <?php echo esc_html( get_field( 'time' ) ); ?>
                                </div>
                             <?php endif ?>
                            
                            <?php if ( get_field('place') ): ?>
                                <div><strong>Place</strong>
                                     <a href="<?php echo esc_html( sa_google_map_url(  get_field( 'place' ) ) ); ?>" target="_blank"><?php echo esc_html( get_field( 'place' ) ); ?></a>
                                </div>
                            <?php endif ?>

                            <?php if (get_field('event_info')): ?>
                                <div><strong>Info</strong>
                                    <a href="<?php echo esc_attr( get_field( 'event_info' ) ) ?>">
                                        <?php echo esc_attr( get_field( 'event_info') ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div><!-- inner -->

                        <div class="event-social-btns">
                            <a style=" display: inline-block; border-right: 1px solid #000 !important;"href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook-share bbtn">
                                <span class="facebook-sm"></span>Share
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=aquanautbrewingco&text=<?php the_title(); ?>" class="twitter-share bbtn">
                                <span class="twitter-sm"></span>Tweet
                            </a>
                        </div>
                    </div>
 

                </div>

                <?php if ($j % 2 == 0): ?>
                </div><!-- .row -->
                <div class="row">
                <?php endif; ?>

            <?php endwhile; ?>
        <?php else: ?>
            <?php // there are no events... put up a nice msg? ?>
            <div class="col-md-4 col-md-offset-4 event">
                <h3>Sorry...</h3>
                <p>It doesn't look like we have any upcoming events on the Schedule...</p>
                <h4>Check back soon!</h4>
            </div>
        <?php endif; ?>
         <?php if ( have_posts() ): ?>
            <?php $j = 0; while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 <?php if (++$j % 2 == 1): ?>col-md-offset-2 <?php endif; ?> event">

                    <h2 class="event-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>    
                    </h2>  
                    
                    <?php the_content(); ?>
                    
                    <div class="event-details">
                        <div class="inner">
                            <h5>Event Details</h5>
                            
                            <?php if ( get_field('date') ): ?>
                                <div><strong>Date</strong> 
                                    <?php echo sa_formatted_event_date() ?>
                                </div>
                            <?php endif ?>
                            
                            <?php if ( get_field( 'time' ) ): ?>
                                <div><strong>Time</strong> 
                                    <?php echo esc_html( get_field( 'time' ) ); ?>
                                </div>
                             <?php endif ?>
                            
                            <?php if ( get_field('place') ): ?>
                                <div><strong>Place</strong>
                                     <a href="<?php echo esc_html( sa_google_map_url(  get_field( 'place' ) ) ); ?>" target="_blank"><?php echo esc_html( get_field( 'place' ) ); ?></a>
                                </div>
                            <?php endif ?>

                            <?php if (get_field('event_info')): ?>
                                <div><strong>Info</strong>
                                    <a href="<?php echo esc_attr( get_field( 'event_info' ) ) ?>">
                                        <?php echo esc_attr( get_field( 'event_info') ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div><!-- inner -->

                        <div class="event-social-btns">
                            <a style=" display: inline-block; border-right: 1px solid #000 !important;"href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook-share bbtn">
                                <span class="facebook-sm"></span>Share
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=aquanautbrewingco&text=<?php the_title(); ?>" class="twitter-share bbtn">
                                <span class="twitter-sm"></span>Tweet
                            </a>
                        </div>
                    </div>
 

                </div>

                <?php if ($j % 2 == 0): ?>
                </div><!-- .row -->
                <div class="row">
                <?php endif; ?>

            <?php endwhile; wp_reset_postdata();?>
        <?php else: ?>
            <?php // there are no events... put up a nice msg? ?>
            <div class="col-md-4 col-md-offset-4 event">
                <h3>Sorry...</h3>
                <p>It doesn't look like we have any upcoming events on the Schedule...</p>
                <h4>Check back soon!</h4>
            </div>
        <?php endif; ?>
         
       </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .contact-map -->

<?php get_footer(); ?>
