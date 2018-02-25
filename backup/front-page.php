<?php get_header();
/*
Specially designed for displaying the Front-Page/Home-Page of website.
*/
?>


<div class="front-page-search-string-section">
	<div class="container center-text">
		<div class="site_description">
			<p><?php bloginfo('description'); ?></p>
		</div>
		<div class="site_description__declear">
			<p>Chcesz zlecić zadanie lub potrzebujesz jakiejkolwiek pomocy? Wpisz swoje polecenie w poniższym polu, a my znajdziemy wykonawcę</p>
		</div>
		<div class="search-form">
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		    	<label>
		        	<span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span>

		        	<input type="search" class="search-field"
		            placeholder="<?php echo esc_attr_x( 'Wpisz swoje zadanie…', 'placeholder' ) ?>"
		            value="<?php echo get_search_query() ?>" name="s"
		            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />

		    	</label>
    				<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Szukaj', 'submit button' ) ?>" />
			</form>
		</div>
		<div class="become-a-contractor">
			<a href="#">Jak zostać wykonawcą i zacząć zarabiać</a>
		</div>
	</div>
</div>



<div class="container">
	<div class="categories">
		<ul>
			<?php foreach (get_categories() as $cat) : ?>
				<?php
					if ($cat->term_id != 1) { ?>
					<li>
						<p><?php echo $cat->cat_name; ?></p>
						<a href="<?php echo get_category_link($cat->term_id); ?>"><img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" /></a>
					</li>

					<?php }

				?>

			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>

		</ul>
	</div>
</div>

<?php get_footer(); ?>
