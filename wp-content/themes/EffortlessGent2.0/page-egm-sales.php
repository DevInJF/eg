<?php
/*
Template Name: EG Matching Sales Page
*/
?>

<?php get_header( 'sales' ) ?>

			<style type="text/css">
				/* containers */				
				body {
					background:#0e7eab;
					font-family:"Open Sans",Tahoma,sans-serif;
					color:#fff;
					margin:0;
					border-top: 2px solid #299dc1;
				}
				
				body:not(.page-template-page-focused-php) { padding-top: 0; }
				
				.container {
					margin:0 auto;
				}
				
				header.header, footer.footer { display:none;visibility:hidden; }
				
				#body,.optin,#faq,#footer, #footer .share { margin-bottom:2rem; }

				.nomargin { margin:0; }
				.nopadding { padding:0; }


				/* special styles for sections */
                #logo { background:#fff; }
                .logoWrap { padding-top:1em;padding-bottom:1em; }

				.shortcut { background-color:#299dc1;text-align:center; }

				#head,
				.packages,
				.packagesdk,
                #inner-content { background: #0e7eaa;padding:0; }
                
                body #inner-content { margin-top:0; }

				.show-for-medium-only .packages { padding:1em 0; }
				
				
				.callout { padding:2em 0; }
				.calloutlight, .testi { background:#299dc1; }
				.calloutwhite { background:#fff; color:#0e7eaa; }
				
                .testi { padding:1em;margin:1.5em auto; }
                
                
				.share { padding:2rem 0;text-align:center; }
			
				#footer { margin-top:2rem;background:#0e7eaa; }
			
				.signoff { padding: 3em 0;margin-top:2rem; }
			
			
				/* type */
				h1,h2,h3,h4,h5,h6 {
					font-family:"Open Sans",Tahoma,sans-serif;
					color:#b6effc;
                    font-weight:300;
				}
				
				h1.header, h2.subhead { margin-bottom: 2rem; }
				
				h2.subhead { margin-top: 0; }
				
				h4.q {
                    margin:0;
                    font-style:italic;
					font-weight:400;
					text-transform:normal; }
				
				h1.header {
					text-align:center;
					text-transform: capitalize;
                    line-height:100%;
					margin-top: 3rem;
                    font-weight:700;
				}
				
				h1.header span {
					color:#fff;
					font-size:40%;
					line-height:100%;
					display:block;
				}
				
				h2 { margin-top:3rem; }
				h2.subhead { text-align:center; }
				
				h3 { margin-top: 2rem; }
			
                h3,h4 { letter-spacing:0.02rem; }
                
				#copyright {
					text-align:center;
				}

				p { text-align:justify;line-height: 1.5;margin-bottom: 1.8rem; }
                p,ol,ul,li { font-weight:300; }
                
                b, strong { font-weight:700; }
                em { font-style:italic;font-weight:inherit !important; }
				p.small { font-size:50%;text-transform:uppercase;text-align:center; }
				p.light { font-weight: 300; }
				
				#main a:not(.button):not(.article-title):link,
				#main a:not(.button):not(.article-title):visited { text-decoration:none; }
				
				#main a:not(.button):not(.article-title):hover,
				#main a:not(.button):not(.article-title):focus { background:transparent;color:#b6effc;text-decoration:underline; }
				
                .guarantee p { font-size:1em;margin-bottom:0.9em;color:#b6effc; }
				
				p.header-image { margin:2em auto;text-align:center; }
                
                .entry-content blockquote,
                blockquote {
					border-left:0;
					margin: 0 !important;
				    padding: 0;
                    color: #b6effc;
					font-family:"Playfair Display", "Hoefler Text",  Times, serif;
					font-style: italic;
                    font-size:1.2rem;
				}
                
                .entry-content blockquote p,
                blockquote p {
                    color: #b6effc;
					font-family:"Playfair Display", "Hoefler Text",  Times, serif;
					font-style: italic;
					font-size:1.2rem;
                    margin-bottom: 0;
                }

                blockquote cite { color:#fff;line-height:1.5em; }
                
				.entry-content .slick,
				.slick {
					margin-left:0;
				}

			
				#footer span { margin-bottom:1rem; }
			
				#footer p.tweetbutton {
					margin:1rem 0 0;
				}
			
				#copyright p {
					font-size:0.75rem;
					text-align:center;
				}



				/* form */
				input[type="text"], input[type="name"], input[type="password"], input[type="date"], input[type="datetime"], input[type="datetime-local"], input[type="month"], input[type="week"], input[type="email"], input[type="number"], input[type="search"], input[type="tel"], input[type="time"], input[type="url"], textarea {
					background-color:#0e7eaa;
					box-shadow:none;
					border-color:#0e7eaa;
				}
				
				label {
					color:#fff;
				}
				
				.button {
					background-color:#b6effc;
					font-family:"Open Sans Condensed",Tahoma,sans-serif;
					margin:0 auto;
					color:#0e7eaa;
					text-transform:uppercase;
				}
				
				.button.gray { background-color:#ccc;color:#666; }
				
				button:hover, button:focus, .button:hover, .button:focus {
					color:#0e7eaa !important;
                    background:#fff !important;
				}
				
                
				.buttonwrap { text-align:center;margin-top:3em; }
				
				
				
				/* pricing */	
				.pricing-table { border: 0; padding:0; }
				.pricing-table .bullet-item {
					padding:0.5em 1em;
					background:#299dc1;
					margin-bottom:0.5em;
					text-align:left;
					border-bottom:0;
					line-height:1.4em;
					font-family:"Open Sans",Tahoma,sans-serif;
					font-size:1.25rem;
					font-weight:300;
                    color:#fff;
                    text-align:center;
				}
				
				.pricing-table p { line-height:1.4em;font-weight: 300;font-size: 1em; }
				
				.pricing-table .inactive {
					color:#299dc1;
					text-decoration:line-through;
				}
				
				.pricing-table .product-title { margin:1em 0; text-align: center; padding: 1em; }
				.pricing-table h6 { margin:0; }
				
				.pricing-table .cta-button { background-color:transparent;text-align:left;padding:1.25em 0 0; }
				.pricing-table .button { font-weight:300; }
				
					/*show for medium only*/
					.package-group { margin-bottom:3em;padding-bottom:3em;border-bottom:1px solid #eee; }
					
					.package-wrap .first-package { margin-top:2em; }				
					.package-wrap .last-package { border-bottom:0;margin-bottom:0;padding-bottom:0; }
					
					.show-for-medium-only .pricing-table .product-title { margin-top: 0; }
				
				/* other styles */
                
                
				hr {
					border-color:#299dc1;
					margin:4rem 0 0.5rem;
				}
			</style>
			
			<script src="js/vendor/modernizr.js"></script>
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700,300italic,700italic|Playfair+Display:400,700italic,700,400italic|Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
				<div id="logo">
                    <div class="row">
					   <div class="logoWrap large-3 medium-3 small-6 large-uncentered medium-uncentered small-centered columns clearfix">
						  <img data-interchange="[/wp-content/uploads/2016/02/egmatching_logo_960w.png, (only screen and (min-width: 1px))], [/wp-content/uploads/2016/02/egmatching_logo_1920w.png, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
					   </div>
                    </div>
				</div>	
				<div id="head">
					<div class="row">
						<div class="large-11 large-centered columns clearfix">
							<h1 class="header"><?php the_title(); ?></h1>	
						</div>
						
						<div class="large-11 large-centered columns">
							<h2 class="subhead"><?php the_field('subtitle'); ?></h2>
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