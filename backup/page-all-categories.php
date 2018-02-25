<?php get_header(); 
/*
Displaying all the categories
Template Name: All Categories
*/
?>

<div class="container">
	<div class="categories">
		<ul>
			<?php

			foreach (get_categories() as $cat) : ?>
			<?php 
				if($cat->term_id != 1) { ?>
				<li>
					<p><?php echo $cat->cat_name; ?></p>
					<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /></a>
					<p class="categories__post-count"><?php echo $cat->count; ?> Post</p>
				</li>

				<?php }
			?>
			
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
	</div>
</div>


<?php get_footer(); ?>