<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package ellipticalreviews
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function ellipticalreviews_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'ellipticalreviews_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function ellipticalreviews_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'ellipticalreviews_pingback_header' );

// Remove emoji

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function ellipticalreviews_remove_version() {
return '';
}
add_filter('the_generator', 'ellipticalreviews_remove_version');
/*
Clean up wp_head() from unused or unsecure stuff
*/
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

/**
 * Removes the generator tag with WP version numbers. Hackers will use this to find weak and old WP installs
 *
 * @return string
 */
function no_generator() {
	return '';
}
add_filter( 'the_generator', 'no_generator' );
// Replace WordPress login logo with your own
add_action('login_head', 'sms_custom_login_logo');
function sms_custom_login_logo() {
    echo '<style>
    h1 a { background-image:url("https://ellipticalreviews.net/wp-content/uploads/2017/07/logo.png") !important;  margin-bottom: 0 !important; padding-bottom: 0 !important; -webkit-background-size: 125px!important;background-size: 220px!important;background-position: center center!important; height: 125px!important;font-size: 35px!important;width: 225px!important; }
    .login form { margin-top: 2px !important; background:#fff!important;}
    h1{
    background:#fff!important;
    }
  body.login {
 
  background-color: #000000;
 
}
.login label {
 
  font-size: 15px;
  color: #000;
}
.login input[type="text"]{
 
  background-color: #F37431;
  border-color:#ffffff; 
  border-radius:0 !important;
  background: #F37431 !important;
 
}
 
.login input[type="password"]{
  background-color: #F37431;
  border-color:#000;
  border-color:#dddddd;
  background: #F37431 !important;
}
.login input[type="text"]:focus{ 
  border:none; 
  border-radius:0 !important; 
  background: #F37431 !important;
}
 
.login input[type="password"]:focus{
  border:none;
  border-radius:0 !important;
  background: #F37431 !important;
}
.login .button-primary {
  width: 100%;
  float:right;
  background: #F37431 !important;
  color: #ffffff;
  -webkit-border-radius: 4px;
  border: 1px solid #F37431;
  border-radius: 0;
}
 
.login .button-primary:hover {
 
  background-color:#F37431 !important;
 
  color: #fff;
 
  -webkit-border-radius: 4px;
 
  border: 1px solid #F37431;
 
  border-radius: 0;
 
}
 
.login .button-primary:active {
 
  background-color:#F44336 !important;
 
  color: #fff;
 
  -webkit-border-radius: 4px;
 
  border: 1px solid #36B630;
 
  border-radius: 0;
 
}
    </style>';
}
// http://www.webtoblog.com/change-wordpress-login-page-design-without-plugin/

function login_checked_remember_me() {
 
  add_filter( 'login_footer', 'rememberme_checked' );
 
  }
 
  add_action( 'init', 'login_checked_remember_me' );
 
 
  function rememberme_checked() {
 
  echo "<script>document.getElementById('rememberme').checked = true;</script>";
 
  }
// Change the URL of the WordPress login logo
add_filter('login_headerurl', 'sms_url_login_logo');
function sms_url_login_logo(){
    return get_bloginfo( 'home' );
}

//* Change login logo title
add_filter( 'login_headertitle', 'sms_login_logo_url_title' );
function sms_login_logo_url_title() {
  return 'ellipticalreviews'; 
}
// Change the welcome message of admin bar
add_filter('gettext', 'sms_change_howdy', 10, 3);

function sms_change_howdy($translated, $text, $domain) {
 
    if (!is_admin() || 'default' != $domain)
        return $translated;
    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy', 'Hi', $translated);
    return $translated;
}
// Change footer message
add_filter('admin_footer_text', 'change_footer_message');
function change_footer_message () { 
       echo ' Ellipticalreviews'; 
}
// Remove footer version
add_action( 'admin_menu', 'my_footer_shh' );
function my_footer_shh() {
    remove_filter( 'update_footer', 'core_update_footer' ); 
}
// Set comment textarea to the bottom of comment form
function ellipticalreviews_change_comment_textarea_position( $fields ) {
	$comment = array('comment' => $fields['comment'] );
	unset( $fields['comment'] );
	return array_merge( $fields, $comment );
}
add_filter( 'comment_form_fields', 'ellipticalreviews_change_comment_textarea_position' );

