<?php get_header(); ?>
<div class="event-back" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ink.jpg); ">
    <div class="container">
        <div class="row">
         
            <?php $j = 0; while ( have_posts() ) : the_post(); ?>
                <div class="col-md-4 <?php if (++$j % 2 == 1): ?>col-md-offset-2 <?php endif; ?> event">

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
                </div>

                <?php if ($j % 2 == 0): ?>
                </div><!-- .row -->
                <div class="row">
                <?php endif; ?>

            <?php endwhile; ?>

         
       </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .contact-map -->

    
    
<?php get_footer(); ?>
