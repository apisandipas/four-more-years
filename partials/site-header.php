
<header class="site-header">
    <a href="<?php echo home_url(); ?>" title="" class="logo" rel="home"></a>
</header><!-- header -->

   
<nav class="sticky-header" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
        <div class="toggleNav navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <div class="toggleNavButton"></div>
        </div>
 
      <a href="<?php echo home_url(); ?>" title=""  rel="home" class="logo-wrap">
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


<nav class="site-nav tk-kepler-std clearfix">
    <?php  
        // Primary Navivation
        wp_nav_menu( array( 
            'menu'            => 'Primary',
            'container'       => false ,
            'container_class' => 'collapse navbar-collapse',
            'menu_class'      => 'nav navbar-nav',
            'walker'          => new wp_bootstrap_navwalker()
        ) ); 
    ?></nav>
