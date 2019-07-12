<?php
/**
 * File for functions and definitions of the theme
 *
 * Contain loding of styles and scripts
 *
 */
//update_option( 'siteurl', 'http://penetronlviv.com/1001/' );
//update_option( 'home', 'http://penetronlviv.com/1001/' );
//Remove admin bar
add_action ('get_header', 'remove_admin_login_header');
function remove_admin_login_header () {
	 remove_action ('wp_head', '_admin_bar_bump_cb');
}
//Style css
add_action('wp_enqueue_scripts', 'load_sec_css');
function load_sec_css() {
    wp_register_style( 'libs',  get_template_directory_uri() . '/static/css/libs.css', array(), ' ' );
    wp_enqueue_style( 'libs',  get_template_directory_uri() . '/static/css/libs.css', array(), ' ' );
    wp_register_style( 'main',  get_template_directory_uri() . '/static/css/main.css', array(), ' ' );
    wp_enqueue_style( 'main',  get_template_directory_uri() . '/static/css/main.css', array(), ' ' );
}
// Style
add_action('wp_enqueue_scripts', 'load_css');
function load_css() {
    wp_register_style( 'styles', get_stylesheet_uri(), array(), ' ' );
    wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), ' ' );
}

//JQUERY
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',array(), null, true);
	wp_enqueue_script( 'jquery' );
}

//Load js
add_action( 'wp_enqueue_scripts', 'load_js' );
function load_js() {
    wp_register_script('libs', get_stylesheet_directory_uri() . '/static/js/libs.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'libs', get_stylesheet_directory_uri() . '/static/js/libs.min.js', array('jquery'), null, true );
    wp_register_script('rollslider', get_stylesheet_directory_uri() . '/static/js/jquery.rollingslider.js', array('jquery'), null, true );
    wp_enqueue_script( 'rollslider', get_stylesheet_directory_uri() . '/static/js/jquery.rollingslider.js', array('jquery'), null, true );
    wp_register_script('slick', get_stylesheet_directory_uri() . '/static/js/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/static/js/slick.min.js', array('jquery'), null, true );
    wp_register_script('aos', get_stylesheet_directory_uri() . '/static/js/aos.js', array('jquery'), null, true );
    wp_enqueue_script( 'aos', get_stylesheet_directory_uri() . 'static/js/aos.js', array('jquery'), null, true );
    wp_register_script('reject', get_stylesheet_directory_uri() . '/static/js/jquery.reject.js', array('jquery'), null, true );
    wp_enqueue_script( 'reject', get_stylesheet_directory_uri() . '/static/js/jquery.reject.js', array('jquery'), null, true );
    wp_register_script('main', get_stylesheet_directory_uri() . '/static/js/main.js', array('jquery'), null, true );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/static/js/main.js', array('jquery'), null, true );
    wp_register_script('timer', get_stylesheet_directory_uri() . '/static/js/timer.js', array('jquery'), null, true );
    wp_enqueue_script( 'timer', get_stylesheet_directory_uri() . '/static/js/timer.js', array('jquery'), null, true );
	wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAFqS67PGQ5xruLPVrazr1xeqzZDNpWLtU', array('jquery'), null, true );
	wp_enqueue_script( 'son', 'https://sonline.su/js/widget3/widget3.js', array('jquery'), null, true );
	/*wp_register_script('g_map', get_stylesheet_directory_uri() . '/js/map.js', array('jquery'), null, false );
    wp_enqueue_script( 'g_map', get_stylesheet_directory_uri() . '/js/map.js', array('jquery'), null, false );*/
}
//Setup
//Add menus
if (function_exists('add_menus')) {
	add_menus('menus');
}

//IMG_posts
add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150 ); 
}

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'blog-thumb', 360, 264, array( 'left', 'top' ) ); 
}


if ( ! function_exists( 'theme_setup' ) ) :
function theme_setup(){
    //Add support theme html 5    
    add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') ); 
    //Add custom logo
    add_theme_support( 'custom-logo', array(
		'height'      => 53,
		'width'       => 262,
		'flex-height' => false,
	) );
    //Menu
    register_nav_menus( array(
		'primary' => __( 'Top Menu', 'visa' )
    ) );
}
endif;
add_action( 'after_setup_theme', 'theme_setup' );
remove_filter('the_content', 'wpautop');

//Options page for main information
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main Settings',
		'menu_title'	=> 'Основная Информация',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}