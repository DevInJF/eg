<?php
/*
Template Name: LWC Guide Sales Page
*/
?>

<?php get_header( 'focused' ) ?>

			<style type="text/css">
				/* containers */				
				body {
					background:#e1e2e4;
					font-family:"Roboto",Tahoma,sans-serif;
					color:#4c4845;
					margin:0;
					border-top: 2px solid #e26638;
				}
				
				body:not(.page-template-page-focused-php) { padding-top: 0; }
				
				body.page-id-8055,/*staging*/
				body.page-id-8077 /*live*/ {
					padding-top:0;
				}
				
				body.page #inner-content { margin-top: 0; }
				
				.container {
					margin:0 auto;
				}
				
				header.header, footer.footer { display:none;visibility:hidden; }
				
				
				#body,.optin,#faq,#footer, #footer .share { margin-bottom:2rem; }

				/* special styles for sections */

				.logoWrap { padding-top:1rem;padding-bottom:1rem; }

				.shortcut { border:1px solid #ccc; background-color:#fff;padding:2em;text-align:center; }

				#head,
				.packages { background: #fff;padding:0 0 3rem; }
			
				.share { padding:2rem 0;background:#fcfcfc;text-align:center; }
			
				#footer { margin-top:2rem; }
			
				.signoff { margin-top:6rem;border: 1px solid #ccc;border-width: 1px 0;padding: 2rem 0 0.5rem; }
			
				/* type */
				h1,h2,h3,h4,h5,h6 {
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					color:#4c4845;
				}
				
				h1.header, h2.subhead { margin-bottom: 2rem; }
				
				h2.subhead { margin-top: 0; }
				
				h3.q { margin:0; }
				
				h1.header {
					color:#e26638;
					font-weight:700;
					text-align:center;
					line-height:100%;
					text-transform:uppercase;
					margin-top: 3rem;
				}
				
				h1.header span {
					color:#4c4845;
					font-size:40%;
					line-height:100%;
					display:block;
					font-weight:400;
				}
				
				h2 { font-weight:400;margin-top:3rem; }
			
				h3 { margin-top: 2rem; }
			
				#copyright {
					text-align:center;
					margin:4em auto 2em;
				}
				
				#main a:not(.button):not(.article-title):link,
				#main a:not(.button):not(.article-title):visited { text-decoration:none; }
				
				#main a:not(.button):not(.article-title):hover,
				#main a:not(.button):not(.article-title):focus { background:transparent;color:#2097AE;text-decoration:underline; }
				
				p.small { font-size:50%;text-transform:uppercase;text-align:center; }
				p.light { font-weight: 300; }
				
				.optin h3 {
					text-align:center;
					color:#e1e2e4;
					margin-bottom:1em;
					text-transform:uppercase;
				}
				
				.optin p.quote { color:#e1e2e4; }
				
				
				h3.q { 
					font-style:italic;
					font-weight:400;
					color:#e26638;
					text-transform:normal;
				}
				
				p.header-image { margin:2em auto;text-align:center; }
			
				.entry-content blockquote {
					border-left:4px solid #e26638;
				}
				
				.entry-content blockquote p {
					color: #888;
					font-size: 1.3rem;
					margin-bottom:1rem;
					font-style: italic;
				}
			
				#footer span { margin-bottom:1rem; }
			
				#footer p.tweetbutton {
					margin:1rem 0 0;
				}
				
				#footer h3.q { margin: 1rem 0; }
			
			
				#copyright p {
					font-size:0.75rem;
					text-align:center;
				}
			
			
				
				
				/* form */
				input[type="text"], input[type="name"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {
					background-color:#e1e2e4;
					box-shadow:none;
					border-color:#e1e2e4;
				}
				
				label {
					color:#e1e2e4;
				}
				
				.button {
					background-color:#e26638;
					font-weight:400;
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					margin:0 auto;
					color:#EDCDC1;
					text-transform:uppercase;
				}
				
				.button.gray { background-color:#ccc;color:#666; }
				
				button:hover, button:focus, .button:hover, .button:focus {
					background-color: #e26638 !important;
					color:#fff;
				}
				
				.buttonwrap { text-align:center;margin-top:3em; }
				
				
				
				/* pricing */	
				.pricing-table { border: 0; padding:0 2em; }
				.pricing-table .bullet-item {
					padding:0;
					background:transparent;
					margin-bottom:0.5em;
					text-align:left;
					border-bottom:0;
					line-height:1.4em;
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					font-size:1.25rem;
					font-weight:300;
				}
				
				.pricing-table .product-title { margin:1em 0; text-align: center; padding: .5em; background: #e1e2e4; }
				.pricing-table h6 { margin:0; }
				
				.pricing-table .cta-button { text-align:left;padding:1.25em 0 0; }
				.pricing-table .button { font-weight:300; }
				
					/*show for medium only*/
					.package-group { margin-bottom:3em;padding-bottom:3em;border-bottom:1px solid #eee; }
					
					.package-wrap .first-package { margin-top:2em; }				
					.package-wrap .last-package { border-bottom:0;margin-bottom:0;padding-bottom:0; }
					
					.show-for-medium-only .pricing-table .product-title { margin-top: 0; }
				
				/* other styles */
				
				hr {
					border-color:#c3c5c8;
					margin:4rem 0 0.5rem;
				}
			</style>
			
			<script src="js/vendor/modernizr.js"></script>
			<link href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css">
			<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700italic,400,700" rel="stylesheet" type="text/css">
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
				<div class="row">
					<div class="logoWrap large-12 small-4 columns clearfix">
						<img data-interchange="[/wp-content/themes/EffortlessGent/library/images/lwcg/lwcg_logo.gif, (only screen and (min-width: 1px))], [/wp-content/themes/EffortlessGent/library/images/lwcg/lwcg_logo@2x.gif, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
					</div>
				</div>	
				<div id="head">
					<div class="row">
						<div class="large-10 large-centered columns clearfix">
							<h1 class="header"><?php the_title(); ?></h1>	
						</div>
						
						<div class="large-8 large-centered columns">
							<div class="large-8 medium-7 small-12 columns">
								<h2 class="subhead"><?php the_field('subtitle'); ?></h2>
							</div>
							<div class="large-4 medium-5 small-12 columns last">
								<p style="text-align:center;"><img data-interchange="[/wp-content/themes/EffortlessGent/library/images/lwcg/lwcg_book_large.gif, (only screen and (min-width: 1px))], [/wp-content/themes/EffortlessGent/library/images/lwcg/lwcg_book_large@2x.gif, (only screen and (-webkit-min-device-pixel-ratio: 2))]"></p>
							</div>
						</div>
					</div><!-- row -->
				</div>
				<div id="inner-content">
					
				    <div id="main" role="main">
					
					    	<?php get_template_part( 'partials/loop', 'page' ); ?>
					    					
    				</div> <!-- end #main -->
				    
				</div> <!-- end #inner-content -->

		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'partials/content', 'missing' ); ?>

		    <?php endif; ?>
    
			</div> <!-- end #content -->
			

<?php get_footer( 'focused' ); ?>
		<script src="/wp-content/themes/EffortlessGent/bower_components/foundation/js/vendor/jquery.js"></script>
		<script src="/wp-content/themes/EffortlessGent/bower_components/foundation/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>