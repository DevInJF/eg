<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<!-- pinterest -->
		<meta name="p:domain_verify" content="5a3ceb25429d866f68239982bc4314c9"/>

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- fb general website tracking pixel -->
		<!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1401680256791141');
        fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=1401680256791141&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
		<!-- end fb tracking -->


		<!-- mc goal tracking -->
		<script type="text/javascript">
			var $mcGoal = {'settings':{'uuid':'c6ba38418ab16f3d5550a238e','dc':'us8'}};
			(function() {
				 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
				sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
			})(); 
		</script>
		<!-- end mc tracking -->


	<?php 
		// This little snippet will enable us to override the default logo from the theme, if there's one added in from the theme options page
		if(get_option('eg_logo')) {
			echo '<style>.tab-bar .title, .top-bar .title, .footer h1 { ';
			echo 'background: url("' .get_option('eg_logo'). '") center center no-repeat; }';
			echo '</style>';
		}
	?>

	</head>
	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<div id="container">

				<div class="ajax-loader"></div>
			
				<header class="header" role="banner">

					<div id="inner-header">
						
						 <?php get_template_part( 'partials/nav', 'offcanvas' ); ?>

					</div> <!-- end #inner-header -->

				</header> <!-- end header -->