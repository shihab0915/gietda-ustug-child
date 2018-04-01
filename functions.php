<?php
function shihab_files() {
    wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    
    wp_enqueue_style( 'shihab_main_styles', get_stylesheet_uri(), NULL, microtime() );
    wp_enqueue_style( 'normalizecss', get_theme_file_uri('/css/normalize.css') );
    wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css' );
    wp_enqueue_style( 'font-awesome', get_theme_file_uri('/css/font-awesome.min.css') );
    
    wp_enqueue_style('roboto-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style( 'railway-font', '//fonts.googleapis.com/css?family=Raleway:300,400' );
    wp_enqueue_style('bootstrap');
	
    
    
    
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', true );
    wp_enqueue_script( 'waypoints', get_theme_file_uri('/js/jquery.waypoints.min.js'), true );
    wp_enqueue_script( 'mainJs', get_theme_file_uri('/js/main.js'), true );
    wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', true );
    
}
add_action( 'wp_enqueue_scripts', 'shihab_files' );

function shihab_prefix_setup() {
	add_theme_support( 'custom-logo' ); // custom logo
}
add_action( 'after_setup_theme', 'shihab_prefix_setup' );


//=========Registration=========
// display the custom fields
function at_custom_fields() {?>
<div class="row">
    <fieldset class="at_fieldset large-4 small-12 columns form-field user-role-type">	 
     <label for="at_referral"><?php _e( 'Please select Employer/Freelancer Type', 'appthemes' ); ?></label><br/>
        <select name="at_referral" id="at_referral">
    <!--       <option value=""></option>-->
          <option value="Individual" <?php echo selected ( isset( $_POST['at_referral'] ) && 'Individual' == $_POST['at_referral'] ); ?> ><?php _e('Individual', 'appthemes'); ?></option>
          <option value="Company" <?php echo selected ( isset( $_POST['at_referral'] ) && 'Company' == $_POST['at_referral'] ); ?> ><?php _e('Company', 'appthemes'); ?></option>
        </select>
    </fieldset>	
</div>
    <style type="text/css">
	.at_fieldset { border: 1px solid #ccc; padding: 10px; border-radius: 5px; }
	.at_number { width: 100px }
    </style>
<?php }
// display the custom fields on registration form
add_action( 'register_form', 'at_custom_fields' );

// register the extra fields as user metadata
function at_register_custom_fields( $user_id, $password = "", $meta = array() )  {
 
	// custom fields
	$fields = array(
		'at_referral',
	);
        // cleans and updates the custom fields
	foreach ( $fields as $field ) {
	    $value = stripslashes( trim( $_POST[$field] ) ) ;
	    if ( ! empty( $value ) ) {
	  	 update_user_meta( $user_id, $field, $value );
	    }
	}
 
}
// save the custom fields to the database as soon as the user is registered on the database
add_action( 'user_register', 'at_register_custom_fields' );

// display custom fields/values on the backend or frontend
function at_custom_fields_display( $user ) {
   $user_id = $user->ID;
?>
   <?php if ( is_admin() ) { ?>
        <!-- // show the backend HTML -->
 
<table class="form-table">
    <tr>
        <th><label for="at_referral"><?php _e( 'Please select Employer/Freelancer Type', 'appthemes' ); ?></label></th>
    <td>
        <strong><?php echo get_user_meta( $user_id, 'at_referral', true ) ; ?></span>
    </td>
    </tr>		
</table>
 
	<?php } else { ?>
 
        <!-- // show the frontend HTML -->

	
<fieldset>
   <p>
      <label for="at_referral"><?php _e( 'Your Employer/Freelancer Type', 'appthemes' ); ?></label>			
      <strong><?php echo get_user_meta( $user_id, 'at_referral', true ) ; ?></strong>
    </p>
</fieldset>
 
	<?php } ?>
<?php
}
// display the custom fields on the user profile page (frontend and admin)
add_action( 'show_user_profile', 'at_custom_fields_display' ); // frontend
add_action( 'edit_user_profile', 'at_custom_fields_display' ); // backend







