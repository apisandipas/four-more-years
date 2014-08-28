<?php get_header(); ?>
<img src="http://placekitten.com/1400/400" alt="" width="100%" height="auto" style="display: block">
<div class="container">
    <div class="row">
        
        <div class="page-overlap">
            <div class="row">
                <?php  while ( have_posts() ) : the_post(); ?>
                    <div class="col-md-12">
                         <h2 class="post-title"><?php the_title(); ?></h2>  
                    </div>
                   
                    <div class="bio-sidebar">
                        <img src="<?php the_field('bio_image') ?>" class="bio-image img-circle" alt="">
                        <div class="bio">
                            <h4>
                                <?php the_field('bio_name') ?> <br>
                                <small><?php the_field('bio_title') ?></small>
                            </h4>
                            <?php the_field('bio_text') ?>
                        </div>
                    </div>
                    
                    <div class="about-content">
                        <?php the_content(); ?>

                        <div class="bio-block media">
                            <div class="pull-left" >
                                <img class="media-object  img-circle" src="<?php the_field('bio_image') ?>" alt="...">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <?php the_field('bio_name') ?> <br>
                                    <small><?php the_field('bio_title') ?></small>
                                </h4>
                                <?php the_field('bio_text') ?>
                            </div>
                        </div>

                    </div>

                    

                <?php  endwhile; // end of the loop. ?>
            </div><!--row-->
        </div>
   </div><!-- .row -->
</div><!-- .container -->

    
    
<?php get_footer(); ?>
