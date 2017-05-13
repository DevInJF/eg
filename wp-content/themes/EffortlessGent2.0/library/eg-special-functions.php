<?php
/*
 * @developer: neil@neiltan.net
 * 
 */
/*
	Constants
*/
define ("themeRootUrl", get_stylesheet_directory_uri());
define ("themeRootAbsolutePath", get_template_directory());
define ("imgsUrl", themeRootUrl. "/library/images");
define ("cssUrl", get_stylesheet_uri());
define ("siteUrl", get_site_url());
// define("themeRelativePath", "../".WP_CONTENT_FOLDERNAME."/themes/" . get_current_theme());
define('lib_path', themeRootUrl."/_dev/lib/");

if(strstr($_SERVER['HTTP_HOST'], 'dev') || strstr($_SERVER['HTTP_HOST'], 'local')){
    define('isDev', true);
}
else {
    define('isDev', true);
}

function cssDev() {
	echo themeRootUrl."/style.css";
}

function cssMin() {
	echo themeRootUrl."/_build/eg.min.css";
}

function libPath() {
	echo themeRootUrl."_dev/lib/";
}

function getlibPath() {
	return themeRootUrl."/_dev/lib/";
}

function imgPath() {
	echo themeRootUrl."/library/images";
}
function siteUrl() {
	echo get_site_url();
}

// load scripts depending on the environment
isDev ?  add_action('wp_enqueue_scripts', 'load_dev_scripts') :  add_action('wp_enqueue_scripts', 'load_prod_scripts');

function load_dev_scripts() {		
	// wp_enqueue_script('custom_script', themeRootUrl.'/_dev/js-src/main.js', array('jquery'));
	wp_enqueue_style( 'eg', themeRootUrl."/style.css");
}

function load_prod_scripts() {	
	wp_enqueue_script('main_module', themeRootUrl.'/_dev/js-src/mainModule.js');
	wp_enqueue_script('all', themeRootUrl.'/_build/eg.min.js', array('jquery'));		
	wp_enqueue_style( 'ids', themeRootUrl."/_build/eg.min.css");
}

function load_lib_scripts(){
// removes WP version of jQuery
	wp_deregister_script('jquery');
	
	// loads jQuery 2.1.0
    wp_enqueue_script( 'jquery', lib_path.'foundation/js/vendor/jquery.js', array(), '2.1.0', false );
    
    // modernizr (without media query polyfill)
    wp_enqueue_script( 'modernizr', lib_path.'foundation/js/vendor/modernizr.js', array(), '2.5.3', false );
    
    // adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', lib_path.'foundation/js/foundation.min.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'infinitescroll', get_template_directory_uri() . '/library/js/jquery.infinitescroll.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/library/js/masonry.pkgd.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/library/js/imagesloaded.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'viewport', get_template_directory_uri() . '/library/js/jquery.viewport.mini.js', array( 'jquery' ), '', true );

	// register main stylesheet    
    // register foundation icons
    wp_enqueue_style( 'foundation-icons', get_template_directory_uri() . '/library/css/icons/foundation-icons.css', array(), '', 'all' );
    //gumroad script
    wp_enqueue_script( 'gumroad', 'https://gumroad.com/js/gumroad.js', array( 'jquery' ), '', true );

	wp_enqueue_script('custom_script', themeRootUrl.'/_dev/js-src/main.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'load_lib_scripts'); 

function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'my_filter_head');


?>

