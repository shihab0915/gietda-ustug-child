<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

	<header class="site-header bg-000A28">
    
    <div class="site-header__nav-icon" onclick="myFunction(this)">
      <div class="bar1"></div>
      <div class="bar2"></div>
      <div class="bar3"></div>
    </div>

    <div class="site-nav walla">
      <?php
        $args = array(
          'theme_location' => 'primary',
        );  
      ?>
      <?php wp_nav_menu( $args ); ?>
    </div>

    <div class="user-reg-and-login">
      <?php if (is_user_logged_in()) { ?>
        <a class="subscribeing btn--with-photo" href="<?php echo wp_logout_url(); ?>">
          <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60); ?></span>
          <span calss="btn__text">Logout</span>
          <a class="login my_notes" href="<?php echo esc_url( site_url('/my-notes') ); ?>">My Notes</a>
        </a>
      <?php } else { ?>
        <a class="login" href="<?php echo wp_login_url(); ?>">Log in</a> <span>lub</span>
        <a class="subscribeing" href="<?php echo wp_registration_url(); ?>">Rejestracja</a>
     <?php } ?>
      
    </div>
    <div class="logo">
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>
      <p><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
    <div class="special-links">
      <ul>
        <li><a href="<?php echo site_url('/all-contractors'); ?>">Wykonawcy</a></li>
        <li><a href="<?php echo site_url('/categories'); ?>">Kategorie</a></li>
      </ul>
    </div>
  </header>