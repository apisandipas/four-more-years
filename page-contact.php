<?php get_header(); ?>
<div class="contact-map" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/map.png) ">
    <div class="container">
        <div class="row">
        
            <div class="contact-card">
                 <div class="contact-card__inner">
                     <?php  while ( have_posts() ) : the_post(); ?>
                         <h2>Let's Connect</h2> 
                         <?php the_content(); ?>
                    
                        <div class="contact-group">
                            <h4>Telephone</h4>

                            <a href="tel:<?php echo esc_html( get_field( 'telephone', 'option' ) ); ?>"><?php echo esc_html( get_field( 'telephone', 'option' ) ); ?></a>
                        </div>
                        
                        <div class="contact-group">
                            <h4>Address</h4>
                            <a href="<?php echo sa_address_to_map_url(); ?>" target="_blank">
                                <?php echo esc_html( get_field( 'address_line_1', 'option' ) ); ?><br/>
                                <?php echo esc_html( get_field( 'address_line_2', 'option' ) ); ?>
                            </a>
                        </div>

                        <div class="contact-group">
                            <h4>Email</h4>
                            <a href="mailto:info@aquanautbrewing.com"><?php echo antispambot('info@aquanautbrewing.com'); ?></a>
                        </div>
                        <hr>

                        <ul class="social-links">
                            <li><a href="<?php echo esc_attr( get_field('facebook_url', 'option') ); ?>"><span class="icon-wrap"><span class="fb"></span></span> Aquanaut Brewing Company</a></li>
                            <li><a href="<?php echo esc_attr( get_field('instagram_url', 'option') ); ?>"><span class="icon-wrap"><span class="ins"></span></span> AquanautBrew</a></li>
                            <li><a href="<?php echo esc_attr( get_field('twitter_url', 'option') ); ?>"><span class="icon-wrap"><span class="twt"></span></span> AquanautBrewing</a></li>
                        </ul>
                     <?php  endwhile; // end of the loop. ?>
                 </div> 
            </div><!-- contact-card -->

       </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .contact-map -->

    
    
<?php get_footer(); ?>
