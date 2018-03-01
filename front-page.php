<?php

get_header(); ?>
<!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_theme_file_uri('/images/repairs.jpeg'); ?>">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/images/home_cleaning.jpeg'); ?>">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/images/programming.jpg'); ?>">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>


<form class="col-sm-12" id="searchForm">
<div class="search_welcom text-center">
    <h1 class="headline headline--welcome">Welcome to Gietda Ustug!</h1>
    <p class="sub-title">Do you want order a job or you need any help? Enter your command in the box bellow we will find a contractor.</p>
</div>

<form method="get" action="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
    <div class="large-2 columns project-dropdown">
        <?php the_hrb_search_dropdown( array( 'name' => 'drop-search' ) ); ?>
    </div>
    <input type="hidden" id="st" name="st" value="<?php echo esc_attr( hrb_get_search_query_var('st') ? hrb_get_search_query_var('st') : HRB_PROJECTS_PTYPE ); ?>">

    <div class="large-9 columns search-field">
        <input type="text" id="search" placeholder="<?php echo __( 'Search', APP_TD ); ?>" name="ls" class="text search" value="<?php esc_attr( hrb_output_search_query_var('ls') ); ?>" />

        <div class="search-btn">
            <span class="search-button">
                <button type="submit" id="search-submit" class="search-button"><?php echo __( 'Search', APP_TD ); ?></button>
            </span>
        </div>
    </div>
</form>
</form> 
  
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="glyphicon glyphicon-chevron-left"></i>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="glyphicon glyphicon-chevron-right"></i>
  </a>  
</div>
<!-- /.carousel -->


<!-- Expariment-->
<div class="cat_icons">  
 <?php 
    $custom_terms = get_terms('project_category');

    foreach($custom_terms as $custom_term) {
        wp_reset_query();
        $args = array('post_type' => 'project',
                      'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'project_category',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                ),
            ),
         );

         $loop = new WP_Query($args);
         if($loop->have_posts()) {
            echo '<h2>'.$custom_term->name.'</h2>';

            while($loop->have_posts()) : $loop->the_post();
                echo '<a href="'.get_permalink().'">'.get_the_title().'</a><br>';
            endwhile;
         }
    } 
?>
</div>
<!-- Expariment end-->


<div class="row">
    <div id="main" class="large-8 columns">

        <?php do_action( 'hrb_front_loops' ); ?>

    </div><!-- end #main -->


    <div id="sidebar" class="large-4 columns">

        <div class="sidebar-widget-wrap cf">
            <?php get_sidebar( app_template_base() ); ?>
        </div><!-- end .sidebar-widget-wrap -->

    </div><!-- end #sidebar -->
</div>
