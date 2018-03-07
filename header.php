<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
<header class="site-header">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand navbar-brand-centered"><a href="<?php echo site_url(); ?>"><img id="logo" class="img-responsive" src="<?php echo get_theme_file_uri('images/logo.jpg'); ?>"></a></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-brand-centered">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img id="menu_icon" src="<?php echo get_theme_file_uri('images/menu_icon.png'); ?>" alt="">
              <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">How to Become a Performer</a></li>
            <li><a href="#">How to Become a Customer</a></li>
            <li class="divider"></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo site_url('/categories'); ?>">Categories</a></li>
          </ul>
            <li><a href="#">
                <section class="top-bar-section">
					<ul class="right">
						<?php the_hrb_user_nav_links(); ?>
					</ul>
				</section>
            </a></li>
        </li>
        
      </ul>

      <ul class="nav navbar-nav navbar-right">
           <li><a href="<?php echo site_url('/how-it-works'); ?>">How it Works</a></li>
           <li><a href="<?php echo site_url('/categories'); ?>">Categories</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header>
