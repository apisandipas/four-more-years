<?php get_header(); ?>

    <h1 class="new_page_title"><?php  the_title(); ?></h1>
    
    <div>
        <?php  while ( have_posts() ) : the_post(); ?>
            <?php  get_template_part( 'content', 'page' ); ?>
        <?php  endwhile; // end of the loop. ?>
    </div>
    
<?php get_footer(); ?>