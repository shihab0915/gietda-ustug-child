<footer class="site-footer">
<div class="container">
	<div class="logo-footer">
      <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"></a>
      <p><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
    <?php get_template_part('template-parts/category_posts_footer'); ?>
</div>
    
</footer>

<?php wp_footer(); ?>

</body>
</html>