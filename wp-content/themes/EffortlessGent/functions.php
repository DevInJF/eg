<?php
ob_start();
/*
This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/*********************
INCLUDE NEEDED FILES
*********************/

require_once(get_template_directory().'/library/shortcodes.php');
require_once(get_template_directory().'/library/theme-options.php');

/*
library/joints.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once(get_template_directory().'/library/joints.php'); // if you remove this, Joints will break
require_once(get_template_directory().'/library/widget-nextprev.php'); // if you remove this, Joints will break
/*
library/custom-post-type.php
	- an example custom post type
	- example custom taxonomy (like categories)
	- example custom taxonomy (like tags)
*/
// require_once(get_template_directory().'/library/custom-post-type-accordion.php'); // you can disable this if you like
// require_once(get_template_directory().'/library/custom-post-type.php'); // you can disable this if you like
/*
library/admin.php
	- removing some default WordPress dashboard widgets
	- an example custom dashboard widget
	- adding custom login css
	- changing text in footer of admin
*/
// require_once(get_template_directory().'/library/admin.php'); // this comes turned off by default
/*
library/translation/translation.php
	- adding support for other languages
*/
// require_once(get_template_directory().'/library/translation/translation.php'); // this comes turned off by default
/*
library/shortcodes.php
	- adding support for custom shortcodes (search widget)
*/

/*********************
MENUS & NAVIGATION
*********************/
// registering wp3+ menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ), // secondary nav in footer
		'social-links' => __( 'Social Links' )  // secondary nav in footer
	)
);

// the main menu
function joints_main_nav() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} /* end joints main nav */

// the footer menu (should you choose to use one)
function joints_footer_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// the social menu (bottom of page)
function joints_social_links() {
	// display the wp3 menu if available
    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'social-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Social Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'social-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} /* end joints footer link */

// this is the fallback for header menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => 'top-bar top-bar-section',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}

// this is the fallback for footer menu
function joints_footer_links_fallback() {
	/* you can put a default here if you like */
}

/*********************
SIDEBARS
*********************/

// Sidebars & Widgetizes Areas
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'jointstheme'),
		'description' => __('The first (primary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Bottom Bar', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'offcanvas',
		'name' => __('Offcanvas', 'jointstheme'),
		'description' => __('The offcanvas sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	/*
	to add more sidebars or widgetized areas, just copy
	and edit the above sidebar code. In order to call
	your new sidebar just use the following code:

	Just change the name to whatever your new
	sidebar's id is, for example:

	register_sidebar(array(
		'id' => 'sidebar2',
		'name' => __('Sidebar 2', 'jointstheme'),
		'description' => __('The second (secondary) sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	To call the sidebar in your template, you can just copy
	the sidebar.php file and rename it to your sidebar's name.
	So using the above example, it would be:
	sidebar-sidebar2.php
	*/
	
	add_action( 'widgets_init', 'joints_register_sidebars' );
	
} // don't remove this bracket!

/*********************
COMMENT LAYOUT
*********************/

// Comment Layout
function joints_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('panel'); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix large-12 columns">
			<header class="comment-author">
				<?php
				/*
					this is the new responsive optimized comment image. It used the new HTML5 data-attribute to display comment gravatars on larger screens only. What this means is that on larger posts, mobile sites don't have a ton of requests for comment images. This makes load time incredibly fast! If you'd like to change it back, just replace it with the regular wordpress gravatar call:
					echo get_avatar($comment,$size='32',$default='<path_to_url>' );
				*/
				?>
				<!-- custom gravatar call -->
				<?php
					// create variable
					$bgauthemail = get_comment_author_email();
				?>
				<?php printf(__('<cite class="fn">%s</cite>', 'jointstheme'), get_comment_author_link()) ?> on
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time(__(' F jS, Y - g:ia', 'jointstheme')); ?> </a></time>
				<?php edit_comment_link(__('(Edit)', 'jointstheme'),'  ','') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p><?php _e('Your comment is awaiting moderation.', 'jointstheme') ?></p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<?php comment_text() ?>
			</section>
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/*********************
CUSTOM ADDED
*********************/

	// This removes the admin bar from the site so I can see what the site will look like...
	//add_filter( 'show_admin_bar', '__return_false' );

	//shows template name in admin bar
// function show_me_the_template()
// {
// 	if (current_user_can( 'manage_options' )) {
// 		global $template, $wp_admin_bar;
// 		get_currentuserinfo();
// 		if ( is_admin_bar_showing() ) {
// 			$wp_admin_bar->add_menu( array(
// 			'parent' => false,
// 			'id' => 'template',
// 			'title' => $template,
// 			'href' => '#'
// 			));
// 		}
// 	}
// }
// add_action( 'wp_head', 'show_me_the_template');

// Call get_custom_post_thumbnail($ID) to get blog images, or get_custom_post_thumbnail($ID, true) to get the larger featured image.
function get_custom_post_thumbnail($postID, $featured=true) {
	if($featured) {
		$smallsrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-feature-small' );
		$mediumsrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-feature-medium' );
    	$largesrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-feature-large' );
    } else {
		$smallsrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-thumbnail-small' );
		$mediumsrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-thumbnail-medium' );
    	$largesrc = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'blog-thumbnail-medium' );	
	}
   	?><img src="<?php echo $largesrc[0]; ?>" data-interchange="[<?php echo $smallsrc[0]; ?>, (small)], [<?php echo $mediumsrc[0]; ?>, (medium)], [<?php echo $largesrc[0]; ?>, (large)]"><noscript><img src="<?php echo $largesrc[0]; ?>" alt=""></noscript><?php  
}




// Comscore
	function comscore_tag_track() { ?>
		<!-- Begin comScore Tag -->
		<script>
		  var _comscore = _comscore || [];
		  _comscore.push({ c1: "2", c2: "18278468" });
		  (function() {
		    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
		    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		    el.parentNode.insertBefore(s, el);
		  })();
		</script>
		<noscript>
		  <img src="http://b.scorecardresearch.com/p?c1=2&c2=18278468&cv=2.0&cj=1" />
		</noscript>
		<!-- End comScore Tag -->
	<?php }
	add_action('wp_head','comscore_tag_track');

// Skimlinks
	function insert_skimlinks() { ?>
		<script type="text/javascript" src="//s.skimresources.com/js/47795X1194469.skimlinks.js"></script>
	<?php }
	add_action('wp_footer','insert_skimlinks');



//nonce stuff - for enable public preview plugin
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 5; // 5 days
}

        
/*
 * Force URLs in srcset attributes into HTTPS scheme.
 * This is particularly useful when you're running a Flexible SSL frontend like Cloudflare
 */
function ssl_srcset( $sources ) {
  foreach ( $sources as &$source ) {
    $source['url'] = set_url_scheme( $source['url'], 'https' );
  }

  return $sources;
}
add_filter( 'wp_calculate_image_srcset', 'ssl_srcset' );        


// adding holiday gift guide callout - REMOVE 1/1/2017
//add_filter ('the_content', 'hgg_banner');
//function hgg_banner($content) {
//    if(is_single()) {
//        $custom_content.= '<p style="margin-bottom:2.25em;">';
//        $custom_content.= '<a href="http://effgnt.co/eghgg2016post" target="_blank"><img src="https://effortlessgent.com/wp-content/uploads/2016/12/hgg_post_banner.jpg"></a>';
//        $custom_content.= '</p>';
//        $custom_content.= $content;
//        return $custom_content;
//    } else {
//    return $content;
//    }
//}


// adding opt-ins for products for specific posts

// BALW
add_filter ('the_content', 'balwOptIn');
function balwOptIn($content) {
//    if(is_single()) {
        if(has_tag( 'lean-wardrobe' ) && is_single()) {
           $content.= '<style type="text/css">';
           $content.= '.page .ck_form.ck_naked {margin:20px auto 0 !important;}';
           $content.= '.ck_form_fields {padding:0px !important;float:none !important;}';
           $content.= '.panel.callout {padding:2em 1.75em !important;}';
           $content.= '.ck_form.ck_naked .ck_subscribe_button {font-size:13px !important;font-weight:400;text-transform:uppercase;}';
           $content.= '#ck_success_msg { padding: 1em 2em 0 !important;  border: none !important; background: #43ac6a !important; text-align: center !important; }';
           $content.= '#ck_success_msg p {color: #fff !important; margin: 0px !important; text-align:center !important; padding: 0px 0px 1em !important; font-weight: bold !important; }';
           $content.= '</style>';
           $content.= '<div class="large-12 large-centered columns clearfix panel callout" style="margin-top:3em;padding-top:1.25rem;background:#fafcfd;">';
           $content.= '<h4 style="text-align:center;line-height:1.4em;">If you found this article useful, make sure to check out our Lean Wardrobe resources page.</h4>';
           $content.= '<p style="text-align:center;"><a class="button" href="/lean-wardrobe-101">TAKE ME TO THE RESOURCES PAGE</a></p>';
           $content.= '</div>';
//           $content.= '<style type="text/css">';
//           $content.= '.page .ck_form.ck_naked {margin:20px auto 0 !important;}';
//           $content.= '.ck_form_fields {padding:0px !important;float:none !important;}';
//           $content.= '.panel.callout {padding:2em 1.75em !important;}';
//           $content.= '.ck_form.ck_naked .ck_subscribe_button {font-size:13px !important;font-weight:400;text-transform:uppercase;}';
//           $content.= '#ck_success_msg { padding: 1em 2em 0 !important;  border: none !important; background: #43ac6a !important; text-align: center !important; }';
//           $content.= '#ck_success_msg p {color: #fff !important; margin: 0px !important; text-align:center !important; padding: 0px 0px 1em !important; font-weight: bold !important; }';
//           $content.= '</style>';
//           $content.= '<div class="large-12 large-centered columns clearfix panel callout" style="margin-top:3em;padding-top:1.25rem;background:#fafcfd;">';
//           $content.= '<h4 style="text-align:center;line-height:1.4em;">If you found this article useful, sign up to receive your FREE email series on building a Lean Wardrobe.</h4>';
//           $content.= '<p style="text-align:center;">You\'ll get the first email within 24 hours after hitting "subscribe".</p>';
//           $content.= '<script src="https://app.convertkit.com/landing_pages/43500.js"></script>';
//           $content.= '<p class="smalllink" style="color:#999;text-align:center;">This is 100% private, no SPAM or other nasty things. Unsubscribe any time you feel like it.</p>';
//           $content.= '</div>';
        } elseif(has_tag('')){
           $content.= '<style type="text/css">';
           $content.= '.page .ck_form.ck_naked {margin:20px auto 0 !important;}';
           $content.= '.ck_form_fields {padding:0px !important;float:none !important;}';
           $content.= '.panel.callout {padding:2em 1.75em !important;}';
           $content.= '.ck_form.ck_naked .ck_subscribe_button {font-size:13px !important;font-weight:400;text-transform:uppercase;color:#4c7e94 !important;}';
           $content.= '#ck_success_msg { padding: 1em 2em 0 !important;  border: none !important; background: #43ac6a !important; text-align: center !important; }';
           $content.= '#ck_success_msg p {color: #fff !important; margin: 0px !important; text-align:center !important; padding: 0px 0px 1em !important; font-weight: bold !important; }';
           $content.= '</style>';
           $content.= '<div class="large-12 large-centered columns clearfix panel callout" style="margin-top:3em;padding-top:1.25rem;background:#1f1f1f;">';
           $content.= '<h4 style="text-align:center;line-height:1.4em;color:#fff;">Learn a few shortcuts to dressing well</h4>';
           $content.= '<p style="text-align:center;color:#fff;">Enter your first name and email, and I\'ll send you a free eGuide with quick and easy tips you can use today.</p>';
           $content.= '<script async id="_ck_57436" src="https://forms.convertkit.com/57436?v=5"></script>';
           $content.= '<p class="smalllink" style="color:#444;text-align:center;">This is 100% private, no SPAM or other nasty things. Unsubscribe any time you feel like it.</p>';
           $content.= '</div>';
        }
        return $content;
//    }
}
        
?>
        
        