<?php 
/*
Template Name: All Contractors
*/
get_header(); ?>
<div class="contractor_single">
  <div class="container">
      <div class="contractors__content">
        <div class="contractors__content__wrapper">
          <?php
            if ( have_posts() ) :
              while (have_posts() ) :
                the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <h6 class="contractor_specialization_in_single_page">Specialized in: <?php the_field('specialized_in'); ?></h6>
              <?php endwhile; endif;
          ?>
        </div>
      </div>
    </div>
</div>

<div class="container">
  <div class="contractor_photo__in_single_page">
      <?php $image = get_field('contractors_photo'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
  </div>
  <div class="contractor_description">
      <?php the_content(); ?>
  </div>
  <div class="back_to">
    <script>
    function goBack() {
        window.history.back()
    }
    </script>
    <a onclick="goBack()">&crarr; Go Back</a>
  </div>   
</div>

<?php get_footer(); ?>