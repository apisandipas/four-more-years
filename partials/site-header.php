<!-- <div class="row"> -->
    <header class="site-header">
        <a href="<?php echo home_url(); ?>" title="" class="logo" rel="home"></a>
    </header><!-- header -->
<!-- </div> -->

    <?php /*
    <header class="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo home_url(); ?>" title="" class="logo" rel="home"></a>
                    
                    <nav class="small-nav">
                         <?php  
                            // Primary Navivation
                            wp_nav_menu( array( 
                                'menu'            => 'Primary',
                                'container'       => false ,
                                'container_class' => 'collapse navbar-collapse',
                                'menu_class'      => 'nav navbar-nav navbar-right',
                                'walker'          => new wp_bootstrap_navwalker()
                            ) ); 
                        ?>
                    </nav>
                </div>
            </div><!-- row -->
        </div><!-- container-->
    </header><!-- header -->
    */?>
   
<nav class="sticky-header" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo home_url(); ?>" title=""  rel="home">
         <div class="logo"></div>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <?php  
        // Primary Navivation
        wp_nav_menu( array( 
            'menu'            => 'Primary',
            'container'       => false ,
            'container_class' => 'collapse navbar-collapse',
            'menu_class'      => 'nav navbar-nav navbar-right',
            'walker'          => new wp_bootstrap_navwalker()
        ) ); 
    ?>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-->
</nav>

<!-- <div class="row"> -->
    <nav class="site-nav tk-kepler-std clearfix">
        <h3 class="assistive-text">Main menu</h3><!-- assistive-text -->

        <div class="skip-link">
            <a class="assistive-text" href="#content" title="Skip to primary content">Skip to primary content</a>
        </div><!-- skip-link -->
        <?php  
            // Primary Navivation
            wp_nav_menu( array( 
                'menu'            => 'Primary',
                'container'       => false ,
                'container_class' => 'collapse navbar-collapse',
                'menu_class'      => 'nav navbar-nav',
                'walker'          => new wp_bootstrap_navwalker()
            ) ); 
        ?>
    </nav><!-- site-nav -->
<!-- </div> -->


