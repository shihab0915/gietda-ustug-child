<?php

get_header(); ?>
<!-- Carousel
================================================== -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo get_theme_file_uri('/images/banner1.jpg'); ?>">
      <div class="container">
        <div class="carousel-caption">
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/images/banner2.jpg'); ?>">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_theme_file_uri('/images/banner3.jpg'); ?>">
      <div class="container">
        <div class="carousel-caption">
          
        </div>
      </div>
    </div>
  </div>

<form class="col-sm-12" id="searchForm">
<div class="search_welcom text-center">
    <h1 class="headline headline--welcome">Welcome to <?php bloginfo( 'name' ); ?>!</h1>
    <p class="sub-title"><?php bloginfo( 'description' ); ?></p>
</div>

<form method="get" action="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="large-2 columns project-dropdown">
                    <?php the_hrb_search_dropdown( array( 'name' => 'drop-search' ) ); ?>
                </div>
                    <input type="hidden" id="st" name="st" value="<?php echo esc_attr( hrb_get_search_query_var('st') ? hrb_get_search_query_var('st') : HRB_PROJECTS_PTYPE ); ?>">

                <div class="large-10 columns search-field">
                    <input type="text" id="search" placeholder="<?php echo __( 'Search', APP_TD ); ?>" name="ls" class="text search" value="<?php esc_attr( hrb_output_search_query_var('ls') ); ?>" />

                    <div class="search-btn">
                        <span class="search-button">
                            <button type="submit" id="search-submit" class="search-button"><?php echo __( 'Search', APP_TD ); ?></button>
                        </span>
                    </div>
                </div>
            </div>
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


<!-- Project Categories -->
<div class="container section">
    <div class="row cat_holder ini-pos clearfix">
       <h1 class="headline text-center">Top Categories</h1>
        <?php        
        foreach (get_terms('project_category', array('parent' => 0)) as $cat) : ?>
        <a href="<?php echo get_term_link($cat->slug, 'project_category'); ?>">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 single-box">
                <img class="center-block" src="<?php echo z_taxonomy_image_url($cat->term_id, 'thumbnail'); ?>" />
                <p><?php echo $cat->name; ?></p>
            </div>
        </a>
        <?php endforeach; ?>
        
    </div>
    <div class="row see-all">
        <a href="<?php echo site_url('/categories'); ?>">See All Categories</a>
    </div>
</div>
<!-- Project Categories end-->

<!-- HOW IT WORKS -->
<section class="container-fluid well well--main-bg section-howitworks clearfix">
<h1 class="headline headline--bold text-center how_it_works">How it Works</h1>
    <div class="row col-container">
        <div class="col-md-3 col-sm-6 find">
            <div class="col">
               <img class="center-block img-responsive" src="<?php echo get_theme_file_uri('/images/job-posting.png'); ?>" alt="job-posting">
            </div>
            <hr>
           <h6>Find</h6>
           <p class="text-center">
               Create a free Employer or Freelancer account in minutes. Employers post jobs and Freelancers create profiles and submit quotes to open jobs. Employers review the quotes, communicate with the freelancers, and choose who they want to Hire.
           </p>
        </div>
        <div class="col-md-3 col-sm-6 hire">
           <div class="col">
               <img class="center-block img-responsive" src="<?php echo get_theme_file_uri('/images/hiring.png'); ?>" alt="hiring">
           </div>
           <hr>
           <h6>Hire</h6>
           <p class="text-center">
            Browse profiles, reviews, and proposals then interview top candidates. Hire a favorite and begin your project. 
           </p>
        </div>
        <div class="col-md-3 col-sm-6 work">
            <div class="col">
               <img class="center-block img-responsive" src="<?php echo get_theme_file_uri('/images/work.png'); ?>" alt="working">
            </div>
            <hr>
            <h6>Work</h6>
            <p class="text-center">
               Use the Gielda Uslug platform to messages, share files, and collaborate from your desktop or mobile.
           </p>
        </div>
        <div class="col-md-3 col-sm-6 pay">
            <div class="col">
               <img class="center-block img-responsive" src="<?php echo get_theme_file_uri('/images/payment.png'); ?>" alt="pay-for-job">
            </div>
            <hr>
            <h6>Pay</h6>
            <p class="text-center">
               All payments happen through Gielda Uslug. With Escrow Protection, only pay for work you authorize. 
            </p>
       </div>
    </div>
    <div class="row text-center js_ppbtn">
        <div class="col-xs-12">
            <a class="post_prjt_btn" href="<?php echo site_url('/post-a-project'); ?>">Post a Project</a>
        </div>
    </div>
</section>
<!-- HOW IT WORKS END -->

<div class="container">
    <div class="row">
        <div id="main" class="large-12 columns">
            <?php do_action( 'hrb_front_loops' ); ?>
        </div>
    </div>
</div>
















