<?php 
/*
* Template Name: Private Message
*
* Template for messaging in pre-hiring stage and only the clients can start messages
*/

get_header(); ?>

<section class="container-fluid well pvt-mssg">
    <h1 class="pvt-mssg--title"><?php the_title(); ?></h1>
</section>

<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
           <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>    
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
       </div>
    </div>
</div>
