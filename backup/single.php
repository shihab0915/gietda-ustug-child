<?php 
get_header(); ?>

<div class="container">
  <?php
    while (have_posts()) {
      the_post(); ?>
        <div class="single-post-item">
          <h2 class="single-headline"><?php the_title(); ?></h2>

          <div class="single-metabox">
            <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F d, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
          </div>

          <div class="single-generic-content">
            <?php the_content(); ?>
          </div>
        </div>
    <?php } ?>
</div>

<?php get_footer(); ?>