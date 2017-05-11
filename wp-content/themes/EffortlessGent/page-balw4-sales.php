<?php
/*
Template Name: BALW v4 Sales Page
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
					border-top: 2px solid #f96027;
				}
				
				body:not(.page-template-page-focused-php) { padding-top: 0; }
				
				body.page-id-8819 /*live*/ {
					padding-top:0;
				}
				
				.container {
					margin:0 auto;
				}
				
				header.header, footer.footer { display:none;visibility:hidden; }
				
				#body,.optin,#faq,#footer, #footer .share { margin-bottom:2rem; }

				.nomargin { margin:0; }
				.nopadding { padding:0; }


				/* special styles for sections */
				.logoWrap { padding-top:1rem;padding-bottom:1rem; }

				.shortcut { background-color:#fff;padding:3em 1em;text-align:center; }

                .packages,
                .packagesdk { margin:2em 0;padding:2.5em; }
                .packages { background:#e5f6f7; }
				.packagesdk { background: #ccc; }

                
                
				.show-for-medium-only .packages { padding:1em 0; }
				

				#head { padding:2rem 0 3rem; }
                body #inner-content { margin-top:0; }
                .hero { padding-bottom:4rem; }
                
				.callout { padding:2em 0 4em; }
				.calloutlight { background:#e5f6f7; }
				.calloutdark { background:#ccc; }
                .calloutwhite { background:#fff; }
				
				.share { padding:2rem 0;background:#fcfcfc;text-align:center; }
			
				#footer { margin-top:2rem; }
			
				.signoff { margin-top:3rem;border: 1px solid #ccc;border-width: 1px 0;padding: 2rem 0 0.5rem; }
			
			
				/* type */
				h1,h2,h3,h4,h5,h6 {
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					color:#4c4845;
                    font-weight:400;
				}
				
				
                .centered { text-align:center; }
				
				
				h1.header {
					color:#f96027;
					font-weight:700;
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
				
                h1.header, h2.subhead { margin-bottom: 2rem; }
                
				h2 { font-weight:400;margin-top:2rem;margin-bottom:1rem;line-height:3rem;font-size:2.25rem; }
				h2.subhead { margin-top: 0; }
				
				h3 { margin-top: 2rem;margin-bottom:1rem; line-height:1.6em; }
                h3.subtitle { margin-top: 0;margin-bottom:2rem; }
                h3.q { margin-top:3rem; }
                
                h4 { margin-top:3rem; }
                
				#copyright {
					text-align:center;
					margin:4em auto 2em;
				}

				p { text-align:justify; }				
				p.small { font-size:0.8em;text-transform:uppercase;text-align:center; }
				p.light { font-weight: 300; }
                .quiet { font-size:1em;color:#999; }
                
				#main a:not(.button):not(.article-title):link,
				#main a:not(.button):not(.article-title):visited { text-decoration:none; }
				
				#main a:not(.button):not(.article-title):hover,
				#main a:not(.button):not(.article-title):focus { background:transparent;color:#2097AE;text-decoration:underline; }
				
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
					color:#f96027;
					text-transform:normal;
				}
				
				p.header-image { margin:2em auto;text-align:center; }
			
				.entry-content blockquote,
				blockquote {
					border-left:4px solid #f96027;
					color: #888;
					font-family: "PT Serif", Garamond, Baskerville, "Baskerville Old Face", "Hoefler Text", "Times New Roman", serif;
					font-style: italic;
					font-size: 1.3rem;
					margin-top: 1.5em;
				    margin-bottom: 1.5em;
				    padding: 0.5em 0.5em 0.5em 1em;
				}

				.entry-content .slick,
				.slick {
					margin-left:0;
				}

			
                .packages .moduleList p { text-align:left;font-size:0.85em; }
                
				#footer span { margin-bottom:1rem; }
			
				#footer p.tweetbutton {
					margin:1rem 0 0;
				}
				
				#footer h3.q { margin: 1rem 0; }
			
			
				#copyright p {
					font-size:0.75rem;
					text-align:center;
				}
                
                .entry-content ul li, .entry-content ol li { margin-bottom:1.2rem; }


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
					background-color:#f96027;
					font-weight:400;
					font-family:"Roboto Condensed",Tahoma,sans-serif;
					margin:0 auto;
					color:#EDCDC1;
					text-transform:uppercase;
				}
				
				.button.gray { background-color:#ccc;color:#666; }
				
				button:hover, button:focus, .button:hover, .button:focus {
					background-color: #f96027 !important;
					color:#fff;
				}
				
				.buttonwrap { text-align:center;margin-top:3em; }
				
				
				
				/* pricing */	
				.pricing-table { border: 0; padding:0 1.5em; }
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
				
				.pricing-table p { line-height:1.4em;font-weight: 300;font-size: 1em; }
				
				.pricing-table .inactive {
					color:#999;
					text-decoration:line-through;
				}
				
				.pricing-table .product-title { margin:1em 0; text-align: center; padding: 1em; background: #e5f6f7; }
				.pricing-table h6 { margin:0; }
				
				.pricing-table .cta-button { background-color:transparent;padding:1.25em 0 0; }
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
			<link href="//fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,700,700italic" rel="stylesheet" type="text/css">
			<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,400italic,700italic,400,700" rel="stylesheet" type="text/css">
			<div id="content">
			
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    	
				<div class="logoWrap calloutdark clearfix">
					<div class="medium-3 small-12 columns">
						<img style="width:8em;" data-interchange="[/wp-content/uploads/2015/07/BALW_logo_240w_v2.png, (only screen and (min-width: 1px))], [/wp-content/uploads/2015/07/BALW_logo_600w_v2.png, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
					</div>
                    <div class="medium-6 hide-for-small-only columns">&nbsp;</div>
                    <div class="medium-3 hide-for-small-only columns">
                        <img style="width:10em;float:right;margin-top:0.8em;" data-interchange="[/wp-content/themes/EffortlessGent/library/images/logo-navcolor.png, (only screen and (min-width: 1px))], [/wp-content/themes/EffortlessGent/library/images/logo-navcolor.png, (only screen and (-webkit-min-device-pixel-ratio: 2))]">
                    </div>
				</div>	
				<div id="head">
					<div class="row">
						<div class="large-12 large-centered columns clearfix">
							<h1 class="header centered"><?php the_title(); ?></h1>	
						</div>
						
						<div class="large-12 large-centered columns">
							<h2 class="subhead centered"><?php the_field('subtitle'); ?></h2>
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