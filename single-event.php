<?php get_header(); ?>
<div class="event-back" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ink.jpg); ">
    <div class="container">
        <div class="row">
         
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-md-8 col-md-offset-2 event">

                    <h2 class="event-title"><?php the_title(); ?></h2>  
                    <?php the_content(); ?>

                    <div class="event-details">
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


                        
                    </div>
                    <div class="event-social-btns">
                        <!-- <a href="<?php echo sa_facebook_share(); ?>" class="facebook-share btn btn-default"> -->
                        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebook-share btn btn-default">
                            <span class="facebook-sm"></span>Share
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode( get_the_permalink() ); ?>&hashtags=aquanautbrewingco&text=<?php the_title(); ?>" class="twitter-share btn-default">
                            <span class="twitter-sm"></span>Tweet
                        </a>
                    </div>
                </div>

                

            <?php endwhile; ?>

         
       </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .contact-map -->

    
    
<?php get_footer(); ?>
