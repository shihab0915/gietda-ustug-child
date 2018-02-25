<?php 
/*
Template Name: My Note
*/

if ( !is_user_logged_in() ) {
    wp_redirect( esc_url(site_url('/')) );
    exit;
}

get_header(); ?>

<div class="container">
  <form action="welcome_get.php" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
  </form>
</div>



<?php get_footer(); ?>