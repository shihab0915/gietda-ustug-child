<div id="main" class="large-12 columns">
	<div class="row form-wrapper register">
		<div class="large-12 columns">

			<?php if ( get_option('users_can_register') ) : ?>

				<?php appthemes_load_template('form-registration-main.php'); ?>

			<?php else: ?>

				<h3><?php _e( 'User registration has been disabled.', APP_TD ); ?></h3>

			<?php endif; ?>

		</div>
	</div>
</div>