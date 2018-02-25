<?php 
get_header(); ?>

<div class="container">
  <h1 class="srp_page_head">Search Results</h1>
</div>

<div class="container">
  <?php
  // Retrive category in search results
    $search_term = explode( ' ', get_search_query( false ) );   
    global $wpdb;
    $select = "
    SELECT DISTINCT t.*, tt.* 
    FROM wp_terms AS t 
    INNER JOIN wp_term_taxonomy AS tt 
    ON t.term_id = tt.term_id 
    WHERE tt.taxonomy IN ('category')";      
    $first = true;
    foreach ( $search_term as $s ){
        if ( $first ){
            $select .= " AND (t.name LIKE '%s')";
            $string_replace[] = '%'.$wpdb->esc_like( $s ).'%';
            $first = false;
        }else{
            $select .= " OR (t.name LIKE '%s')";
            $string_replace[] = '%'. $wpdb->esc_like( $s ).'%';
        }
    }
    $select .= " ORDER BY t.name ASC";
    $terms = $wpdb->get_results( $wpdb->prepare( $select, $string_replace ) );
    if ( count($terms) > 0 ){
        echo '<ul>';
        foreach ( $terms as $term ) {
            echo '<li><a href="'.esc_url( get_term_link( $term ) ).'" title="'.esc_attr( $term->name ).'">' . esc_html( $term->name ) . '</a></li>';
        }
        echo '</ul>';
    }

  //mainloop start
    while (have_posts()) {
      the_post(); ?>
        <div class="srp-post-item">
          <h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

          <div class="srp-generic-content">
            <?php the_excerpt(); ?>
            <p class="srp-continue-reading-para"><a class="srp-continue-reading" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
          </div>
        </div>
    <?php } ?>
    <div class="srp-pagination">
      <?php echo paginate_links(); ?>
    </div>
 <?php ?>
</div>

<?php get_footer(); ?>