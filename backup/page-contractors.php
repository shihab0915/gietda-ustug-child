<?php 
/*
Template Name: All Contractors
*/
get_header(); ?>
<div class="contractors">
  <div class="container">
      <div class="contractors__content">
        <?php
          if ( have_posts() ) :
            while (have_posts() ) :
              the_post(); ?>
              <h1><?php the_title(); ?></h1>
              <p><?php the_content(); ?></p>

            <?php endwhile; endif;
        ?>
      </div>
    </div>
</div>


<div class="container">
  <?php
    $allContractors = new WP_Query( array(
      'posts_per_page' => -1,
      'post_type' => 'contractors',
    ) );

    while ($allContractors->have_posts()) {
      $allContractors->the_post(); ?>
      <div class="contractor_photo">
          <?php $image = get_field('contractors_photo'); ?>
          <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
      </div>
      
      <h5 class="contractor_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
      <p class="contractor_specialization">Specialized in: <?php the_field('specialized_in'); ?></p>
      <p class="contractor_view_profile"><a href="<?php the_permalink(); ?>">View Profile</a></p>
      <p class="contractor_description"><?php echo wp_trim_words(get_the_content(), 120) ?><a class="read_more" href="<?php the_permalink(); ?>">View details</a></p>
    <?php }
  ?>
</div>

<?php get_footer(); ?>