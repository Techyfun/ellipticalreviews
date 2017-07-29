<?php
/**
 * ellipticalreviews functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ellipticalreviews
 */

if ( ! function_exists( 'ellipticalreviews_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ellipticalreviews_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ellipticalreviews, use a find and replace
	 * to change 'ellipticalreviews' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ellipticalreviews', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
        add_image_size( 'home-left', 250, 264, true );
        add_image_size( 'home-right', 120, 125, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ellipticalreviews' ),
		'menu-top' => esc_html__( 'Top nav', 'ellipticalreviews' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ellipticalreviews_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'ellipticalreviews_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ellipticalreviews_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ellipticalreviews_content_width', 640 );
}
add_action( 'after_setup_theme', 'ellipticalreviews_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ellipticalreviews_widgets_init() {
	
        register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ellipticalreviews' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ellipticalreviews' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-1', 'ellipticalreviews' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add footer one widgets here.', 'ellipticalreviews' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="footer-h1">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-2', 'ellipticalreviews' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add footer two widgets here.', 'ellipticalreviews' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="footer-h1">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-3', 'ellipticalreviews' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'ellipticalreviews' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="footer-h1">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-4', 'ellipticalreviews' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'ellipticalreviews' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="footer-h1">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'ellipticalreviews_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ellipticalreviews_scripts() {

wp_enqueue_style( 'ellipticalreviews-bootsrap', get_theme_file_uri( '/asset/css/bootstrap.min.css' ));
wp_enqueue_style( 'ellipticalreviews-bootsrap-theme', get_theme_file_uri( '/asset/css/bootstrap-theme.min.css' ));
wp_enqueue_style( 'ellipticalreviews-normallize', get_theme_file_uri( '/asset/css/normalize.css' ));
wp_enqueue_style( 'ellipticalreviews-star-rating', get_theme_file_uri( '/asset/css/star-rating.css' ));
wp_enqueue_style( 'ellipticalreviews-style', get_stylesheet_uri() );



wp_enqueue_script( 'yogsutra-bootstrap', get_theme_file_uri('/asset/js/bootstrap.min.js'), array('jquery'), '', true );
wp_enqueue_script( 'yogsutra-conditionizr', get_theme_file_uri('/asset/js/conditionizr.min.js'), array('jquery'), '', true );
wp_enqueue_script( 'yogsutra-modernizr', get_theme_file_uri('/asset/js/modernizr.custom.js'), array('jquery'), '', true );
wp_enqueue_script( 'yogsutra-sticky', get_theme_file_uri('/asset/js/jquery.sticky.js'), array('jquery'), '', true );
wp_enqueue_script( 'yogsutra-ZeroClipboard', get_theme_file_uri('/asset/js/zeroclipboard/ZeroClipboard.min.js'), array('jquery'), '', true );
wp_enqueue_script( 'yogsutra-scripts', get_theme_file_uri('/asset/js/scripts.js'), array('jquery'), '', true );
        
               
        
wp_enqueue_script( 'ellipticalreviews-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
wp_enqueue_script( 'ellipticalreviews-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ellipticalreviews_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/ellipticalreviews_navwalker.php';
require get_template_directory() . '/inc/shortcode.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/******************************************************************************/
/***************************** Theme Options **********************************/
/******************************************************************************/
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ellipticalreviews.config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ellipticalreviews.config.php' );
}
global $ellipticalreviews_opt;