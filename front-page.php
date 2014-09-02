<?php get_header(); ?>
<!-- <section class="home-splash" style="background-image: url(<?php the_post_thumbnail('background-image'); ?>); "> -->
<section class="home-splash" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/taps.jpg); ">
    
    <div class="home-splash__inner">
        
        <div class="home-splash__headline">
            Welcome to Aquanaut <br>
            Brewing Company
        </div> 
             
       
        <a href="<?php echo home_url('/beers'); ?>" class="home-splash__button ">Take A Taste</a>
    </div>    
           

</section>
<?php get_footer(); ?>

