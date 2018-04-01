<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head(); ?>
    <style>
        .ifc-launcher-welcome-box, .ifc-launcher-button{background: rgba(0, 6, 32, .95) !important; border: 3px solid #FFF !important; }
        .ifc-launcher-welcome-box:after{display: none;}
        .ifc-launcher-welcome-header{background: transparent !important; }
    </style>
    <script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "80%" 
        }
    </script>
</head>
<body onload="zoom()" <?php body_class(); ?>>
    
<header class="site-header">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="navbar-brand navbar-brand-centered"><a href="<?php echo site_url(); ?>"><img id="logo" class="img-responsive" src="<?php echo get_theme_file_uri('images/logo.png'); ?>"></a></div>
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
          <!-- Hide this nav when page=register/login -->
          <?php if( !is_page('register') && !is_page('login') ) { ?>
                <li>
                    <a href="#">
                        <section class="top-bar-section">
                            <ul class="right">
                                <?php the_hrb_user_nav_links(); ?>
                            </ul>
                        </section>
                    </a>
                </li>
          <?php } ?>
        </li>
        
        <!-- Show this nav when page=register/login -->
        <?php if( is_page('register') || is_page('login') ) { ?>
            <li <?php if( is_page('login') ) echo 'class="current-menu-item"' ?>><a class="login-nxt" href="<?php echo wp_login_url(); ?>">Login</a></li>
            <li <?php if( is_page('register') ) echo 'class="current-menu-item"' ?>><a class="reg-nxt" href="<?php echo wp_registration_url(); ?>">Register</a></li>
        <?php } ?>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
         <?php 
            if(is_user_logged_in()){ ?>
                <li><a href="<?php echo wp_logout_url(); ?>">Logout</a></li>
            <?php }
          ?>
          
           <li id="hellot" <?php if( is_page('how-it-works') ) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/how-it-works'); ?>">How it Works</a></li>
           <li <?php if( is_page('categories') ) echo 'class="current-menu-item"' ?>><a href="<?php echo site_url('/categories'); ?>">Categories</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<?php
    $user = wp_get_current_user();
    
    if( get_the_ID() == 99 || is_page('how-it-works') || is_page('categories') ){
        if( in_array('administrator', (array) $user->roles) || in_array('employer', (array) $user->roles) ) { ?>
   <nav class="navbar ui-message">
        <span class="glyphicon glyphicon-remove ui-close" aria-hidden="true"></span>
        <p>Do you need to discuss about your project with <span class="ui-fr">Freelancers</span> at the pre-hiring stage? <span><a href="<?php echo site_url('/messages'); ?>" target="_blank">Click Here</a></span></p>  
    </nav>
            
        <?php }
    }
?>
    

        

</header>
