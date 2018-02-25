<?php 
get_header(); ?>

<div class="container">
  <?php
    while (have_posts()) {
      the_post(); ?>
        <div class="general-page">
          <h2 class="page-headline"><?php the_title(); ?></h2>

          <div class="general-page__metabox">
            <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F d, Y'); ?></p>
          </div>

          <div class="general-page__content">
            <?php the_content(); ?>
          </div>
        </div>
    <?php }
    echo paginate_links();
  ?>
</div>

<?php get_footer(); ?>