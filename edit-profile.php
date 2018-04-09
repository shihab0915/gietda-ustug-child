<?php
/*  Template Name: Edit Profile
 *
 * This template must be assigned to a page
 * in order for it to work correctly
 *
 */
?>

<?php global $wp_version; ?>
<div class="gieta_edit_user">
<div id="main " class="large-8 columns">

	<div class="edit-profile">

		<h2 class="text-center"><?php _e('Update Your Profile', APP_TD) ?></h2>

		<div class="form-wrapper">

			<div class="row">
				<div class="large-12 columns">

					<form name="profile" id="profile-form" action="#" class="custom" method="post" enctype="multipart/form-data">

						<div class="row">
							<div class="large-7 small-0 columns">
								&nbsp;
							</div>
							<?php if ( $hrb_options->avatar_upload ): ?>
								<div id="gieta_upload_photo" class="large-2 small-2 columns upload-gravatar">
									<?php hrb_gravatar_media_manager( $current_user->ID, array( 'id' => '_app_gravatar' ) );  ?>
								</div>
							<?php endif; ?>
							<div class="large-3 small-3 columns user-meta-info right">
								<?php the_hrb_user_bulk_info( $current_user->ID, array( 'show_gravatar' => array( 'size' => 75 ) ) ); ?>
							</div>
						</div><hr>

						<fieldset>

							<div class="row">
								<div class="large-12 columns form-field">
									<label><?php _e( 'Username', APP_TD ) ?></label>
									<input type="text" name="user_login" class="text regular-text" id="user_login" value="<?php echo $current_user->user_login; ?>" maxlength="100" disabled />
								</div>
								<div class="large-12 columns form-field">
									<label><?php _e('Name of your compay', APP_TD) ?></label>
									<input type="text" name="nickname" class="text regular-text required" id="nickname" value="<?php echo $current_user->nickname; ?>" maxlength="100" />
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns form-field">
									<label><?php _e('First Name', APP_TD) ?></label>
									<input type="text" name="first_name" class="text regular-text" id="display_name" value="<?php echo esc_attr( $current_user->first_name ); ?>" maxlength="100" />
								</div>
								<div class="large-6 columns form-field">
									<label><?php _e('Last Name', APP_TD) ?></label>
									<input type="text" name="last_name" class="text regular-text" id="display_name" value="<?php echo esc_attr( $current_user->last_name ); ?>" maxlength="100" />
								</div>
							</div>

							<div class="row">
								<div class="large-6 columns form-field">
									<label><?php _e('Display Name', APP_TD) ?></label>
									<select name="display_name" class="text regular-dropdown required" id="display_name" maxlength="100">
										<?php foreach ( appthemes_get_user_profile_display_name_options() as $id => $item ) : ?>
												<option id="<?php echo esc_attr( $id ); ?>" value="<?php echo esc_attr( $item ); ?>" <?php selected( $current_user->display_name, $item ); ?>><?php echo esc_attr( $item ); ?></option>
										<?php endforeach; ?>
									</select>
								</div>

								<div class="large-6 columns form-field">
									<label>
										<label><?php _e('Private Email', APP_TD) ?></label>
										<input type="text" name="email" class="text regular-text required" id="email" value="<?php echo esc_attr( $current_user->user_email ); ?>" maxlength="100" />
									</label>
								</div>
							</div>

							<?php foreach ( wp_get_user_contact_methods( $current_user ) as $name => $desc ) : ?>

									<div class="form-field">
										<label for="<?php echo esc_attr( $name ); ?>"><?php echo apply_filters( "user_{$name}_label", $desc ); ?>:</label>
										<input type="text" name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $current_user->$name ); ?>" class="regular-text" />
									</div>

							<?php endforeach; ?>

							<div class="row">
								<div class="large-12 columns form-field">
									<label><?php _e('REGON number', APP_TD) ?></label>
									<input type="text" name="url" class="text regular-text" id="url" value="<?php echo esc_url( $current_user->user_url ); ?>" maxlength="100" />
								</div>
							</div>
							<div class="row">
								<div class="large-12 columns form-field">
									<label><?php _e('Few words about the company', APP_TD); ?></label>
									<textarea name="description" class="text regular-text" id="description" rows="10" cols="50"><?php echo esc_attr( $current_user->description ); ?></textarea>
								</div>
							</div>

							<?php if ( $show_password_fields ): ?>

								<?php if ( $wp_version < 4.3 ): ?>

									<div class="row">
										<div class="large-6 columns form-field">
											<label><?php _e('New Password', APP_TD); ?></label>
											<input type="password" name="pass1" class="text regular-text" id="pass1" maxlength="50" value="" />
											<span class="description"><?php _e('Leave this field blank unless you would like to change your password.', APP_TD); ?></span>
										</div>

										<div class="large-6 columns form-field">
											<label><?php _e('Password Again', APP_TD); ?></label>
											<input type="password" name="pass2" class="text regular-text" id="pass2" maxlength="50" value="" />
											<span class="description"><?php _e('Type your new password again.', APP_TD); ?></span>
										</div>
									</div>

									<div class="row pass-strenght-indicator hide-if-no-js">
										<div class="large-12 columns form-field">
											<span class=""><?php _e('Your password should be at least seven characters long.', APP_TD); ?></span>
											<p id="pass-strength-result"><?php _e('Strength indicator', APP_TD); ?></p>
										</div>
									</div>

								<?php else: ?>

									<div class="user-pass1-wrap manage-password">
										<div class="row">
											<div class="large-6 columns form-field">
												<label for="pass1"><?php _e( 'New Password', APP_TD ); ?></label>
												<button type="button" class="button wp-generate-pw hide-if-no-js"><?php _e( 'Generate Password', APP_TD ); ?></button>

												<div class="wp-pwd hide-if-js">
													<?php $initial_password = wp_generate_password( 24 ); ?>
													<input type="password" id="pass1" name="pass1" class="regular-text" autocomplete="off" data-pw="<?php echo esc_attr( $initial_password ); ?>" aria-describedby="pass-strength-result" />
													<input type="text" style="display:none" name="pass2" id="pass2" autocomplete="off" />
												</div>
											</div>

											<div class="large-6 columns form-field wp-pwd hide-if-js">
												<button type="button" class="button secondary small wp-hide-pw hide-if-no-js" data-start-masked="<?php echo (int) isset( $_POST['pass1'] ); ?>" data-toggle="0" aria-label="<?php esc_attr_e( 'Hide password' ); ?>">
													<span class="dashicons dashicons-hidden"></span>
													<span class="text"><?php _e( 'Hide', APP_TD ); ?></span>
												</button>
												<button type="button" class="button secondary small wp-cancel-pw hide-if-no-js" data-toggle="0" aria-label="<?php esc_attr_e( 'Cancel password change', APP_TD ); ?>">
													<span class="text"><?php _e( 'Cancel', APP_TD ); ?></span>
												</button>
											</div>
										</div>

										<div class="row pass-strenght-indicator wp-pwd hide-if-no-js">
											<div class="large-12 columns form-field">
												<span class=""><?php _e('Your password should be at least seven characters long.', APP_TD); ?></span>
												<p id="pass-strength-result"><?php _e('Strength indicator', APP_TD); ?></p>
											</div>
										</div><h1>
									</div>

								<?php endif; ?>

							<?php endif; ?>

							<?php
								//do_action( 'profile_personal_options', $current_user );
								//do_action( 'show_user_profile', $current_user );
							?>

							<div class="form-field">
								<input type="submit" class="button" name="update_profile" value="<?php echo esc_attr( __( 'Update Profile', APP_TD ) ); ?>">
							</div>

						</fieldset>

						<?php wp_nonce_field( 'app-edit-profile' ); ?>

						<?php
							hrb_hidden_input_fields(
								array(
									'from'          => 'profile',
									'action'        => 'app-edit-profile',
									'checkuser_id'  => $user_ID,
									'user_id'       => $user_ID,
								 )
							);
						?>
					</form>

				</div>
			</div>
		</div>
	</div>

</div><!-- /#main -->
</div><!-- gieta_edit_user -->

<?php appthemes_load_template( 'sidebar-dashboard.php' ); ?>
