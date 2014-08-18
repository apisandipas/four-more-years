
<footer class="site-footer">
    <div class="container">
        <div class="row">
        
            <div class="social col-md-3 col-md-offset-3">
                <ul>
                    <li><a href="<?php echo esc_attr( get_field('facebook_url', 'option') ); ?>" target="_blank" class="facebook"></a></li>
                    <li><a href="<?php echo esc_attr( get_field('instagram_url', 'option') ); ?>" target="_blank" class="instagram"></a></li>
                    <li><a href="<?php echo esc_attr( get_field('twitter_url', 'option') ); ?>" target="_blank" class="twitter"></a></li>
                </ul>
            </div>

            <div class="copy col-md-3">
                &copy; <?php echo sa_copyright_range(); ?> <?php bloginfo( 'name' ); ?> 
            </div>

        </div><!-- row -->
    </div><!-- container -->
</footer><!-- site-footer -->

