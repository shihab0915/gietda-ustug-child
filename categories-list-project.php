<?php
/**
 * Template Name: Projects Categories
 */
 ?>
<div class="container cat_page_srch_bar">
    <div class="row">
         <div class="col-md-8 col-md-offset-2">
            <form method="get" action="<?php echo esc_url( trailingslashit( home_url() ) ); ?>">
                <div class="columns search-field">
                    <input type="text" id="search" placeholder="<?php echo __( 'Search', APP_TD ); ?>" name="ls" class="text search" value="<?php esc_attr( hrb_output_search_query_var('ls') ); ?>" />
                    <div class="search-btn">
                        <span class="search-button">
                            <button type="submit" id="search-submit" class="search-button"><?php echo __( 'Search', APP_TD ); ?></button>
                        </span>
                    </div>
                </div>
            </form>
         </div>
    </div>
</div>
<div class="row category-row">
	<div class="large-12 columns">
		<div class="categories-list">
	      <?php the_hrb_project_categories_list(); ?>
		</div>
	</div>
</div>
