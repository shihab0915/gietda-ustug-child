<div class="category-posts"><!--CATEGORY POSTS ROW-1 START-->
	<div class="category-posts__single-cat-section">
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 9 ); ?> "><p><?php echo get_cat_name( 9 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 9,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--23 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 23 ); ?>"><p><?php echo get_cat_name( 23 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 23,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--20 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 20 ); ?>"><p><?php echo get_cat_name( 20 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 20,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--12 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 12 ); ?>"><p><?php echo get_cat_name( 12 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 12,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
</div><!--CATEGORY POSTS ROW-1 END-->
<div class="category-posts"><!--CATEGORY POSTS ROW-2 START-->
	<div class="category-posts__single-cat-section"><!--18 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 18 ); ?>"><p><?php echo get_cat_name( 18 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 18,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--22 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 22 ); ?>"><p><?php echo get_cat_name( 22 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 22,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--16 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 16 ); ?>"><p><?php echo get_cat_name( 16 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 16,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--21 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 21 ); ?>"><p><?php echo get_cat_name( 21 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 21,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
</div><!--CATEGORY POSTS ROW-2 END-->
<div class="category-posts"><!--CATEGORY POSTS ROW-3 START-->
	<div class="category-posts__single-cat-section"><!--13 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 13 ); ?>"><p><?php echo get_cat_name( 13 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 13,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--24 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 24 ); ?>"><p><?php echo get_cat_name( 24 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 24,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--10 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 10 ); ?>"><p><?php echo get_cat_name( 10 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 10,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--11 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 11 ); ?>"><p><?php echo get_cat_name( 11 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 11,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
</div><!--CATEGORY POSTS ROW-3 END-->
<div class="category-posts"><!--CATEGORY POSTS ROW-4 START-->
	<div class="category-posts__single-cat-section"><!--17 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 17 ); ?>"><p><?php echo get_cat_name( 17 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 17,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--14 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 14 ); ?>"><p><?php echo get_cat_name( 14 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 14,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--15 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 15 ); ?>"><p><?php echo get_cat_name( 15 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 15,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	<div class="category-posts__single-cat-section"><!--19 start-->
		<div class="category-posts__cat-name">
			<a href="<?php echo get_category_link( 19 ); ?>"><p><?php echo get_cat_name( 19 ) ?></p></a>
		</div>
		<div class="category-posts__posts">
			<?php
				//RETRIEVING ALL POSTS FROM SPECIFIC CATEGORY
				$args = array(
					'cat' => 19,
					'posts_per_page' => -1,
				);

				$myVariable = new WP_Query( $args );
				if ( $myVariable->have_posts() ) :
					while ( $myVariable->have_posts() ) : $myVariable->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
					<?php endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>

</div><!--CATEGORY POSTS ROW-4 END-->