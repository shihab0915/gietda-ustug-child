<?php
	// footer can be setup to a maximum of 3 columns

	$sidebars = (int) is_active_sidebar('hrb-footer') + (int) is_active_sidebar('hrb-footer2') + (int) is_active_sidebar('hrb-footer3');

	if ( ! $sidebars ) { $sidebars = 1;	}

	$columns = 12 / $sidebars;
?>

<!-- Footer Widgets -->
<div id="footer">
	<div class="row widgets-footer">
		<div class="large-12 columns wrap">

			<div id="footer-widget1" class="f-widget <?php echo "large-{$columns}"; ?> columns">
				<?php dynamic_sidebar('hrb-footer'); ?>
			</div>

			<?php if ( is_active_sidebar('hrb-footer2') ) : ?>
				<div id="footer-widget2" class="f-widget <?php echo "large-{$columns}"; ?> columns">
					<?php dynamic_sidebar('hrb-footer2'); ?>
				</div>
			<?php endif; ?>


<!-- CUSTOM FOOTER FOR PARENT CATEGORY -->
<div id="footer-widget3" class="f-widget large-4 columns">
    <div id="custom_html-3" class="widget_text widget large-12 centered columns widget_custom_html">
    <div class="section-head"><h3>Categories</h3></div>
        <div class="menu-header-container">
            <?php        
                foreach (get_terms('project_category', array('parent' => 0)) as $cat) : ?>
                   <li class="cat_head_ftr">
                        <a href="<?php echo get_term_link($cat->slug, 'project_category'); ?>">
                            <?php echo $cat->name; ?>
                        </a>
                    </li>
            <?php endforeach; ?>
        </div>
    </div>				
</div>            



		</div>
	</div>

	<!-- End footer Widgets -->

	<!-- Footer -->
	<footer class="row footer">
		<div class="large-12 columns">

			<div id="theme-info" class="footer-info large-7 columns">
				<div class="footer-credits"><a href="<?php echo site_url(); ?>" target="_blank" rel="nofollow"><?php bloginfo('name'); ?></a> - <?php _e( 'Powered by', APP_TD ); ?> <a href="https://www.upwork.com/freelancers/~01a9f777bf29c61bb1" target="_blank" rel="nofollow">Developer</a>.</div>
			</div>
			
			 <div id="footer-menu" class="footer-links large-5 columns">
			  <?php the_hrb_footer_menu(); ?>
			</div>
			
		</div>
	</footer>

</div><!-- end #footer -->
